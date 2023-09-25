<script>
$(document).ready(function(){
	<?php if($datatrx['isMerchantPartner']!='1'){?>
	$('#input_merchant_partner').slideUp("fast");
	<?php }?>
	var memberdata;
	get_provinsi();
	//color scheme for iCheck
	$('input[type="checkbox"].flat-blue').iCheck({
		checkboxClass: 'icheckbox_flat-blue'
	});
    $('.skin-square input').iCheck({
        checkboxClass: 'icheckbox_square-red',
        radioClass: 'iradio_square-red',
    });
	$(".select2").select2();
	// Input, Select, Textarea validations except submit button
	$("input,select,textarea").not("[type=submit]").jqBootstrapValidation({
		preventSubmit: false,
		submitSuccess: function (form, event) {
			event.preventDefault();
			confirm_submit(event);
		},
		submitError: function (form, event, errors) {
			event.preventDefault();
			$('#tabConfig-tab1').trigger('click');
			swal('failed', 'Check Your Input', "error");
		}
    });
	<?= ($action['code']==0)?'gen_member_code()':''?>
	
	//setup before functions
	var typingTimer;                //timer identifier
	var doneTypingInterval = 1500;  //time in ms, 5 second for example
	var $input = $('#handphone');

	//on keyup, start the countdown
	$input.on('keyup', function () {
	  clearTimeout(typingTimer);
	  typingTimer = setTimeout(doneTyping, doneTypingInterval);
	});
	
	$input.on('focusout', function () {
	  // validasi_hp();
	});

	//on keydown, clear the countdown 
	$input.on('keydown', function () {
	  clearTimeout(typingTimer);
	});

	//user is "finished typing," do something
	function doneTyping () {
	  //do something
	  validasi_hp();
	}

		// $(".select_date_d").select2({
			// placeholder: "dd",
			// allowClear: true
		// });
		$(".select_provinces").select2({
			placeholder: "Pilih Provinsi"
		});
		$(".select_district").select2({
			placeholder: "Pilih Kabupaten"
		});
		$(".select_village").select2({
			placeholder: "Pilih Kecamatan"
		});
		$(".select_city").select2({
			placeholder: "Pilih Kelurahan"
		});
		
		$("#inputImage").change(function(){
			readURL(this);
		});
		$("input[name=t_is_merchant_partner]").change(function () {
			if(this.value==1)
			{
				$('#input_merchant_partner').slideDown();
			}else{
				$('#input_merchant_partner').slideUp();
			}
		});
		
    // Select With Icon
    $(".select2-icons").select2({
        minimumResultsForSearch: Infinity,
        templateResult: iconFormat,
        templateSelection: iconFormat,
        escapeMarkup: function(es) { return es; }
    });
});
	function confirm_submit(e)
	{
		showProgres();
		swal({
			title: "Continue?",
			text: "Your changes will be saved",
			type: "warning",
			buttons: ["No", "Yes"],
		 }).then((value) => {
			 hideProgres();
            	if (value === false) return false;
			    if (value) {
					submit_form_profile(e);
					hideProgres();
			        return false;
			    }
            });
	}
	
	function submit_form_profile(e)
	{
		showProgres();
		$.post(site_url+"membership/member/save_member"
			,$('#'+e.target.id+'').serialize()
			,function(result) {
				if(result['error'])
				{	
					swal(result['header']||'error', result['error']||'', "error");
				}else
				{
					swal(result['header']||'success', result['success']||'', "success").then((value) => {
						window.location = site_url+'membership/member/input/'+result['id'];
					});;
				}
				hideProgres();
			}					
			,"json"
		);
	}
	
	
	function gen_member_code()
	{	
		show_hide_partner();
		showProgres();
		$.post(site_url+"membership/member/gen_member_code"
			,{t_member_category:$('#member_category').val()
			,t_storecode:$('#storecode').val()}
			,function(result) {
				// $('#membercode').val(result['MemberCode']);
				hideProgres();
			}					
			,"json"
		);
	}
	
	function show_hide_partner()
	{
		var membercategory = $('#member_category').val();
		if(membercategory == 13)
		{
			$('#input_merchant_partner').slideDown("fast");
		}else{
			$('#input_merchant_partner').slideUp("fast");
		}
		
	}
	
	
	
	
	
	function validasi_hp_lokal()
	{
		
	}
	

	
	function validasi_hp()
	{
		showProgres();
		$('#handphone_checked').hide();
		$.post(site_url+"membership/member/validasi_hp"
			,{t_handphone:$('#handphone').val()
			,t_membercode:"<?=encode($datatrx['MemberCode'])?>"}
			,function(result) {
				// console.log(result);
				if(result['result_error']!='')
				{
					// alert(result['result_error']);
					swal('failed..!', result['result_error']||'', "error");
					$('#handphone').focus();
					hideProgres();
					return false;
				}else{
					if (typeof result['Member'] !== 'undefined') {
						if(result['Member']['CustCode']!='')
						{
							$('#handphone_checked').show();
							$('#member_name').text(result['Member']['Name']);
							memberdata = result;
						}
					}
				}
				hideProgres();
			}					
			,"json"
		);
		return true;
	}
	
	function fill_member_data()
	{
		result = memberdata;
		$('#name').val(result['Member']['Name']);
		$('#idcardnumber').val(result['Member']['IDCardNum']);
		$('#Email').val(result['Member']['Email']);
		$('#phone').val(result['Member']['HP']);
		if(result['Member']['Sex']=='1')
		{
			$('#gender_male').prop("checked",true);
		}else{
			$('#gender_female').prop("checked",true);
		}
		if(result['Member']['Married']=='1')
		{
			$('#sts_single').prop("checked",true);
		}else{
			$('#sts_married').prop("checked",true);
		}
		$('#cityofbirth').val(result['Member']['CityOfBirth']);
		if(result['Member']['DateOfBirth']!='')
		{
			var dob = result['Member']['DateOfBirth'];
			var year = dob.substr(0,4);
			var day = dob.substr(8,2).replace(/^0+/, '');
			var month = dob.substr(5,2).replace(/^0+/, '');
			$('#dateofbirth_y').val(year).trigger('change');
			$('#dateofbirth_d').val(day).trigger('change');
			$('#dateofbirth_m').val(month).trigger('change');
		}
		$('#rt').val(result['Member']['RT']);
		$('#rw').val(result['Member']['RW']);
		$('#address').val(result['Member']['Address']);
		$('#poscode').val(result['Member']['PosCode']);
		if(result['Member']['ValidUntil']!='')
		{
			var dob_v = result['Member']['ValidUntil'];
			var year_v = dob_v.substr(0,4);
			var day_v = dob_v.substr(8,2).replace(/^0+/, '');
			var month_v = dob_v.substr(5,2).replace(/^0+/, '');
			$('#validuntil_y').val(year_v).trigger('change');
			$('#validuntil_d').val(day_v).trigger('change');
			$('#validuntil_m').val(month_v).trigger('change');
		}
		return false;
	}
	
		function get_provinsi()
		{
			$.post(site_url+"membership/member/get_provinsi"
				,{t_default:"<?=encode($datatrx['Provinces'])?>"}
				,function(result) {
					$('#provinces').html(result).trigger("liszt:updated");
					get_districts();
					// get_regencies();
					// get_villages();
					$('#district').val('');
					// $('#provinces').prop('selectedIndex', 0).change();
				});
		}
		
		function get_districts()
		{
			$.post(site_url+"membership/member/get_districts/"+$('#provinces').val()
				,{t_default:"<?=encode($datatrx['District'])?>"}
				,function(result) {
					$('#district').html(result).trigger("liszt:updated");
					// hideProgres();
					get_regencies();
					// get_villages();
					$('#village').val('');
					$('#city').val('');
					// $('#district').prop('selectedIndex', 0).change();
				}					
				,"html"
			);
		}
		
		function get_regencies()
		{
			$.post(site_url+"membership/member/get_regencies/"+$('#district').val()
				,{t_default:"<?=encode($datatrx['Village'])?>"}
				,function(result) {
					$('#village').html(result).trigger("liszt:updated");
					// hideProgres();
					get_villages();
					$('#city').val('');
					// $('#village').prop('selectedIndex', 0).change();
				}					
				,"html"
			);
		}
		
		function get_villages()
		{
			$.post(site_url+"membership/member/get_villages/"+$('#village').val()
				,{t_default:"<?=encode($datatrx['City'])?>"}
				,function(result) {
					$('#city').html(result).trigger("liszt:updated");
					// hideProgres();
					// $('#city').prop('selectedIndex', 0).change();
				}					
				,"html"
			);
		}
		
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$('#img_preview').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
				
				var fd = new FormData();
				var files = input.files[0];
				var membercode = $('#pic_transnum').val();
				fd.append('t_img_file',files);
				$.ajax({
					url: site_url+"membership/member/upload_image/"+membercode,
					type: 'POST',
					data: fd,
					success: function (result) {
						alert(result);
					},
					cache: false,
					contentType: false,
					processData: false
				});
				
				// setTimeout(function(){ upload_img(); }, 1000);
				// var fd = new FormData();
				// var files = input.files[0];
				// fd.append('file',files);
				
			}
		}
		
		function pageLoadMemberBeonLookup(pg)
		{
			var search_name = $('#lookup_key').val();
			var birthdate = $('#birthdate').val();
			if(search_name.length < 3){
				swal('Attention', 'Nama Pencarian Minimal 3 karakter', "error").then((value) => {
					$('#lookup_key').focus();
				});
			}else{
				if(birthdate == '')
				{
					swal('Attention', 'Birth Date masih kosong', "error").then((value) => {
						$('#birthdate').focus();
					});
				}else{
					showProgres();
					$.post(site_url+'membership/member/page_lookup_member_beon/'+pg
						,{t_search_key : $('#lookup_key').val()
						,t_row_per_page : $('#row_per_page').val()
						,t_birthdate : $('#birthdate').val()
						,t_store_search_beon : $('#store_search_beon').val()}
						,function(result) {
							$('#resultContentLookup').html(result);
							hideProgres();
						}	
						,"html"
					);
				}
			}
		}
		
		function select_lookup_member_beon(custcode)
		{
			
			showProgres();
			swal({
				title: "Continue?",
				text: "Customer data will be Downloaded",
				type: "warning",
				buttons: ["No", "Yes"],
			 }).then((value) => {
				 hideProgres();
					if (value === false) return false;
					if (value) {
						$.post(site_url+"membership/member/select_lookup_member_beon/"+custcode
							,{}
							,function(result) {
								if(result['error'])
								{	
									swal(result['header']||'error', result['error']||'', "error");
								}else
								{
									swal(result['header']||'success', result['success']||'', "success").then((value) => {
										window.location = site_url+'membership/member/input/'+result['id'];
									});;
								}
								hideProgres();
							}					
							,"json"
						);
						hideProgres();
					}
				});
		}
</script>
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="horz-layout-colored-controls"><?=$action['description']?></h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
						<li <?=($action['code']==0)?'hidden':''?>>	 
							<a  class="btn btn-lg btn-icon btn-light mr-1" href="<?=base_url()?>membership/member/info/<?=encode($datatrx['MemberCode'])?>"><i class="ft-arrow-left float-left"></i>&nbsp;Back</a>			 
						</li>
						<li>
							<a class="btn btn-lg btn-icon btn-light mr-1" href="<?=base_url()?>membership/member/input"><i class="ft-plus-square float-left"></i>&nbsp;Tambah</a>	 
						</li>
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                    <div class="card-text">
						<ul class="nav nav-tabs">
						  <li class="nav-item">
							<a class="nav-link active" id="tabConfig-tab1" data-toggle="tab" aria-controls="tabConfig" href="#tabConfig" aria-expanded="true"><i class="la la-user"></i> Member Profile</a>
						  </li>
						</ul>
                    </div>
					<section class="input-validation">
							<form  id="form_pic">
								<input id="pic_transnum" name="t_pic_transnum" type="hidden" value="<?=encode($datatrx['MemberCode'])?>">
								<div class="row <?=($action['code']==0)?'hidden':''?>">
									<div class="card-body ">
										<div class="text-center">
										<div class="card-profile-image">
											<img name="t_img_preview" id="img_preview" src="<?=getProfileImageMobile($datatrx['MemberCode'],0)?>" class="rounded-circle  height-150" alt="Card image">
										</div> 
											<label title="Upload image file" for="inputImage" class="d-button btn btn-primary">
												<input type="file" accept="image/*" name="t_inputImage" id="inputImage" hidden  >
												Upload Photo <i class="la la-camera"></i> 
											</label>
										</div>
									</div>
								</div>
							</form>
							<form  id="form_profile" autocomplete="off" novalidate>
							<div class="tab-content px-1 pt-1">
							  <div role="tabpanel" class="tab-pane active" id="tabConfig" aria-expanded="true" aria-labelledby="tabConfig-tab1">
								<div class="row">
									<div class="form-horizontal col-md-12">
									<input id="transnum" name="t_transnum" type="hidden" value="<?=encode($datatrx['MemberCode'])?>">
									<input id="action" name="t_action" type="hidden" value="<?=($action['code'])?>">
									  <div class="form-body">
										<h4 class="form-section <?=($action['code']==0)?'hidden':''?>"><i class="la la-eye"></i> Profile Picture</h4>
										<div class="card-header" style=" padding: 1.2rem 0.1rem;">
										<h4 class="form-section"><i class="la la-asterisk"></i> About User</h4>
										  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
										  <div class="heading-elements <?=($action['code']==1)?'hidden':''?>" style="background-color: unset;" >
											<button type="button" class="btn mr-1 mb-1 btn-primary btn-sm" onclick="modalview('membership/member/lookup_member_beon','Searching Member')"><i class="la la-cloud-download"></i> Download Old Member</button>
										  </div>
										</div>
										<div class="row">
										  <div class="col-md-6">
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="member_category">Member Category</label>
											  <div class="col-md-9">
												<div class="controls">
												 <select <?=($action['code']==1)?'disabled':''?> class="select2 form-control"  placeholder="Member Cateogry" maxlength="2" id="member_category" name="t_member_category" <?=($action['code']==0)?'onchange="gen_member_code()";':'';?>>
													<?php foreach($custcat as $cuskey=>$cus){ ?>
													  <option <?= ($datatrx['fidMemberCategory']==$cus['CatCode'])?'selected':'' ?> value="<?=$cus['CatCode']?>"><?=$cus['CatCode']?> - <?=$cus['Description']?></option>
													<?php }?>
												</select>
												</div>
											  </div>
											</div>
										  </div>
										  <div class="col-md-6">
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="storecode">Store Code Register</label>
											  <div class="col-md-9" <?=($action['code']==1)?'hidden':''?>>
											   <select <?=($action['code']==1)?'disabled':''?> class="select2 form-control"  placeholder="Member Cateogry" id="storecode" name="t_storecode"  onchange="gen_member_code()";>
													<?php foreach($strlist as $strkey=>$str){ ?>
													  <option <?= ($datatrx['StoreCode']==$str['StoreCode'])?'selected':'' ?> value="<?=$str['StoreCode']?>"><?=$str['StoreCode']?> - <?=$str['Description']?></option>
													<?php }?>
												</select>
											  </div>
											  <div class="col-md-9"  <?=($action['code']==0)?'hidden':''?>>
												<div class="controls">
												<input readonly type="text"class="form-control border-primary" placeholder="" value="<?=$datatrx['StoreCode']?>" >
												</div>
											  </div>
											</div>
										  </div>
										</div>
										<div class="row">
										  <div class="col-md-6">
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="membercode">Member Code</label>
											  <div class="col-md-9">
												<div class="controls">
													<input readonly <?=($action['code']==1)?'readonly':''?> type="text" class="form-control border-primary" placeholder="AUTO" maxlength="11" id="membercode" name="t_membercode" value="<?=$datatrx['MemberCode']?$datatrx['MemberCode']:''?>" >
												</div>
											  </div>
											</div>
										  </div>
										  <div class="col-md-6">
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="barcode">Barcode</label>
											  <div class="col-md-9">
												<input readonly type="text"class="form-control border-primary" placeholder="" maxlength="20" id="barcode" name="t_barcode" value="<?=$datatrx['Barcode']?>">
											  </div>
											</div>
										  </div>
										</div>
										<div class="row hidden">
										  <div class="col-md-6">
												<div class="form-group row">
												  <label class="col-md-3 label-control" for="">Merchant Partner</label>
												  <div class="col-md-9">
													<div class="input-group">
													  <div class="d-inline-block custom-control custom-radio mr-1">
														<input <?=($datatrx['isMerchantPartner']==0)?'checked=""':''?>  type="radio" name="t_is_merchant_partner" class="custom-control-input"  value="0" id="is_merchant_partner_no">
														<label class="custom-control-label" for="is_merchant_partner_no">No</label>
													  </div>
													  <div class="d-inline-block custom-control custom-radio">
														<input <?=($datatrx['isMerchantPartner']==1)?'checked=""':''?>  type="radio" name="t_is_merchant_partner" class="custom-control-input"  value="1" id="is_merchant_partner_yes" checked>
														<label class="custom-control-label" for="is_merchant_partner_yes">Yes</label>
													  </div>
													</div>
												  </div>
												</div>
											</div>
										</div>
										<div id="input_merchant_partner" >
										<h4 class="form-section"><i class="ft-codepen"></i> Merchant Partner</h4>
											<div class="row">
											  <div class="col-md-6">
												<div class="form-group row">
												  <label class="col-md-3 label-control" for="merchant_id">Select Merchant</label>
												  <div class="col-md-9">
													<div class="controls">
													<select data-placeholder="Select a state..." class="select2-icons form-control" id="merchant_id" name="t_merchant_id">
														<?php foreach($list_merchant->result_array() as $key=>$row){?>
														  <option <?= ($datatrx['MerchantPartnerCode']==$row['MerchantPartnerCode'])?'selected':'' ?> value="<?=$row['MerchantPartnerCode']?>" data-icon="safari"><?=$row['MerchantPartnerCode']?> - <?=$row['Name']?></option>
														<?php }?>
													  </select>
												  </div>
												  </div>
												</div>
											  </div>
											  <div class="col-md-6">
												<div class="form-group row">
												  <label class="col-md-3 label-control" for="merchant_code">Merchant Code</label>
												  <div class="col-md-9">
													<div class="controls">
														<input type="text" class="form-control border-primary" placeholder="Merchant Code" maxlength="20" id="merchant_code" name="t_merchant_code" value="<?=$datatrx['MemberCodeMerchantPartner']?>">
													</div>
												  </div>
												</div>
											  </div>
											</div>
										</div>
										<h4 class="form-section"><i class="ft-mail"></i> Contact Info</h4>
										<div class="row">
										  <div class="col-md-6">
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="Handphone">Handphone
											  <small class="badge badge-default badge-danger">*</small></label>
											  
											  <div class="col-md-9">
												<div class="controls">
												<input class="form-control border-primary" type="phone" placeholder="081..." maxlength="30" id="handphone" name="t_handphone" value="<?=$datatrx['Handpone']?>" required data-validation-required-message="This field is required">
												<p class="text-muted" id="handphone_checked" style="display:none">No hp sudah terdaftar an: <a id="member_name"></a> <code><a onclick="fill_member_data()">klik disini</a></code> untuk menggunakan data ini</p>
											  </div>
											  </div>
											</div>
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="name">Full Name
											  <small class="badge badge-default badge-danger">*</small></label>
											  <div class="col-md-9">
												<div class="controls">
												<input type="text"class="form-control border-primary" placeholder="Enter FullName" maxlength="50" id="name" name="t_name" value="<?=$datatrx['Name']?>" required data-validation-required-message="This field is required">
												</div>
											  </div>
											</div>
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="">Gender</label>
											  <div class="col-md-9">
												<div class="input-group">
												  <div class="d-inline-block custom-control custom-radio mr-1">
													<input type="radio" name="t_gender" class="custom-control-input" <?=($datatrx['Sex']==1)?'checked=""':''?> value="1" id="gender_male">
													<label class="custom-control-label" for="gender_male">Male</label>
												  </div>
												  <div class="d-inline-block custom-control custom-radio">
													<input type="radio" name="t_gender" class="custom-control-input" <?=($datatrx['Sex']==2)?'checked=""':''?> value="2" id="gender_female">
													<label class="custom-control-label" for="gender_female">Female</label>
												  </div>
												</div>
											  </div>
											</div>
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="">is Married</label>
											  <div class="col-md-9">
												<div class="input-group">
												  <div class="d-inline-block custom-control custom-radio mr-1">
													<input type="radio" name="t_married" class="custom-control-input" <?=($datatrx['Married']==1)?'checked=""':''?> id="sts_single" value="1">
													<label class="custom-control-label" for="sts_single">Single</label>
												  </div>
												  <div class="d-inline-block custom-control custom-radio">
													<input type="radio" name="t_married" class="custom-control-input" <?=($datatrx['Married']==2)?'checked=""':''?>  id="sts_married" value="2">
													<label class="custom-control-label" for="sts_married">Married</label>
												  </div>
												</div>
											  </div>
											</div>
										  </div>
										  <div class="col-md-6">
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="idcardnumber">ID Card (KTP/SIM)</label>
											  <div class="col-md-9">
												<div class="controls">
													<input type="text" class="form-control border-primary" placeholder="KTP / SIM" maxlength="20" id="idcardnumber" name="t_idcardnumber" value="<?=$datatrx['IdCardNumber']?>">
												</div>
											  </div>
											</div>
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="email">Email</label>
											  <div class="col-md-9">
												<div class="controls">
													<input class="form-control border-primary" type="email" placeholder="" id="email" maxlength="30" name="email" value="<?=$datatrx['Email']?>">
												</div>
											  </div>
											</div>
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="phone">Telephone</label>
											  <div class="col-md-9">
												<div class="controls">
												<input class="form-control border-primary" type="phone" placeholder="(022)..." maxlength="30" id="phone" name="t_phone" value="<?=$datatrx['Phone']?>">
												</div>
											  </div>
											</div>
										  </div>
										</div>
										<h4 class="form-section"><i class="ft-mail"></i> Birth Info</h4>
										<div class="row">
										  <div class="col-md-6">
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="">Birth Place</label>
											  <div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Birth Location" maxlength="20" id="cityofbirth" name="t_cityofbirth" value="<?=$datatrx['CityOfBirth']?>">
											  </div>
											</div>
										  </div>
										  <div class="col-md-6">
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="dateofbirth">Birth Date 
											  <small class="badge badge-default badge-danger">*</small></label>
												<?php 
													$d_dob_default	= substr($datatrx['DateOfBirth'],8,2)?:'0';
													$m_dob_default	= substr($datatrx['DateOfBirth'],5,2)?:'0';
													$y_dob_default	= substr($datatrx['DateOfBirth'],0,4)?:'0';
												?>
											  <div class="col-md-2">
												<div class="controls">
												 <select class="select_date_d select2 form-control" id="dateofbirth_d" name="t_dateofbirth_d" >
													  <option value="0">dd</option>
													<?php 
													for($i=1;$i<=31;$i++){ ?>
													  <option <?=$d_dob_default==$i?'selected':''?> value="<?=$i?>"><?=$i?></option>
													<?php }?>
												</select>
												</div>
											  </div>
											  <div class="col-md-2">
												<div class="controls">
												 <select placeholder="month" class="select2 form-control" id="dateofbirth_m" name="t_dateofbirth_m" >
													  <option value="0">mm</option>
													<?php for($i=1;$i<=12;$i++){ ?>
													  <option <?=$m_dob_default==$i?'selected':''?> value="<?=$i?>"><?=get_month_name($i,1)?></option>
													<?php }?>
												</select>
												</div>
											  </div>
											  <div class="col-md-3">
												<div class="controls">
												<?php 
												$y_first = date('Y', strtotime('-100 years'));
												$y_last = date('Y');
												?>
												 <select placeholder="year" class="select2 form-control" id="dateofbirth_y" name="t_dateofbirth_y" >
													  <option value="0">yyyy</option>
													<?php for($i= $y_first ;$i<=$y_last; $i++){ ?>
													  <option <?=$y_dob_default==$i?'selected':''?> value="<?=$i?>"><?=$i?></option>
													<?php }?>
												</select>
												</div>
											  </div>
											</div>
										 </div>
										</div>
										<h4 class="form-section"><i class="ft-mail"></i> Address</h4>
										<div class="row">
										  <div class="col-md-6">
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="provinces">Provinces / Provinsi</label>
											  <div class="col-md-9">
												<div class="controls">
													<select class="select_provinces select2 form-control"  name="t_provinces" id="provinces" onchange="get_districts()">
													</select>
												</div>
											  </div>
											</div>
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="district">District / Kabupaten</label>
											  <div class="col-md-9">
												<div class="controls">
													<select class="select_district select2 form-control"  name="t_district" id="district" onchange="get_regencies()">
													</select>
												</div>
											  </div>
											</div>
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="village">Village / Kecamatan</label>
											  <div class="col-md-9">
												<div class="controls">
													<select class="select_village select2 form-control"  name="t_village" id="village" onchange="get_villages()">
													</select>
												</div>
											  </div>
											</div>
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="city">City / Kelurahan</label>
											  <div class="col-md-9">
												<div class="controls">
													<select class="select_city select2 form-control"  name="t_city" id="city">
													</select>
												</div>
											  </div>
											</div>
										  </div>
										  <div class="col-md-6">
											<div class="form-group row">
												 <label class="col-md-3 label-control" for="">RT & RW</label>
												 <div class="col-md-3">
												<div class="controls">
													<input class="form-control border-primary" type="number" placeholder=""  maxlength="5" id="rt" name="t_rt" value="<?=$datatrx['RT']?>">
												 </div>
												 </div>
												 <div class="col-md-3">
													<div class="controls">
														<input class="form-control border-primary" type="number" placeholder="" maxlength="3" id="rw" name="t_rw" value="<?=$datatrx['RW']?>">
													 </div>
												 </div>
											</div>
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="">Address</label>
											  <div class="col-md-9">
												<div class="controls">
													<textarea rows="4" class="form-control border-primary" placeholder="" maxlength="100" id="address" name="t_address"><?=$datatrx['Address']?></textarea>
												</div>
											  </div>
											</div>
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="poscode">PosCode / Kode Pos</label>
											  <div class="col-md-3">
												<div class="controls">
													<input class="form-control border-primary" type="number" placeholder="....." maxlength="6" id="poscode" name="t_poscode" value="<?=$datatrx['PosCode']?>">
												</div>
											  </div>
											</div>
										  </div>
										</div>
										<h4 class="form-section"><i class="ft-cpu"></i> System Configuration </h4>
										<div class="row">
										  <div class="col-md-6">
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="">Expiration Date</label>
												<?php 
													$d_exp_default	= substr($datatrx['ValidUntil'],8,2)?:date('d');
													$m_exp_default	= substr($datatrx['ValidUntil'],5,2)?:date('m');
													$y_exp_default	= substr($datatrx['ValidUntil'],0,4)?:date('Y', strtotime('+1 years'));
												?>
											   <div class="col-md-2">
												<div class="controls hidden">
												 <select  placeholder="day" class="select2 form-control">
													  <option value="0">dd</option>
													<?php for($i=1;$i<=31;$i++){ ?>
													  <option <?=$d_exp_default==$i?'selected':''?> value="<?=$i?>"><?=$i?></option>
													<?php }?>
												</select>
												</div>
												<div class="controls">
													<input readonly class="form-control border-primary" type="text"  id="validuntil_d" name="t_validuntil_d"  value="<?=$d_exp_default?>">
												</div>
											  </div>
											  <div class="col-md-2">
												<div class="controls hidden">
												 <select placeholder="month" class="select2 form-control" >
													  <option value="0">mm</option>
													<?php for($i=1;$i<=12;$i++){ ?>
													  <option <?=$m_exp_default==$i?'selected':''?> value="<?=$i?>"><?=get_month_name($i,1)?></option>
													<?php }?>
												</select>
												</div>
												<div class="controls">
													<input readonly class="form-control border-primary" type="text"  id="validuntil_m" name="t_validuntil_m" value="<?=$m_exp_default?>">
												</div>
											  </div>
											  <div class="col-md-3">
												<div class="controls hidden">
												<?php 
												$y_first = date('Y', strtotime('-10 years'));
												$y_last = date('Y', strtotime('+50 years'));
												?>
												 <select placeholder="year" class="select2 form-control">
													  <option value="0">yyyy</option>
													<?php for($i= $y_first ;$i<=$y_last; $i++){ ?>
													  <option <?=$y_exp_default==$i?'selected':''?> value="<?=$i?>"><?=$i?></option>
													<?php }?>
												</select>
												</div>
												<div class="controls">
													<input readonly class="form-control border-primary" type="text"  id="validuntil_y" name="t_validuntil_y" value="<?=$y_exp_default?>">
												</div>
											  </div>
											</div>
										  </div>
										  
										</div>
									  </div>
								</div>
								</div>
							  </div>
							  <hr>
							  <small class="badge badge-default badge-danger">* fields are Required</small>
							</div>
							  <div class="form-actions right">
								<button type="submit" class="btn btn-primary loading-button">
								  <i class="la la-check-square-o"></i> Save
								</button>
							  </div>
							</form>
					</section>
                  </div>
                </div>
              </div>
            </div>
          </div>
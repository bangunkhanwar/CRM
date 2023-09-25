<script>
$(document).ready(function(){
	//color scheme for iCheck
	$('input[type="checkbox"].flat-blue').iCheck({
		checkboxClass: 'icheckbox_flat-blue'
	});
    $('.icheck_minimal input').iCheck({
        checkboxClass: 'icheckbox_flat-blue',
        radioClass: 'iradio_flat-blue',
    });
    $('.skin-square input').iCheck({
        checkboxClass: 'icheckbox_square-red',
        radioClass: 'iradio_square-red',
    });
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
	
	<?php
	if($action['code'] == 1)
	{
		echo 'get_str_access();';
		echo 'get_cat_access();';
		echo 'get_mrt_partner();';
	}
	?>
});

	function get_str_access()
	{
		$.post(site_url+"tools/user_management/get_str_access"
			,{t_id_opr:"<?=encode($user_data['idMsOperator'])?>"}
			,function(result) {
				$('#str_access_list').html(result);
			}					
			,"html"
		);
	}
	
	function get_cat_access()
	{
		$.post(site_url+"tools/user_management/get_cat_access"
			,{t_id_opr:"<?=encode($user_data['idMsOperator'])?>"}
			,function(result) {
				$('#cat_access_list').html(result);
			}					
			,"html"
		);
	}
	function get_mrt_partner()
	{
		$.post(site_url+"tools/user_management/get_mrt_partner"
			,{t_id_opr:"<?=encode($user_data['idMsOperator'])?>"}
			,function(result) {
				$('#merchant_partner_list').html(result);
			}					
			,"html"
		);
	}
	
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
			        return false;
			    }
            });
	}
	
	function submit_form_profile(e)
	{
		showProgres();
		$.post(site_url+"tools/user_management/save_user"
			,$('#'+e.target.id+'').serialize()
			,function(result) {
				if(result['error'])
				{	
					swal(result['header']||'error', result['error']||'', "error");
				}else
				{
					swal(result['header']||'success', result['success']||'', "success").then((value) => {
						window.location = site_url+'tools/user_management/input/'+result['id'];
					});;
				}
				hideProgres();
			}					
			,"json"
		);
	}
	
	function add_store_access()
	{
		var operator = $('#oprcode').val();
		var storecode = $('#storecode').val();
		showProgres();
		$.post(site_url+"tools/user_management/add_store_access"
			,{t_operator:operator
			,t_storecode:storecode}
			,function(result) {
				if(result['error'])
				{	
					swal(result['header']||'error', result['error']||'', "error");
				}else
				{
					swal(result['header']||'success', result['success']||'', "success").then((value) => {
						get_str_access();
					});;
				}
				hideProgres();
			}					
			,"json"
		);
	}
	
	function add_category_access()
	{
		var operator = $('#oprcode').val();
		var catcode = $('#member_category').val();
		showProgres();
		$.post(site_url+"tools/user_management/add_category_access"
			,{t_operator:operator
			,t_catcode:catcode}
			,function(result) {
				if(result['error'])
				{	
					swal(result['header']||'error', result['error']||'', "error");
				}else
				{
					swal(result['header']||'success', result['success']||'', "success").then((value) => {
						get_cat_access();
					});;
				}
				hideProgres();
			}					
			,"json"
		);
	}
	
	function add_merchant_partner()
	{
		var operator = $('#oprcode').val();
		var mrt_partner_code = $('#merchant_partner').val();
		showProgres();
		$.post(site_url+"tools/user_management/add_merchant_partner"
			,{t_operator:operator
			,t_mrt_partner_code:mrt_partner_code}
			,function(result) {
				if(result['error'])
				{	
					swal(result['header']||'error', result['error']||'', "error");
				}else
				{
					swal(result['header']||'success', result['success']||'', "success").then((value) => {
						get_mrt_partner();
					});;
				}
				hideProgres();
			}					
			,"json"
		);
	}
	
	function remove_store_access(storecode)
	{
		showProgres();
		swal({
			title: "Continue?",
			text: "Data will be removed",
			type: "warning",
			buttons: ["No", "Yes"],
		 }).then((value) => {
			 hideProgres();
            	if (value === false) return false;
			    if (value) {
						var operator = $('#oprcode').val();
						showProgres();
						$.post(site_url+"tools/user_management/remove_store_access"
							,{t_operator:operator
							,t_storecode:storecode}
							,function(result) {
								if(result['error'])
								{	
									swal(result['header']||'error', result['error']||'', "error");
								}else
								{
									swal(result['header']||'success', result['success']||'', "success").then((value) => {
										get_str_access();
									});;
								}
								hideProgres();
							}					
							,"json"
						);
			        return false;
			    }
            });
	}
	
	function remove_category_access(catcode)
	{
		showProgres();
		swal({
			title: "Continue?",
			text: "Data will be removed",
			type: "warning",
			buttons: ["No", "Yes"],
		 }).then((value) => {
			 hideProgres();
            	if (value === false) return false;
			    if (value) {
					var operator = $('#oprcode').val();
					showProgres();
					$.post(site_url+"tools/user_management/remove_category_access"
						,{t_operator:operator
						,t_catcode:catcode}
						,function(result) {
							if(result['error'])
							{	
								swal(result['header']||'error', result['error']||'', "error");
							}else
							{
								swal(result['header']||'success', result['success']||'', "success").then((value) => {
									get_cat_access();
								});;
							}
							hideProgres();
						}					
						,"json"
					);
			        return false;
			    }
            });
	}
	function remove_mrt_partner_access(mrtcode)
	{
		showProgres();
		swal({
			title: "Continue?",
			text: "Data will be removed",
			type: "warning",
			buttons: ["No", "Yes"],
		 }).then((value) => {
			 hideProgres();
            	if (value === false) return false;
			    if (value) {
					var operator = $('#oprcode').val();
					showProgres();
					$.post(site_url+"tools/user_management/remove_mrt_partner_priv"
						,{t_operator:operator
						,t_mrt_partner_code:mrtcode}
						,function(result) {
							if(result['error'])
							{	
								swal(result['header']||'error', result['error']||'', "error");
							}else
							{
								swal(result['header']||'success', result['success']||'', "success").then((value) => {
									get_mrt_partner();
								});;
							}
							hideProgres();
						}					
						,"json"
					);
			        return false;
			    }
            });
	}
	
	function download_from_hrm()
	{
		showProgres();
		swal({
			title: "Continue?",
			text: "Data Searching will be Processed",
			type: "warning",
			buttons: ["No", "Yes"],
		 }).then((value) => {
			 hideProgres();
            	if (value === false) return false;
			    if (value) {
					var search_hrm = $('#search_hrm').val();
					showProgres();
					$.post(site_url+"tools/user_management/download_from_hrm"
						,{t_search_hrm:search_hrm}
						,function(result) {
							if(result['error'])
							{	
								swal(result['header']||'error', result['error']||'', "error");
							}else
							{
								// swal(result['header']||'success', result['success']||'', "success").then((value) => { });;
								$('#username').val(result['kode']);
								$('#nik').val(result['kode']);
								$('#fullname').val(result['nama_lengkap']);
								$('#email').val(result['email']);
								$('#phone').val(result['hp1']);
								$('#address').val(result['alamat1']);
								$('#birthdate').val(result['lahir_tgl']);
								
							}
							hideProgres();
						}					
						,"json"
					);
			        return false;
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
						<li>
					<div class="btn-group btn-group-sm">
						<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false"><i class="ft-more-vertical"></i>
						  <span class="sr-only">Toggle Dropdown</span>
						</button>
						<div class="dropdown-menu dropdown-menu-lg">
						  <a class="dropdown-item" href="<?=base_url()?>tools/user_management/input">New <i class="ft-file-plus float-right"></i></a>
						 
						</div>
					</div>
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
							<a class="nav-link active" id="tabConfig-tab1" data-toggle="tab" aria-controls="tabConfig" href="#tabConfig" aria-expanded="true"><i class="la la-user"></i> User Profile</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link " id="baseIcon-tab1" data-toggle="tab" aria-controls="tabIcon1" href="#tabIcon1" aria-expanded="false"><i class="la la-play"></i> Menu Privileges</a>
						  </li>
						  <li class="nav-item hidden">
							<a class="nav-link" id="baseIcon-tab2" data-toggle="tab" aria-controls="tabIcon2" href="#tabIcon2" aria-expanded="false"><i class="la la-cog"></i> Dashboard Privileges</a>
						  </li>
						  <li class="nav-item <?=($action['code']==0)?'hidden':'';?>">
							<a class="nav-link" id="baseIcon-tab3" data-toggle="tab" aria-controls="tabIcon3" href="#tabIcon3" aria-expanded="false"><i class="la la-map-signs"></i> Store Access</a>
						  </li>
						  <li class="nav-item <?=($action['code']==0)?'hidden':'';?>">
							<a class="nav-link" id="baseIcon-tab4" data-toggle="tab" aria-controls="tabIcon4" href="#tabIcon4" aria-expanded="false"><i class="la la-moon-o"></i> Member Category Privileges</a>
						  </li>
						  <li class="nav-item <?=($action['code']==0)?'hidden':'';?>">
							<a class="nav-link" id="baseIcon-tab5" data-toggle="tab" aria-controls="tabIcon5" href="#tabIcon5" aria-expanded="false"><i class="la la-moon-o"></i> Merchant Partner Privileges</a>
						  </li>
						</ul>
                    </div>
					
		<section class="input-validation">
					<form  id="form_user" autocomplete="off" novalidate>
					<div class="tab-content px-1 pt-1">
					  <div role="tabpanel" class="tab-pane active" id="tabConfig" aria-expanded="true" aria-labelledby="tabConfig-tab1">
						<div class="row" >
							<div class="form-horizontal col-md-12">
							<input id="oprcode" name="t_oprcode" type="hidden" value="<?=encode($user_data['idMsOperator'])?>">
							<input id="action" name="t_action" type="hidden" value="<?=($action['code'])?>">
							  <div class="form-body">
							  <?php if($action['code']==0){?>
								<h4 class="form-section"><i class="la la-eye"></i> Download User from HRM</h4>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="username">Search NIK</label>
									  <div class="col-md-9">
										<div class="input-group">
											<input type="text" id="search_hrm" class="form-control" placeholder="Search data in HRM ..." name="t_search_hrm" onkeydown="if(event.keyCode == 13) download_from_hrm();">
											<div class="input-group-append">
												<button type="button" class="btn btn-primary loading-button " onClick="download_from_hrm()"><i class="la la-search"></i></button>
											</div>
										</div> 
									  </div>
									</div>
								  </div>
								</div>
							  <?php }?>
								<h4 class="form-section"><i class="la la-eye"></i> About User</h4>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="username">User Name</label>
									  <div class="col-md-9">
										<div class="controls">
											<input <?=($action['code']==1)?'readonly':''?> type="text" class="form-control border-primary" placeholder="User Name" id="username" name="t_username" value="<?=$user_data['LoginName']?>" required  data-validation-required-message="This field is required">
										</div>
									  </div>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="fullname">Full Name</label>
									  <div class="col-md-9">
										<div class="controls">
											<input type="text" class="form-control border-primary" placeholder="Full Name" id="fullname" name="t_fullname" value="<?=$user_data['FullName']?>"  required data-validation-required-message="This field is required">
										</div>
									  </div>
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="password">Password</label>
									  <div class="col-md-9">
										<input type="password"class="form-control border-primary" placeholder="<?=($action['code']==1)?'User Password':'Type to change password'?>" id="password" name="t_password" value="">
									  </div>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="fullname">NIK </label>
									  <div class="col-md-9">
										<div class="controls">
											<input type="text" class="form-control border-primary" placeholder="NIK" id="nik" name="t_nik" value="<?=$user_data['Nik']?>" >
										</div>
									  </div>
									</div>
								  </div>
								</div>
								<h4 class="form-section"><i class="ft-mail"></i> Contact Info &amp; Address</h4>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="email">Email</label>
									  <div class="col-md-9">
										<div class="controls">
											<input class="form-control border-primary" type="email" placeholder="email" id="email" name="t_email" value="<?=$user_data['Email']?>" required data-validation-required-message="This field is required">
										</div>
									  </div>
									</div>
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="phone">Phone Number</label>
									  <div class="col-md-9">
										<input class="form-control border-primary" type="phone" placeholder="0822..." id="phone" name="t_phone" value="<?=$user_data['PhoneNumber']?>">
									  </div>
									</div>
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="birthdate">Birh Date</label>
									  <div class="col-md-9">
										<div class="controls">
										<input class="form-control border-primary" type="date" placeholder="Birh Date" id="birthdate" name="t_birthdate" value="<?=$user_data['BirthDate']?>" max="9999-12-31">
										</div>
									  </div>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="address">Address</label>
									  <div class="col-md-9">
										<textarea rows="6" class="form-control border-primary" placeholder="Address" id="address" name="t_address"><?=$user_data['Address']?></textarea>
									  </div>
									</div>
								  </div>
								</div>
								
								<h4 class="form-section"><i class="ft-cpu"></i> System Configuration </h4>
								<div class="row">
								<?php 
								$date_default	= date('d').'/'.date('m').'/'.date('Y');
								if($user_data['ExpiryDate']!='')
								{
									$date_default = $user_data['ExpiryDate'];
								}
								?>
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="birthdate">Expiration Date </label>
									  <div class="col-md-9">
										<div class="controls">
											<input class="form-control border-primary" type="date" placeholder="Exp Date" id="expiredate" name="t_expiredate" value="<?=$date_default?>" max="9999-12-31" required  data-validation-required-message="This field is required">
										</div>
									  </div>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="address">is Active</label>
									  <div class="col-md-9">
										<div class="input-group">
										  <div class="d-inline-block custom-control custom-radio mr-1">
											<input type="radio" name="isActive" class="custom-control-input" <?=($user_data['isActive']==1)?'checked=""':''?> id="yes" value="1">
											<label class="custom-control-label" for="yes">Yes</label>
										  </div>
										  <div class="d-inline-block custom-control custom-radio">
											<input type="radio" name="isActive" class="custom-control-input" <?=($user_data['isActive']==0)?'checked=""':''?>  id="no" value="0">
											<label class="custom-control-label" for="no">No</label>
										  </div>
										</div>
									  </div>
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="address">Super User</label>
									  <div class="col-md-9">
										<div class="input-group">
										  <div class="d-inline-block custom-control custom-radio mr-1">
											<input type="radio" name="isSuperUser" class="custom-control-input" <?=($user_data['isSuperUser']==1)?'checked=""':''?> id="yes_super" value="1">
											<label class="custom-control-label" for="yes_super">Yes</label>
										  </div>
										  <div class="d-inline-block custom-control custom-radio">
											<input type="radio" name="isSuperUser" class="custom-control-input" <?=($user_data['isSuperUser']==0)?'checked=""':''?>  id="no_super" value="0">
											<label class="custom-control-label" for="no_super">No</label>
										  </div>
										</div>
									  </div>
									</div>
								  </div>
								</div>
							  </div>

						</div>
						</div>
					  </div>
					  <div role="tabpanel" class="tab-pane " id="tabIcon1" aria-expanded="true" aria-labelledby="baseIcon-tab1">
							<div class="table-responsive">
							<input id="oprpriv" name="t_oprpriv" type="hidden" value="<?=encode($user_data['idMsOperator'])?>">
								<table class="table table-bordered table-striped">
								  <thead>
									<tr>
									  <th>Menu</th>
									  <th>Description</th>
									  <th>Default</th>
									</tr>
								  </thead>
								  <tbody>
									<?=$this->menu->gen_priv(0,0,$user_data['idMsOperator']?:0)?>
								  </tbody>
								</table>
						  </div>
					  </div>
					  <div class="tab-pane" id="tabIcon2" aria-labelledby="baseIcon-tab2">
						<p>dashboard privileges under construction.</p>
						<table class="table table-bordered table-striped">
						  <thead>
							<tr>
							  <th>Default</th>
							  <th>Name</th>
							  <th>Description</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
								<td>
								</td>
								<td></td>
								<td></td>
							</tr>
						  </tbody>
						</table>
					  </div>
					  <div class="tab-pane" id="tabIcon3" aria-labelledby="baseIcon-tab3">
					  <label> Store List </label>
					  <div class="row">
                          <div class="col-md-4">
                            <div class="controls">
							   <select  class="select2 form-control"  placeholder="store code" id="storecode" name="t_storecode">
									<?php foreach($strlist as $strkey=>$str){ ?>
									  <option value="<?=$str['StoreCode']?>"><?=$str['StoreCode']?> - <?=$str['Description']?></option>
									<?php }?>
								</select>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
								<button type="button" class="btn btn-info btn-min-width btn-glow mr-1 mb-1" onclick="add_store_access();">Add Store</button>
                            </div>
                          </div>
                        </div>
						<div id="str_access_list">
						</div>
					  </div>
					  <div class="tab-pane" id="tabIcon4" aria-labelledby="baseIcon-tab4">
					  <label> Category List </label>
					  <div class="row">
					  <?php 
						$default_category = 02;
						
					  ?>
                          <div class="col-md-4">
							<div class="controls">
							 <select  class="select2 form-control"  placeholder="Member Cateogry" maxlength="2" id="member_category" name="t_member_category">
								<?php if(count($custcat)>0){ foreach($custcat as $cuskey=>$cus){ ?>
								  <option <?=($default_category==$cus['CatCode'])?'selected':''?>  value="<?=$cus['CatCode']?>"><?=$cus['CatCode']?> - <?=$cus['Description']?></option>
								<?php }}else{ ?>
									<option>NO DATA</option>
								<?php } ?>
							</select>
							</div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
						  <button type="button" class="btn btn-info btn-min-width btn-glow mr-1 mb-1" onClick="add_category_access()">Add Category</button>
                            </div>
                          </div>
                        </div>
						<div id="cat_access_list">
						</div>
						</div>
						 <div class="tab-pane" id="tabIcon5" aria-labelledby="baseIcon-tab5">
						<label> Merchant Partner List </label>
					  <div class="row">
                          <div class="col-md-4">
							<div class="controls">
							 <select  class="select2 form-control"  placeholder="Merchant Partner" maxlength="2" id="merchant_partner" name="t_merchant_partner">
								<?php if($mrt_partner->num_rows()>0){ foreach($mrt_partner->result_array() as $mrtkey=>$mrt){ ?>
								  <option value="<?=$mrt['MerchantPartnerCode']?>"><?=$mrt['MerchantPartnerCode']?> - <?=$mrt['Name']?></option>
								<?php }}else{ ?>
									<option>NO DATA</option>
								<?php } ?>
							</select>
							</div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
						  <button type="button" class="btn btn-info btn-min-width btn-glow mr-1 mb-1" onClick="add_merchant_partner()">Add Merchant Partner</button>
                            </div>
                          </div>
                        </div>
						<div id="merchant_partner_list">
						</div>
						 </div>
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
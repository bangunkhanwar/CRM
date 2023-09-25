<script src="<?= base_url();?>app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
<script>
$(document).ready(function () {
	var data_courier = <?=json_encode($datacourier)?>;
	// console.log(data_courier);
	$(".select2").select2();
	get_provinsi();
	$('#list_courier').jstree({ 
	'core' : {
		'data' : data_courier
	},
    "plugins" : [ "checkbox" ]
	});
// getProvince();
// getCity();
	// $("#provinces").on('change', function(e) {
		// $('#citys').val(null).trigger('change');
		// $('#subdistrict').val(null).trigger('change');
	// });
	// $("#citys").on('change', function(e) {
		// $('#subdistrict').val(null).trigger('change');
	// });
	
		
}); 

	function get_provinsi()
		{
			$.post(site_url+"omnichannel/store/get_provinsi"
				,{t_default:"<?=encode($list->ProvinceId)?>"}
				,function(result) {
					$('#provinces').html(result).trigger("liszt:updated");
					get_districts();
					// get_regencies();
					// get_villages();
					$('#citys').val('');
					// $('#provinces').prop('selectedIndex', 0).change();
				});
		}
		
		function get_districts()
		{
			$.post(site_url+"omnichannel/store/get_districts/"+$('#provinces').val()
				,{t_default:"<?=encode($list->CityId)?>"}
				,function(result) {
					$('#citys').html(result).trigger("liszt:updated");
					// hideProgres();
					get_subdistrict();
					// get_villages();
					$('#subdistricts').val('');
					// $('#district').prop('selectedIndex', 0).change();
				}					
				,"html"
			);
		}
		function get_subdistrict()
		{
			$.post(site_url+"omnichannel/store/get_subdistrict/"+$('#citys').val()
				,{t_default:"<?=encode($list->SubDistrictId)?>"}
				,function(result) {
					$('#subdistricts').html(result).trigger("liszt:updated");
					// hideProgres();
					// $('#city').prop('selectedIndex', 0).change();
				}					
				,"html"
			);
		}
	
function update_store()
{
	var storecode = "<?=$storecode?>";
	var province = $('#provinces').val();
	var city = $('#citys').val();
	var subdistrict = $('#subdistricts').val();
	
	var selectedCourier = [];
	var selectedElms = $('#list_courier').jstree('get_selected', true);
	$.each(selectedElms, function() {
		var selObj = {};
		selObj[this.parent] = this.data
		selectedCourier.push(selObj);
	});
	console.log('selectedElms',selectedElms);
	console.log('selectedCourier',selectedCourier);
	showProgres();
	$.ajax({
		type: "POST",
		url: site_url + "omnichannel/store/update/",
		data: {
			t_storecode:storecode
			,t_province:province
			,t_city:city
			,t_subdistrict:subdistrict
			,t_selectedCourier:selectedCourier
			,selectedElms:selectedElms
			,t_address:$('#address').val()
		},
		dataType: 'json',
		// cache: false,
		// contentType: false,
		// processData: false,
		success: function(result) {
			if(result['error'])
			{
				hideProgres();
				swal(result['header']||'error', result['error']||'', "error").then((value)=>{
				if(province == 0)
				{
					$('#provinces').focus()
					return;
				}else if(city == 0)
				{
					$('#citys').focus()
					return;
				}else if (subdistrict == 0)
				{
					$('#subdistricts').focus()
					return;
				}
					
				});
				
			}else
			{
				hideProgres();
				// swal(result['header']||'success', result['success']||'', "success").then((value) => {
				// });;
				swal(result['header']||'success', result['success']||'', "success").then((value) => {
					// location.reload();
					loadUpdate(storecode);
				});;
			}
		},
		error: function(jqXhr, textStatus, errorThrown) {
			var error_message = 'internal error';
			if (jqXhr.responseJSON !== undefined) {
				error_message = jqXhr['responseJSON']['message'];
			}
			swal('error', error_message, "error")
			hideProgres();
		}
	});
}

</script>
<link href="<?=base_url()?>app-assets/vendors/css/jsTree/style.min.css" rel="stylesheet">	
<div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <button type="button" class="btn btn-secondary btn-min-width " onClick="loadList($('#current_page').val())"><i class="la la-arrow-circle-left"></i> Back to list</button>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements" style = "display:none;">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">		
				
					<div id="input_barcode">
						<div class="form-group row">
							  <label class="col-md-3 label-control" for="member_code">Store Code</label>
							  <div class="col-md-5">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
										<i class="la la-keyboard-o"></i></span>
									</div>
									<input readonly type="text" id="storecodes" class="form-control" placeholder="Member Code" name="t_storecodes" value="<?=$list->StoreCode.' - '.$list->StoreName;?>">
								</div> 
							  </div>
						</div>
						<div class="form-group row" >
						  <label class="col-md-3 label-control" for="phone_number">Province</label>
						  <div class="col-md-5">
							<div class="form-group">							
								<select class="form-control select2"  style="width: 100%;" id="provinces" name="t_province" onchange="get_districts()">							
								</select>							
							</div>
						  </div>
						</div> 
						<div class="form-group row" >
						  <label class="col-md-3 label-control" for="phone_number">District / City</label>
						  <div class="col-md-5">
							<div class="form-group">							
								<select class="form-control select2"  style="width: 100%;" id="citys" name="t_city" onchange="get_subdistrict()">
								</select>							
							</div>
						  </div>
						</div> 
						<div class="form-group row" >
						  <label class="col-md-3 label-control" for="phone_number">Sub District</label>
						  <div class="col-md-5">
							<div class="form-group">							
								<select class="form-control select2"  style="width: 100%;" id="subdistricts" name="t_subdistrict">
								</select>							
							</div>
						  </div>
						</div> 
						
									
						
					<div class="form-group row" id="memo_remark" >
						  <label class="col-md-3 label-control" for="">Address</label>
						  <div class="col-md-5">
							<div class="controls">
								<textarea rows="3" class="form-control" placeholder="" maxlength="250" id="address" name="t_address"><?=$list->Address?></textarea>
							<div class="help-block"></div>
							</div>
						  </div>
						</div>
					<div class="form-group row"  >
						  <label class="col-md-3 label-control" for="">Kurir Aktif</label>
						  <div class="col-md-5">
							<div class="controls">
								<div class="row" id="list_courier">
								
								</div>
							<div class="help-block">kurir yang aktif untuk toko ini</div>
							</div>
						  </div>
						</div>
					<div class="form-group row" id="btn_change_card" >
					  <label class="col-md-3 label-control" for="phone_number"></label>
					  <div class="col-md-5">
						<div class="input-group">
							<button type="button" class="btn btn-success round btn-min-width mr-1 mb-1 loading-button" onClick="update_store()"> <i class="la la-check-circle-o"></i> Update</button>
						</div>
					  </div>
					</div> 
                  </div>
                </div>
              </div>
            </div>
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/jsTree/jstree.min.js"></script>
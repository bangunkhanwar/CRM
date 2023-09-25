<script src="<?= base_url();?>app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
<script>
$(document).ready(function () {
	$(".select2").select2();


}); 


	
function update_store()
{
	var province = $('#provinces').val();
	var city = $('#citys').val();
	var subdistrict = $('#subdistricts').val();
	
	showProgres();
	$.post(site_url+"omnichannel/store/update/"
		,{t_storecode:storecode
		,t_province:province
		,t_city:city
		,t_subdistrict:subdistrict
		,t_address:$('#address').val()}

		,function(result) {
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
					location.reload();
				});;
			}
			hideProgres();
		}					
		,"json"
	);
}

</script>
<div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-icons"><?=$title?></h4>
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
							  <label class="col-md-3 label-control" for="member_code">Category</label>
							  <div class="col-md-5">
								<div class="input-group">									
									<input type="text" id="category" class="form-control" placeholder="Category" name="t_category" value="<?=$list['Description']?>">
								</div> 
							  </div>
						</div>
					
						<div class="form-group row" >
						  <label class="col-md-3 label-control" for="phone_number">Brand</label>
						  <div class="col-md-5">
							<div class="form-group">							
								<select class="form-control select2"  style="width: 100%;" id="brand" name="t_brand">
									<option value="1" <?='1'==$list['fidBrand']?'selected':''?>>ELZATTA</option>			  
									<option value="2" <?='2'==$list['fidBrand']?'selected':''?>>DAUKY</option>			  
									<option value="9" <?='9'==$list['fidBrand']?'selected':''?>>NOORE</option>		 	  
								</select>							
								</select>							
							</div>
						  </div>
						</div> 
						
						<div class="form-group row" >
						  <label class="col-md-3 label-control" for="phone_number">Aktve Date</label>
						  <div class="col-md-5">
							
						<div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="issueinput3">Start</label>
                              <input type="date" id="activeStart" value="<?=$list['ActiveStart']?>" class="form-control" name="t_activestart" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Opened" data-original-title="" title="">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="issueinput4">End</label>
                              <input type="date" id="activeEnd" value="<?=$list['ActiveEnd']?>"class="form-control" name="t_activeend" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Fixed" data-original-title="" title="">
                            </div>
                          </div>
                        </div>
						
						  </div>
						</div>
									
						<div class="form-group row" >
						  <label class="col-md-3 label-control" for="phone_number">Image</label>
						  <div class="col-md-5">
							<div class="form-group">							
								<input type ="file"/>					
								</select>							
							</div>
						  </div>
						</div>
						<div class="form-group row" >
						  <label class="col-md-3 label-control" for="phone_number">Order number</label>
						  <div class="col-md-5">
							<div class="form-group">							
								<input type="number" id="order" class="form-control" placeholder="Category" name="t_order" value="<?=$list['OrderBy']?>">
								</select>							
							</div>
						  </div>
						</div>
					<div class="form-group row" id="btn_change_card" >
					  <label class="col-md-3 label-control pull-right" for="phone_number"></label>
					  <div class="col-md-5">
						<div class="input-group">
							<button type="button" style = "width :10%!important;" class="btn btn-success round btn-min-width mr-1 mb-1 loading-button" onClick="update()"> <i class="la la-check-circle-o"></i> Update</button>
						</div>
					  </div>
					</div> 
                  </div>
                </div>
              </div>
            </div>
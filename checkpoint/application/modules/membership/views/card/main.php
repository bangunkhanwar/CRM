<script src="<?= base_url();?>app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
<script>
$(document).ready(function () {
	toggle_card_input(0);
	<?php 
	if($member_code!='')
	{
	?>
		select_lookup_member();
	<?php
	}
	?>
}); 

function select_lookup_member()
{
	member_code = $('#search_key').val();
	toggle_card_input(0);
	if(member_code=='')
	{
		swal('Failed', 'Please input valid Key', "error");
		$('#search_key').focus();
		return false;
	}
	showProgres();
	$.post(site_url+"membership/card/lookup_member/"
		,{t_search_key:member_code}
		,function(result) {
			if(result['error'])
			{
				hideProgres();
				swal(result['header']||'error', result['error']||'', "error");
			}else
			{
				toggle_card_input(1);
				hideProgres();
				// swal(result['header']||'success', result['success']||'', "success").then((value) => {
				// });;
				$('#member_code').val(result['member']['MemberCode']);
				$('#full_name').val(result['member']['Name']);
				$('#phone_number').val(result['member']['Handpone']);
				$('#barcode').val(result['member']['Barcode']);
				$('#barcode').focus();
				$('#barcode').select();
			}
			hideProgres();
		}					
		,"json"
	);
}

function toggle_card_input(type=0)
{
	// 1 = show
	// 0 = hide
	
	if(type==1)
	{
		$('#input_barcode').show();
		$('#memo_remark').show();
		$('#btn_change_card').show();
	}else{
		$('#input_barcode').hide();
		$('#memo_remark').hide();
		$('#btn_change_card').hide();
		$('#member_code').val('');
		$('#full_name').val('');
		$('#phone_number').val('');
		$('#barcode').val('');
		$('#remark').val('');
	}
}

function update_member_card()
{
	showProgres();
	$.post(site_url+"membership/card/update_member_card/"
		,{t_member_code:$('#member_code').val()
		,t_barcode:$('#barcode').val()
		,t_remark:$('#remark').val()}
		,function(result) {
			if(result['error'])
			{
				hideProgres();
				swal(result['header']||'error', result['error']||'', "error");
			}else
			{
				hideProgres();
				// swal(result['header']||'success', result['success']||'', "success").then((value) => {
				// });;
				swal(result['header']||'success', result['success']||'', "success").then((value) => {
					
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
                  <div class="heading-elements">
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
					<div class="form-group row">
						  <label class="col-md-3 label-control" for="member_code">Search Member</label>
						  <div class="col-md-5">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
									<i class="la la-key"></i></span>
								</div>
								<input type="text" id="search_key" class="form-control" placeholder="Member Code / Phone / E-mail" name="t_search_key" onkeydown="if(event.keyCode == 13)select_lookup_member()" value="<?=$member_code?>">
								<div class="input-group-append">
									<button type="button" class="btn btn-primary loading-button " onClick="select_lookup_member();"><i class="la la-search"></i></button>
								</div>
							</div> 
						  </div>
						<div style="display:none" class="badge phone-badge-not-verified border-right-red border-left-red round badge-striped">
							<span>Not <br>Verified</span>
							<i class="la la-times-circle font-medium-2"></i>
						</div>
						<div style="display:none" class="badge phone-badge-verified border-right-success border-left-success round badge-striped">
							<span>Verified</span>
							<i class="la la-check-circle font-medium-2"></i>
						</div>
					</div>	
					<div id="input_barcode" style="display:none">
					<div class="form-group row">
						  <label class="col-md-3 label-control" for="member_code">Member Code</label>
						  <div class="col-md-5">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
									<i class="la la-keyboard-o"></i></span>
								</div>
								<input readonly type="text" id="member_code" class="form-control" placeholder="Member Code" name="t_member_code" value="<?=$member_code?>">
							</div> 
						  </div>
					</div>
					<div class="form-group row">
					  <label class="col-md-3 label-control" for="full_name">Full Name</label>
					  <div class="col-md-5">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
								<i class="la la-user"></i></span>
							</div>
							<input readonly type="text" id="full_name" class="form-control" placeholder="Full Name" name="t_full_name"> 
						</div>
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-md-3 label-control" for="phone_number">Phone Number</label>
					  <div class="col-md-5">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
								<i class="la la-mobile"></i></span>
							</div>
							<input readonly type="text" id="phone_number" class="form-control" placeholder="Phone Number" name="t_phone_number"> 
						</div>
					  </div>
					</div>
					<div class="form-group row" >
					  <label class="col-md-3 label-control" for="phone_number">Barcode</label>
					  <div class="col-md-5">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
								<i class="la la-credit-card"></i></span>
							</div>
							<input type="text" id="barcode" class="form-control" placeholder="Input Card Barcode" maxlength="20" name="t_barcode">
						</div>
					  </div>
					</div> 
					</div>
					<div class="form-group row" id="memo_remark" style="display:none">
						  <label class="col-md-3 label-control" for="">Keterangan</label>
						  <div class="col-md-5">
							<div class="controls">
								<textarea rows="2" class="form-control border-primary" placeholder="" maxlength="250" id="remark" name="t_remark"></textarea>
							<div class="help-block"></div>
							</div>
						  </div>
						</div>
					<div class="form-group row" id="btn_change_card" style="display:none">
					  <label class="col-md-3 label-control" for="phone_number"></label>
					  <div class="col-md-5">
						<div class="input-group">
							<button type="button" class="btn btn-success round btn-min-width mr-1 mb-1 loading-button" onClick="update_member_card()"> <i class="la la-check-circle-o"></i> Update Card</button>
						</div>
					  </div>
					</div> 
                  </div>
                </div>
              </div>
            </div>
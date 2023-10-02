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

// $( ".inputqty" ).focusout( function(e) {    
// 		}).focusin(function(e){
// 			$(this).select();
// 		}).keydown( function(e) {
// 			if(e.which == 13) {
// 			var id =$(this).attr('id'); 
// 			var rpoint =$(this).attr('max'); 	
// 			var gdesc =$(this).attr('name'); 	
// 			submit_redeem_point(id,rpoint,gdesc);		 
// 			}
// 		});

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
	$.post(site_url+"membership/redeem/lookup_member/"
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
				$('#total_point').val(result['points']['TotalPoints']);
				loadHistory(result['member']['MemberCode']);
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
		$('#part_points').show();
		$('#btn_change_card').show();
		$('#detail_redeem').show();
	}else{
		$('#input_barcode').hide();
		$('#part_points').hide();
		$('#btn_change_card').hide();
		$('#detail_redeem').hide();
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

function submit_redeem_point(id,rpoint,gdesc)
{
	member = $('#member_code').val();
	name = $('#full_name').val();
	qtypoint = $('#total_point').val();
	qtyredeem = $('#'+id).val(); 
	// console.log(qtyredeem);
	totalredeem = qtyredeem * rpoint ;
	if (totalredeem > qtypoint)
	{
		swal('Penukaran Point Gagal !', 'Point tidak cukup untuk ditukar dengan reward tersebut', "error");
	} else {
		
		showProgres();
				swal({
				title: "Confirmation",
				text: "Point sejumlah " +totalredeem+" akan ditukar dengan reward " +qtyredeem+" "+gdesc+" ?",
				icon: "warning",
				buttons: ["No", "Yes"],				
			 }).then((value) => {
					hideProgres();
					if (value === false) return false ;
					if (value) {
						showProgres();
						$.post(site_url+"membership/redeem/redeem_point/"
							,{ member : member,
							   name : name,
							   id : id,
							   qty : qtyredeem,
							   total : totalredeem }
							,function(result) {
								if(result['error'])
								{	
									swal(result['header']||'error', result['error']||'', "error");
								}else
								{
									swal(result['header']||'success', result['success']||'', "success").then((value) => {
										// window.location = site_url+'membership/redeem/main/'+result['id'];
										console.log(result['member']);
										printRedeem(result['refnum'],'');
										select_lookup_member();
									});;
								}
								hideProgres();
							}					
							,"json"
						);
						return false;
					};
				});
	}
}

function printRedeem(id="",status="") {
        $.ajax({
            url: site_url + "membership/redeem/print_doc_pdf/",
            type: 'POST',
            dataType: 'html',
            data: {
               id : id,
			   status : status
            },
            success: function(result) {
            $('#print-content-redeem').html(result);
                    $('#print-content-redeem').printThis({
                        importCSS: false,
                        importStyle: false,
                        canvas: true,
                        copyTagClasses: false,    // copy classes from the html & body tag
                        loadCSS: ["<?=base_url()?>assets/css/print-this-pdf.css"],
                    });    
            }
        });
    }

function loadHistory(member)
	{
		showProgres();
		$.post(site_url+'membership/redeem/getHistory/'
			,{member : member}
			,function(result) {
				$('#resultHistoryList').html(result);
				hideProgres();
			}			
			,"html"
		);
	}	

</script>
<script type="text/javascript" src="<?=base_url('assets/js/printThis.js')?>"></script>

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
							<input readonly type="text" id="barcode" class="form-control" placeholder="Input Card Barcode" maxlength="20" name="t_barcode">
						</div>
					  </div>
					</div> 
				    </div>
                        <div class="form-group row" id="part_points" style="display:none">
						  <label class="col-md-3 label-control" for="">Total Points</label>
						  <div class="col-md-5">
							<div class="controls">
                                <input readonly type="text" id="total_point" class="form-control no-borders" placeholder="" maxlength="20" name="t_total_point">
							<div class="help-block"></div>
							</div>
						  </div>
						</div>
						<br>
			
					<div class="card-content" id="detail_redeem" style="display:none">
						<div class="card-body">
								<ul class="nav nav-tabs nav-top-border no-hover-bg">
								<li class="nav-item">
									<a class="nav-link active" id="baseIcon-tab11" data-toggle="tab" aria-controls="tabIcon11" href="#tabRedeem" aria-expanded="true"><i class="la la-flag"></i> Redeem Point</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="baseIcon-tab12" data-toggle="tab" aria-controls="tabIcon12" href="#tabHistory" aria-expanded="false"><i class="la la-history"></i> History</a>
								</li>
								</ul>
								<div class="tab-content px-1 pt-1">
									<div role="tabpanel" class="tab-pane active" id="tabRedeem" aria-expanded="true" aria-labelledby="baseIcon-tab11">		
										
										<!-- <div class="form-group row" > -->
											<div class="table-responsive">
												<table class="table" id="tbl_reward">
													<thead>
														<tr>
															<th rowspan="2" width="1%" style="text-align:center; vertical-align:middle;">No</th>
															<th colspan="2" style="text-align:center; vertical-align:middle;">Reward</th>
															<th rowspan="2" style="text-align:center; vertical-align:middle;">Redeem</th>
														</tr>
														<tr>
															<th style="text-align:left;">Description</th>
															<th style="text-align:right;">Point</th>
														</tr>
													</thead>
													<tbody>
														<?php 
														$no = 0 ;
														foreach($gift->result_array() as $row) { 
														$no++
														?>
															<tr>
																<th scope="row"><?=$no?></th>
																<td><?=$row['GiftDescription']?></td>
																<td style="text-align:right"><?=number_format($row['PointQuantity'],0,".",",")?></td>
																<td>
																	<div class="form-group row">
																		<div class="col-md-2"></div>
																		<div class="col-md-1">
																			<input type="number" class="form-control inputqty" placeholder="Total Reward" id="<?= $row['GiftId']?>" name="<?= $row['GiftDescription']?>" max="<?= $row['PointQuantity']?>" value="1" hidden>
																		</div>
																		<div class="col-md-6">
																			<button type="button" class="btn btn-info btn-block btn-glow" onClick="submit_redeem_point(<?= $row['GiftId']?>,<?=$row['PointQuantity']?>,'<?= $row['GiftDescription']?>')"><i class="la la-bookmark"></i> Redeem </button>
																		</div>
																		<div class="col-md-3"></div>
																	</div>
																</td>
															</tr>
														<?php }?>
													</tbody>								
												</table>
											</div>
											<!-- <label style="color: red;">  **  <i><b>Total Reward</b> di isi dengan <b>jumlah reward</b> yang ingin di tukar <b>bukan jumlah point</b></i> </label>	 -->
										<!-- </div> -->
									</div>	
									<div class="tab-pane" id="tabHistory" aria-labelledby="baseIcon-tab12">
										<div id="resultHistoryList"></div>
									</div>
								</div>
							
						</div>
					</div>

					<!-- <div class="form-group row" id="memo_remark" style="display:none">
						  <label class="col-md-3 label-control" for="">Keterangan</label>
						  <div class="col-md-5">
							<div class="controls">
								<textarea rows="2" class="form-control border-primary" placeholder="" maxlength="250" id="remark" name="t_remark"></textarea>
							<div class="help-block"></div>
							</div>
						  </div>
						</div> -->
					<div class="form-group row" id="btn_change_card" style="display:none">
					  <label class="col-md-3 label-control" for="phone_number"></label>
					  <div class="col-md-5">
						<div class="input-group">
							<!-- <button type="button" class="btn btn-success round btn-min-width mr-1 mb-1 loading-button" onClick="update_member_card()"> <i class="la la-check-circle-o"></i> Update Card</button> -->
						</div>
					  </div>
					</div> 
                  </div>
                </div>
              </div>
            </div>

<div style="display:none">
	<div id="print-content-redeem"></div>
</div>
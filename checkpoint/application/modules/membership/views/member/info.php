<script>
$(document).ready(function () {
	load_user_activity();
	// load_user_transaction();
	load_user_point_history();
		$(".select2").select2();
}); 

function load_user_activity()
{
	showProgres();
	$.post(site_url+"membership/member/load_user_activity/"
		,{t_member_code:"<?=$membercode?>"}
		,function(result) {
			$('#tab-activity').html(result);
			hideProgres();
		}					
		,"html"
	);
}

function load_user_transaction(pg=1)
{
	showProgres();
	$.post(site_url+"membership/member/load_user_transaction/"+pg
		,{t_member_code:"<?=$membercode?>"
		,t_search_key:$('#search_key').val()
		,t_date_start_filter:$('#date_start_filter').val()
		,t_date_end_filter:$('#date_end_filter').val()
		,t_row_per_page:$('#row_per_page').val()}
		,function(result) {
			$('#tab-transaction').html(result);
			hideProgres();
		}					
		,"html"
	);
}

function load_user_point_history(pg=1)
{
	showProgres();
	$.post(site_url+"membership/member/load_user_point_history/"+pg
		,{t_member_code:"<?=$membercode?>"
		,t_search_key:$('#point_search_key').val()
		,t_date_start_filter:$('#point_date_start_filter').val()
		,t_date_end_filter:$('#point_date_end_filter').val()
		,t_row_per_page:$('#point_row_per_page').val()}
		,function(result) {
			$('#tab-point-history').html(result);
			hideProgres();
		}					
		,"html"
	);
}

function find_trans(transnum)
{
	$('.nav-tabs a[href="#tab2"]').tab('show');
	$('#date_start_filter').val('');
	$('#date_end_filter').val('');
	$('#search_key').val(transnum);
	load_user_transaction();
}
</script>
<section id="configuration">
  <div class="content-detached content-right">
        <div class="content-body">
          <section class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-head hidden">
                  <div class="card-header">
                    <h4 class="card-title">All Member</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                    <div class="heading-elements">
					<a href="http://crm.elcorps.com:88/membership/member/input/">
						<button class="btn btn-primary btn-sm"><i class="ft-plus white"></i> Add Member</button>
					</a>
                    </div>
                  </div>
                </div>
                <div class="card-content">
				<div class="card-body">
                    <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Activity</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Transaction</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">Point History</a>
                      </li>
                    </ul>
                    <div class="tab-content px-1 pt-1">
						<div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
							<div id="tab-activity">
							</div>
						</div>
                      <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
							<?php 
							$date_filter_start = date('Y-m').'-01';
							$date_filter_end = date('Y-m-d');
							?>
					  <div class="row">
						  <div class="col-xl-3 col-lg-12">
							<fieldset>
							  <h5>Search Key
								<small class="text-muted">Trans Num / Store</small>
							  </h5>
							  <div class="form-group">
								<input onkeydown="if(event.keyCode == 13) load_user_transaction(1);" id="search_key" name="t_search_key" type="text" class="form-control date-inputmask" id="date-mask" placeholder="Enter Keywoards">
							  </div>
							</fieldset>
						  </div>
						  <div class="col-xl-3 col-lg-12">
							<div class="form-group">
							  <label for="date_start_filter">Date Start</label>
							  <input type="date" id="date_start_filter" class="form-control" name="t_date_start_filter" data-toggle="tooltip"
							  data-trigger="hover" data-placement="top" data-title="Date start" value="" max="9999-12-31" >
							</div>
						  </div>
						  <div class="col-xl-3 col-lg-12">
							<div class="form-group">
							  <label for="date_end_filter">Date End</label>
							  <input type="date" id="date_end_filter" class="form-control" name="t_date_end_filter" data-toggle="tooltip"
							  data-trigger="hover" data-placement="top" data-title="Date end" value="" max="9999-12-31" >
							</div>
						  </div>
						  <div class="col-xl-1 col-lg-12">
							<fieldset>
							  <h5>Limit
								<small class="text-muted"></small>
							  </h5>
							  <div class="form-group">
								  <select onchange="load_user_transaction()" id="row_per_page" name="t_row_per_page" data-placeholder="Select a state..." class="select2 form-control" style="width:100%">
									  <option value="10" selected>10</option>
									  <option value="25">25</option>
									  <option value="50">50</option>
									  <option value="100">100</option>
								  </select>
							  </div>
							</fieldset>
						  </div>
						  <div class="col-xl-1 col-lg-12">
							<fieldset>
							  <h5>
								&nbsp;
							  </h5>
							  <div class="form-group">
							  <div class="btn-group">
								<button onclick="load_user_transaction()" class="btn round btn-primary loading-button"><i class="la la-search"></i></button>
								</div>
							  </div>
							</fieldset>
						  </div>
					  </div>
						<div id="tab-transaction">
						</div>
                      </div>
                      <div class="tab-pane" id="tab3" aria-labelledby="base-tab3">
					  
					  <div class="row">
						  <div class="col-xl-3 col-lg-12">
							<fieldset>
							  <h5>Search Key
								<small class="text-muted">Description</small>
							  </h5>
							  <div class="form-group">
								<input onkeydown="if(event.keyCode == 13) load_user_point_history(1);" id="point_search_key" name="t_point_search_key" type="text" class="form-control date-inputmask" id="date-mask" placeholder="Enter Keywoards">
							  </div>
							</fieldset>
						  </div>
						  <div class="col-xl-3 col-lg-12">
							<div class="form-group">
							  <label for="point_date_start_filter">Date Start</label>
							  <input type="date" id="point_date_start_filter" class="form-control" name="t_point_date_start_filter" data-toggle="tooltip"
							  data-trigger="hover" data-placement="top" data-title="Date start" value="" max="9999-12-31" >
							</div>
						  </div>
						  <div class="col-xl-3 col-lg-12">
							<div class="form-group">
							  <label for="point_date_end_filter">Date End</label>
							  <input type="date" id="point_date_end_filter" class="form-control" name="t_point_date_end_filter" data-toggle="tooltip"
							  data-trigger="hover" data-placement="top" data-title="Date end" value="" max="9999-12-31" >
							</div>
						  </div>
						  <div class="col-xl-1 col-lg-12">
							<fieldset>
							  <h5>Limit
								<small class="text-muted"></small>
							  </h5>
							  <div class="form-group">
								  <select onchange="load_user_point_history()" id="point_row_per_page" name="t_point_row_per_page" data-placeholder="Select a state..." class="select2 form-control" style="width:100%">
									  <option value="10" selected>10</option>
									  <option value="25">25</option>
									  <option value="50">50</option>
									  <option value="100">100</option>
								  </select>
							  </div>
							</fieldset>
						  </div>
						  <div class="col-xl-1 col-lg-12">
							<fieldset>
							  <h5>
								&nbsp;
							  </h5>
							  <div class="form-group">
							  <div class="btn-group">
								<button onclick="load_user_point_history()" class="btn round btn-primary loading-button"><i class="la la-search"></i></button>
								</div>
							  </div>
							</fieldset>
						  </div>
					  </div>
						<div id="tab-point-history">
						</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
	  <!---->
	  <div class="sidebar-detached sidebar-left" ,=",">
        <div class="sidebar">
          <div class="bug-list-sidebar-content">
            <!-- Predefined Views -->
            <div class="card">
              <div class="card-head">
                <div class="media p-1">
                  <div class="media-left pr-1">
                    <span class="avatar avatar-sm avatar-online rounded-circle">
                      <img src="<?=getProfileImageMobile($datatrx['MemberCode'],0)?>" alt="avatar"><i></i></span>
                  </div>
                  <div class="media-body media-middle">
                    <h5 class="media-heading"><?=($datatrx['Name'])?></h5>
                  </div>
                </div>
              </div>
			<div class="text-center">
              <img class="card-img-top mb-1 img-fluid" data-src="<?=getProfileImageMobile($datatrx['MemberCode'],0)?>" src="<?=getProfileImageMobile($datatrx['MemberCode'],0)?>" alt="Card image cap">
            </div>
			<div class="card-body">
				<a href="<?=base_url()?>membership/member/input/<?=encode($datatrx['MemberCode'])?>" class="btn btn-primary">EDIT MEMBER</a>
				<hr>
				<!-- Striped Progress sample -->
				<div class="category-title">
					<div class="form-group">
					  <label>Kode Member :</label>
					  <input readonly type="text" class="form-control" placeholder="" value="<?=$datatrx['MemberCode']?>">
					</div>
				</div>
				<hr>
				<div class="category-title pb-1">
					<div class="form-group">
					  <label>Nomor Kartu :</label>
					  <input readonly type="text" class="form-control" placeholder="BARCODE" value="<?=$datatrx['Barcode']?>">
					</div>
				  <a href="<?=base_url()?>membership/card/change/<?=($datatrx['MemberCode'])?>" class="btn btn-primary">
				  Ubah Kartu
				  </a>
				</div>
				<hr>
				<!-- Media sample -->
				<div class="category-title pb-1">
				  <h6>Point</h6>
				</div>
				<div class="media">
				  <div class="media-body">
					<h4 class="media-heading"><?=$points['TotalPoints']?:0?> Point.</h4> 
				  </div>
				</div>
				<!-- /Media sample -->
				<hr>      
				<!-- /Ratings sample -->
			</div>
              <!--/More-->
            </div>
            <!--/ Predefined Views -->
          </div>
        </div>
      </div>
</section>
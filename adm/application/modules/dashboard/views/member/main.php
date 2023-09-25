<script>
	$(document).ready(function () {
		reload();
	});
	
	function reload(){
		load_monthly_by_age();
		load_last_registered(10);
		load_top_point(10);
		user_with_apps();
		user_apps_donut_chart();
	}
	
	function load_monthly_by_age()
	{
		showProgres();
		$.post(site_url+"dashboard/member/monthly_by_age"
			,$('#form_filter').serialize()
			,function(result) {
				$('#monthly_by_age').html(result);
				hideProgres();
			}					
			,"html"
		);
	}
	
	function load_last_registered(limit){
		showProgres();
		$.post(site_url+"dashboard/member/load_last_registered/"+limit
			,$('#form_filter').serialize()
			,function(result) {
				$('#load_last_registered').html(result);
				hideProgres();
			}					
			,"html"
		);
	}
	
	function load_top_point(limit){
		showProgres();
		$.post(site_url+"dashboard/member/load_top_point/"+limit
			,$('#form_filter').serialize()
			,function(result) {
				$('#load_top_point').html(result);
				hideProgres();
			}					
			,"html"
		);
	}
	
	function user_with_apps(){
		showProgres();
		$.post(site_url+"dashboard/member/user_with_apps/"
			,$('#form_filter').serialize()
			,function(result) {
				$('#user_with_apps').html(result);
				hideProgres();
			}					
			,"html"
		);
	}
	
	function user_apps_donut_chart(){
		showProgres();
		$.post(site_url+"dashboard/member/user_apps_donut_chart/"
			,$('#form_filter').serialize()
			,function(result) {
				$('#user_apps_donut_chart').html(result);
				hideProgres();
			}					
			,"html"
		);
	}
	
</script>
<section id="card-actions">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">DASHBOARD MEMBER DEFAULT</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
					  <li><a  class="btn btn-icon btn-light mr-1" data-action="collapse">Filter <i class="ft-plus"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse ">
                  <div class="card-body">
					  <div class="card-content">
							<!--FILTER CONTENT-->
							<?php 
							$date_filter_start = date('Y-m').'-01';
							$date_filter_end = date('Y-m-d');
							?>
						<form id="form_filter">
						  <div class="col-md-8">
							<div class="row">
								  <div class="col-md-5">
									<div class="form-group">
									  <label for="date_start_filter">Date Start</label>
									  <input type="date" id="date_start_filter" class="form-control" name="t_date_start_filter" data-toggle="tooltip"
									  data-trigger="hover" data-placement="top" data-title="Date start" value="<?=$date_filter_start;?>" max="9999-12-31" >
									</div>
								  </div>
								  <div class="col-md-5">
									<div class="form-group">
									  <label for="date_end_filter">Date End</label>
									  <input type="date" id="date_end_filter" class="form-control" name="t_date_end_filter" data-toggle="tooltip"
									  data-trigger="hover" data-placement="top" data-title="Date end" value="<?=$date_filter_end;?>" max="9999-12-31" >
									</div>
								  </div>
								  <div class="col-md-2">
									<div class="form-group">
									  <label for="date_end_filter">&nbsp;</label><br>
									 <button type="button" class="btn round btn-primary loading-button " onClick="reload();"><i class="la la-refresh"></i> Reload</button>
									</div>
								  </div>
							</div>
						  </div>
						  </form>
					  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Member Registration by Age</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements" style="background-color: transparent;">
                    <ul class="list-inline mb-0">
					   <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><button type="button" class="btn round btn-primary loading-button " onClick="load_monthly_by_age()"><i class="la la-refresh"></i></button></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
					<div id="monthly_by_age">
					</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		  <div class="row">
		  <!--donut chart-->
			<div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Member Activation Chart</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                       <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						  <li><button type="button" class="btn round btn-primary loading-button " onClick="user_apps_donut_chart()"><i class="la la-refresh"></i></button></li>
						  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div id="user_apps_donut_chart"></div>
                  </div>
                </div>
              </div>
            </div>
			<!--donut chart-->			  
		  </div>
		  
		  <div class="row" hidden>
			<div class="col-md-6 col-sm-12">
				<div class="card">
					<div class="card-header">
					  <h4 class="card-title">User With Apps</h4>
					  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
					  <div class="heading-elements">
						<ul class="list-inline mb-0">
						  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						  <li><button type="button" class="btn round btn-primary loading-button " onClick="user_with_apps()"><i class="la la-refresh"></i></button></li>
						  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						</ul>
					  </div>
					</div>
					<div class="card-content collapse show">
					  <div class="card-body">
						<div id="user_with_apps">
						</div>
					  </div>
					</div>
				</div>
			</div>
		  </div>
		  
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">10 Last Registered Customer</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
					  <li><button type="button" class="btn round btn-primary loading-button " onClick="load_last_registered(10)"><i class="la la-refresh"></i></button></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
					  <div id="load_last_registered">
					  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Top 10 Member Points</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
					  <li><button type="button" class="btn round btn-primary loading-button " onClick="load_top_point(10)"><i class="la la-refresh"></i></button></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
					<div id="load_top_point">
					</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
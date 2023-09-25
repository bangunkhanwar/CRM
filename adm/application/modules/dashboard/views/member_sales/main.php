<script>
	$(document).ready(function () {
		reload();
	});

	function reload(){
		
	}
	
	function load_monthly_by_age()
	{
		showProgres();
		$.post(site_url+"dashboard/member_sales/monthly_by_age"
			,$('#form_filter').serialize()
			,function(result) {
				$('#monthly_by_age').html(result);
				hideProgres();
			}					
			,"html"
		);
	}
	
</script>
 <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">DASHBOARD MEMBER</h4>
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
	<div class="col-12 col-md-12">
		<div class="card">
		  <div class="card-header">
			<h4 class="card-title text-center">Year to date</h4>
		  </div>
		  <div class="card-content collapse show">
			<div class="card-body pt-0">
			  <div class="row">
				<div class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
				  <h6 class="danger text-bold-600">-30%</h6>
				  <h4 class="font-large-2 text-bold-400">$12,536</h4>
				  <p class="blue-grey lighten-2 mb-0">Gross</p>
				</div>
				<div class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
				  <h6 class="danger text-bold-600">-30%</h6>
				  <h4 class="font-large-2 text-bold-400">$12,536</h4>
				  <p class="blue-grey lighten-2 mb-0">Qty</p>
				</div>
				<div class="col-md-3 col-12  border-right-blue-grey border-right-lighten-5 text-center ">
				  <h6 class="success text-bold-600">12%</h6>
				  <h4 class="font-large-2 text-bold-400">$18,548</h4>
				  <p class="blue-grey lighten-2 mb-0">Rsp</p>
				</div>
				<div class="col-md-3 col-12 text-center border-right-lighten-5 ">
				  <h6 class="success text-bold-600">12%</h6>
				  <h4 class="font-large-2 text-bold-400">$18,548</h4>
				  <p class="blue-grey lighten-2 mb-0">Nett</p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
</div>

        <div class="row">
          <div class="col-xl-6 col-12">
            <div class="card pull-up">
              <div class="card-header">
                <h4 class="card-title">Revenue</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body pt-0">
                  <div class="row mb-1">
                    <div class="col-6 col-md-4">
                      <h5>Current week</h5>
                      <h2 class="danger">$82,124</h2>
                    </div>
                    <div class="col-6 col-md-4">
                      <h5>Previous week</h5>
                      <h2 class="text-muted">$52,502</h2>
                    </div>
                  </div>
                  <div class="chartjs">
                    <canvas id="thisYearRevenue" width="400" style="position: absolute;"></canvas>
                    <canvas id="lastYearRevenue" width="400"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-12">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="card pull-up">
                  <div class="card-header bg-hexagons">
                    <h4 class="card-title">Hit Rate
                      <span class="danger">-12%</span>
                    </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-content collapse show bg-hexagons">
                    <div class="card-body pt-0">
                      <div class="chartjs">
                        <canvas id="hit-rate-doughnut" height="275"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="card pull-up">
                  <div class="card-content collapse show bg-gradient-directional-danger ">
                    <div class="card-body bg-hexagons-danger">
                      <h4 class="card-title white">Deals
                        <span class="white">-55%</span>
                        <span class="float-right">
                          <span class="white">152</span>
                          <span class="red lighten-4">/200</span>
                        </span>
                      </h4>
                      <div class="chartjs">
                        <canvas id="deals-doughnut" height="275"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
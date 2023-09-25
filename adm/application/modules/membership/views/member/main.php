<script>
	$(document).ready(function () {
		loadList(1);
		$(".select2").select2();
		// Select With Icon
		$(".select2-icons").select2({
			minimumResultsForSearch: Infinity,
			templateResult: iconFormat,
			templateSelection: iconFormat,
			escapeMarkup: function(es) { return es; }
		});

		$('#formFilter').submit(function (e) {
			e.preventDefault();
			loadList(1)
		});
		
		$('.list-status').on('click', function() {
			var $this = $(this);
			var $alias = $this.data('alias');

			$('.list-status').removeClass('active');
			$this.toggleClass('active')

			// Pass clicked link element to another function
			myfunction($this, $alias)
		})
		
		$('.list-tahun').on('click', function() {
			var $this = $(this);
			var $alias = $this.data('alias');

			$('.list-tahun').removeClass('active');
			$this.toggleClass('active')

			// Pass clicked link element to another function
			myfunction($this, $alias)
		})
	});
	
	function loadList(pg)
	{
		showProgres();
		$.post(site_url+'membership/member/page/'+pg
			,{t_row_per_page:$('#row_per_page').val()
			,t_search_key:$('#search_key').val()
			,t_order_by_field:$('#order_by_field').val()
			,t_order_by_key:$('#order_by_key').val()
			,t_sts_active:$('#sts_active').val()
			,t_year_reg:$('#year_reg').val()
			,t_regdate:$('#regdate').val()}
			,function(result) {
				$('#resultList').html(result);
				hideProgres();
			}			
			,"html"
		);
	}

function myfunction($this,  $alias) {
    console.log($this.text());  // Will log Paris | France | etc...

    console.log($alias);  // Will output whatever is in data-alias=""
}
function set_status_active(sts)
{
	$('#sts_active').val(sts);
	loadList(1);
}
function set_year(year)
{
	$('#year_reg').val(year);
	loadList(1);
}
</script>
<section id="configuration">
  <div class="content-detached content-right">
        <div class="content-body">
          <section class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-head">
                  <div class="card-header">
                    <h4 class="card-title">All Member</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                    <div class="heading-elements">
					<a href="<?=base_url()?>membership/member/input/">
						<button class="btn btn-primary" ><i class="ft-plus white"></i> Add Member</button>
					</a>
					<!--a href="">
						<button class="btn btn-success" ><i class="ft-plus white"></i> Upgrade Member</button>
					</a-->
                    </div>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body"><form id="formFilter" autocomplete="off">
						<div class="row">
						  <div class="col-xl-2 col-lg-12">
							<fieldset>
							  <h5>Limit
								<small class="text-muted"></small>
							  </h5>
							  <div class="form-group">
								  <select onchange="loadList(1)" id="row_per_page" name="t_row_per_page" data-placeholder="Select a state..." class="select2 form-control" style="width:90%">
									  <option value="10" selected>10</option>
									  <option value="25">25</option>
									  <option value="50">50</option>
									  <option value="100">100</option>
								  </select>
							  </div>
							</fieldset>
						  </div>
						  <div class="col-xl-3 col-lg-12">
							<fieldset>
							  <h5>Order By
								<small class="text-muted"></small>
							  </h5>
							  <div class="form-group">
								  <select onchange="loadList(1)" id="order_by_field" name="t_order_by_field" data-placeholder="Select a state..." class="select2 form-control" style="width:90%">
									  <option value="MemberCode" >Member Code</option>
									  <option value="IdCardNumber">IdCardNumber</option>
									  <option value="Name">Name</option>
									  <option value="Address">Address</option>
									  <option value="TotalPoints">Points</option>
									  <option value="RegistrationDate" selected>Reg Date</option>
								  </select>
							  </div>
							</fieldset>
						  </div>
						  <div class="col-xl-3 col-lg-12">
							<fieldset>
							  <h5>Direction
								<small class="text-muted"></small>
							  </h5>
							  <div class="form-group">
								  <select onchange="loadList(1)" id="order_by_key" name="t_order_by_key" data-placeholder="Select a state..." class="select2-icons form-control" style="width:90%">
									  <option value="ASC" data-icon="sort-alpha-asc" >ASC</option>
									  <option value="DESC" data-icon="sort-alpha-desc" selected>DESC</option>
								  </select>
							  </div>
							</fieldset>
						  </div>
						</div>
						</form>
                    <!-- Task List table -->
					  <div id="resultList">
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
              <!-- contacts search -->
              <div class="card-body border-top-blue-grey border-top-lighten-5">
				<div class="input-group">
					<input type="text" id="search_key" class="form-control" placeholder="Search Name / Phone / Email ..." name="t_search_key" onkeydown="if(event.keyCode == 13) loadList(1);">
					<div class="input-group-append">
						<button type="button" class="btn btn-primary loading-button " onClick="loadList(1)"><i class="la la-search"></i></button>
					</div>
				</div> 
              </div>
			  
              <!-- /contacts search -->
              <!-- contacts view -->
              <!-- Groups-->
              <!-- Groups-->
              <div class="card-body">
                <p class="lead">Status Active</p>
                <ul class="list-group">
				  <input hidden type="text" id="sts_active" name="t_sts_active" value="0"/>
                  <a onclick="set_status_active(0)" class="list-group-item list-status active">All</a>
                  <a onclick="set_status_active(1)" class="list-group-item list-status list-group-item-action">Active</a>
                  <a onclick="set_status_active(2)" class="list-group-item list-status list-group-item-action">Non Active</a>
                </ul>
              </div>
              <div class="card-body">
                <p class="lead">Tanggal Registrasi</p>
					<div class="dataTables_length" id="DataTables_Table_0_length">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
								<i class="la la-calendar"></i></span>
							</div>
							<input class="form-control border-primary" type="date" placeholder="Reg Date" id="regdate" name="t_regdate" value="" max="9999-12-31" onkeydown="if( event.keyCode == 13 ) loadList(1)">
							<div class="input-group-append">
								<button type="button" class="btn btn-primary loading-button " onClick="loadList(1)"><i class="la la-search"></i></button>
							</div>
						</div>
					</div>
              </div>
              <!--/ Groups-->
              <div class="card-body">
                <p class="lead">Tahun Registrasi</p>
                <ul class="list-group">
				  <input hidden type="text" id="year_reg" name="t_year_reg" value="0"/>
                  <a onclick="set_year('0');" class="list-group-item list-tahun active">All</a>
				  <?php 
				  $y_awal = 2012;
				  $y_akhir = date('Y');
				  for($y_awal; $y_awal<=$y_akhir;$y_awal++){
				  ?>
                  <a onclick="set_year('<?=$y_awal?>');" class="list-group-item list-tahun list-group-item-action"><?=$y_awal?></a>
				  <?php } ?>
                </ul>
              </div>
              <!--/More-->
            </div>
            <!--/ Predefined Views -->
          </div>
        </div>
      </div>
</section>
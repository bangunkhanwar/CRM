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
	});
	
	function loadList(pg)
	{
		showProgres();
		$.post(site_url+'omnichannel/category/page/'+pg
				,$('#formFilter').serialize()
				,function(result) {
					$('#resultList').html(result);
					hideProgres();
				}					
				,"html"
			);
	}
	
	function loadUpdate(id)
	{
		showProgres();
		$.post(site_url+'omnichannel/category/loadUpdate/'+id
				,$('#formFilter').serialize()
				,function(result) {
					$('#resultList').html(result);
					hideProgres();
				}					
				,"html"
			);
	}
	

	
	
</script>
<section id="configuration">
  <div class="row">
	<div class="col-12">
	  <div class="card">
		<div class="card-header">
		  <h4 class="card-title">Category</h4>
		  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
		  <div class="heading-elements">
			<ul class="list-inline mb-0">
				<li>
					<a   class="btn btn-lg btn-icon btn-light mr-1" data-toggle="collapse" href="#datafilter" aria-expanded="false" aria-controls="datafilter"   href="javascript:void"><i class="ft-filter float-left"></i>&nbsp;Filter</a>		 
				</li>
			  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
			  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
			</ul>
		  </div>
		</div>
		<div class="card-content collapse show">
		  <div class="card-body card-dashboard">
				<div id="datafilter" role="tabpanel" aria-labelledby="headingCollapse53" class="card-collapse collapse" aria-expanded="false" style="">
                  <div class="card-content">
                    <div class="card-body">
					  <form id="formFilter" autocomplete="off">
						<div class="row">
						  <div class="col-xl-1 col-lg-12">
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
						  <div class="col-xl-2 col-lg-12s">
							<fieldset>
							  <h5>Order By
								<small class="text-muted"></small>
							  </h5>
							  <div class="form-group">
								  <select disable onchange="loadList(1)" id="order_by_field" name="t_order_by_field" data-placeholder="Select a state..." class="select2 form-control" style="width:90%">
									  <option value="fidBrand" selected>Brand</option>
									  <option value="Description" selected>Category</option>
								  </select>
							  </div>
							</fieldset>
						  </div>
						  <div class="col-xl-2 col-lg-12">
							<fieldset>
							  <h5>Store Direction
								<small class="text-muted"></small>
							  </h5>
							  <div class="form-group">
								  <select onchange="loadList(1)" id="order_by_key" name="t_order_by_key" data-placeholder="Select a state..." class="select2-icons form-control" style="width:90%">
									  <option value="ASC" data-icon="sort-alpha-asc" selected>ASC</option>
									  <option value="DESC" data-icon="sort-alpha-desc">DESC</option>
								  </select>
							  </div>
							</fieldset>
						  </div>						 
						  <div class="col-xl-2 col-lg-12">
							<fieldset>
							  <h5>Brand 
								<small class="text-muted"></small>
							  </h5>
							  <div class="form-group">
								  <select onchange="loadList(1)" id="brand" name="t_brand" data-placeholder="Select a state..." class="select2 form-control" style="width:90%">
									<option value="ALL" selected>ALL</option>
									<option value="1">ELZATTA</option>			  
									<option value="2">DAUKY</option>			  
									<option value="9">NOORE</option>			  
								  </select>
							  </div>
							</fieldset>
						  </div>
						  
						  
						  <div class="col-xl-2 col-lg-12">
							<fieldset>
							  <h5>Search Key
								<small class="text-muted">Menu</small>
							  </h5>
							  <div class="form-group">
								<input id="search_key" name="t_search_key" type="text" class="form-control date-inputmask" id="date-mask" placeholder="Enter Keywoards">
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
								<button type="submit" class="btn btn-outline-success loading-button"><i class="la la-search"></i></button>
								</div>
							  </div>
							</fieldset>
						  </div>
						</div>
						</form>
                    </div>
                  </div>
                </div>
				
			  <div id="resultList">
			  </div>
		  </div>
		</div>
		
	  </div>
	</div>
  </div>
  
</section>
<script>
	$(document).ready(function () {
		loadListOrders(1);
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
			loadListOrders(1)
		});
	});
	
	function loadListOrders(pg)
	{
		showProgres();
		$.post(site_url+'omnichannel/master/page/'+pg
				,$('#formFilter').serialize()
				,function(result) {
					$('#resultList').html(result);
					hideProgres();
				}					
				,"html"
			);
	}
	
	function loadPicture(id)
	{
		$('#resultContetPicture').html('Proses...');
		// alert(site_url+id);
		$.post(site_url+'omnichannel/master/load_picture/'
			,{t_idParent : id}
			,function(result) {
				$('#resultContetPicture').html(result);
			}						
			,"html"
		);
	}
	
	function loadPictureSizePack(id)
	{
		$('#resultContetPictureSP').html('Proses...');
		// alert(site_url+id);
		$.post(site_url+'omnichannel/master/load_picture_sp/'
			,{t_idParent : id}
			,function(result) {
				$('#resultContetPictureSP').html(result);
			}						
			,"html"
		);
	}
	
	function removeImage(idFileUpload){
		showProgres();
		if (confirm('Are you sure you want to remove images?')) {
			var idParent = $('#idParent').val();
			$.post(site_url+'omnichannel/master/remove_image/'+idParent
				,{t_idFileUpload : idFileUpload}
				,function(result) {
					if (result['error'])
					{
					swal(result['header']||'error', result['error']||'', "error");
					}else
					{						
					swal(result['header']||'success', result['success']||'', "success");
						loadPicture(idParent);
					}
				}						
				,"json"
			);
		}
	}
	
	function removeImageSP(idFileUpload){
		if (confirm('Are you sure you want to remove images?')) {
			var idParent = $('#idParent').val();
			$.post(site_url+'omnichannel/master/remove_image_sp/'+idParent
				,{t_idFileUpload : idFileUpload}
				,function(result) {
					if (result['error'])
					{
						swal(result['header']||'error', result['error']||'', "error");
					}else
					{
						
						swal(result['header']||'success', result['success']||'', "success");
						loadPictureSizePack(idParent);
					}
				}						
				,"json"
			);
		}
	}
	
	function removeImageColor(idFileUpload){
		if (confirm('Are you sure you want to remove images?')) {
			var idParent = $('#idParent').val();
			$.post(site_url+'omnichannel/master/remove_image_color/'+idParent
				,{t_idFileUpload : idFileUpload}
				,function(result) {
					if (result['error'])
					{
						swal(result['header']||'error', result['error']||'', "error");
					}else
					{						
						swal(result['header']||'success', result['success']||'', "success");						
						loadProductMatrixList(idParent);
					}
				}						
				,"json"
			);
		}
	}
	
	// function showList(pg=1)
	// {
	  // showProgres();
	  // $.post(site_url+"omnichannel/master/page/"+pg
		// ,$("#form_filter").serialize()
		// ,function(result) {
		  //// pageswitch(2);
		  // $('#list_page').html(result);
		  // var sum_row = $("#row_per_page").val();
		  // var current = $('#current').val();
		  // if(current == 'undefined') 
		  // {
			// showList(1);            
		  // }
		  // hideProgres();
		// }         
		// ,"html"
	  // );
	// }
	
	
	function loadProductMatrixList(keycode)
    {
		// $('#sku').val(idParent).trigger('change');
		$('#sku').val(keycode);

		$("#idParent").val(keycode);
		// alert(keycode);
		
		// var keycode;
		// keycode = $('#skuParent').val();
        $.ajax({
            type: "POST",
            url: site_url+"omnichannel/master/product_matrix_list/"+keycode,
            data: {
                t_load_func_name:'loadProductMatrixList',
                t_search_key:'keycode'
            },
            dataType: 'html',
            success: function(response)
            {
			
				// $('#idproductparent').val(keycode);
                $('#productMatixList').html(response);
                $('#resultList').hide();
                $('#resultContetPicture').html(response);
                $('#resultContetPictureSP').html(response);
				loadPicture(keycode);
				loadPictureSizePack(keycode);
				loadPictureColor(keycode);
           }
       });
    }
	
	function selectSKUParent()
    {
		var idParent = $("#sku").val();
		if (idParent == "pilih"||idParent == ''){
			location.reload();
		}
		// $('#sku').val(idParent).trigger('change');
		
		// $( "#sku:selected" ).text();

		$("#idParent").val(idParent);
		loadProductMatrixList(idParent);

    }	
</script>
<section id="configuration">
  <div class="row">
	<div class="col-12">
	  <div class="card">
		<div class="card-header">
		  <h4 class="card-title">Image List</h4>
		  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
		  <div class="heading-elements">
			<ul class="list-inline mb-0">
				<li>
					<a   class="btn btn-lg btn-icon btn-light mr-1" data-toggle="collapse" href="#datafilter" aria-expanded="false" aria-controls="datafilter"   href="javascript:void"><i class="ft-filter float-left"></i>&nbsp;Filter</a>		 
				</li>
			  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
			  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
			  <li><a onclick="location.reload()" ><i class="ft-align-justify"></i></a></li>
			</ul>
		  </div>
		</div>
		<div class="card-content collapse show">
		  <div class="card-body card-dashboard">
			<div id="datafilter" role="tabpanel" aria-labelledby="headingCollapse53" class="card-collapse collapse" aria-expanded="false" style="">
			  <div class="card-content">
				<div class="card-body">
				  <form id="formFilter" autocomplete="off">
					<input name="loader_name" type="hidden" value="showList">
					<div class="row">
					  <div class="col-xl-1 col-lg-12">
						<fieldset>
						  <h5>Limit
							<small class="text-muted"></small>
						  </h5>
						  <div class="form-group">
							  <select onchange="loadListOrders(1)" id="row_per_page" name="t_row_per_page" data-placeholder="Select a state..." class="select2 form-control" style="width:100%">
								  <option value="10" selected>10</option>
								  <option value="25">25</option>
								  <option value="50">50</option>
								  <option value="100">100</option>
							  </select>
						  </div>
						</fieldset>
					  </div>
					  <div class="col-xl-2 col-lg-12 hidden">
						<fieldset>
						  <h5>Order By
							<small class="text-muted"></small>
						  </h5>
						  <div class="form-group">
							  <select onchange="loadListOrders(1)" id="order_by_field" name="t_order_by_field" data-placeholder="Select a state..." class="select2 form-control" style="width:90%">
								  <option value="SKU">SKU</option>
								  <option value="Description">Description</option>
							  </select>
						  </div>
						</fieldset>
					  </div>					 
					  <div class="col-xl-2 col-lg-12 hidden">
						<fieldset>
						  <h5>Direction
							<small class="text-muted"></small>
						  </h5>
						  <div class="form-group">
							  <select onchange="loadListOrders(1)" id="order_by_key" name="t_order_by_key" data-placeholder="Select a state..." class="select2-icons form-control" style="width:90%">
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
								  <select onchange="loadListOrders(1)" id="brand" name="t_brand" data-placeholder="Select a state..." class="select2 form-control" style="width:90%">
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
							  <h5>Is Image?
								<small class="text-muted"></small>
							  </h5>
							  <div class="form-group">
								  <select onchange="loadListOrders(1)" id="image_avl" name="t_image_avl" data-placeholder="Select a state..." class="select2 form-control" style="width:90%">
									<option value="ALL" selected>ALL</option>
									<!--option value="1">Image Available</option-->			  
									<option value="2">No Image</option>			  
								  </select>
							  </div>
							</fieldset>
						  </div>
					   <!--div class="col-xl-4 col-lg-12">
							<fieldset>
							  <h5>Search Key
								<small class="text-muted">Store / SKU</small>
							  </h5>
							  <div class="form-group">
								<input id="search_key" name="t_search_key" type="text" class="form-control date-inputmask" id="date-mask" placeholder="Enter Keywoards">
							  </div>
							</fieldset>
						  </div-->
				
					  <div class="col-xl-4 col-lg-12">
						<fieldset>
						  <h5>SKU
							<small class="text-muted">Article code / Description</small>
						  </h5>
						  <div class="form-group">
							<select onchange="selectSKUParent()"  class="form-control select2" style="width: 100%;" id="sku" name="sku">
								<option value = "pilih">SELECT ALL</option>
									<?php
										foreach($product_list->result_array() as $row)
									{
									?>
								<option value="<?= $row['idMsProductParent']?>"><?= $row['SKUParent'].' : '.$row['SKUParentName']?></option>
									<?php } ?>
							</select>
							</div>
						</fieldset>
					  </div>
					</div>
					<input hidden type = "text" id="idParent">
					</form>
				</div>
			  </div>
			</div>
			<div id="resultList"></div>
			<div id="productMatixList"></div>
		  </div>
		</div>		
	  </div>
	</div>
  </div>  
</section>
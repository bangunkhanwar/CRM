<script>

	// $(document).ready(function () {
		// loadListsStock(1);
	// });
	
	// loadListOrderDetail(pg,transnum,storecode)
	
	
	
	function loadListsStock(pg)
	{
		var transnum = $('#transnum').text();
		var storecode = '<?=$store['StoreCode']?>';
		showProgres();
		$.post(site_url+'omnichannel/traffic/stockListPage/'+pg+'/'+transnum+'/'+storecode
				,function(result) {
					$('#resultListAnotherStock').html(result);
					$('#resultListAnotherStock').show();
					$('#resultListDetail').hide();
					$('#resultList').hide();
					$('#filter').hide();
					$('#back').hide();					
					hideProgres();
				}					
				,"html"
			);
			
	}
	
	function confirm_submit(storecode)
	{
		showProgres();
		swal({
			title: "Continue?",
			text: "Your changes will be saved",
			type: "warning",
			buttons: ["No", "Yes"],
		 }).then((value) => {
			 hideProgres();
            	if (value === false) return false;
			    if (value) {
					postOrder(storecode);
					hideProgres();
			        return false;
			    }
            });
	}
	
	// function postOrder(storecode)
	// {
		// var transnum = $('#transnum').text();
		// showProgres();
		// $.post(site_url+'omnichannel/traffic/stockListPage/'+transnum+'/'+storecode
				// ,function(result) {
					// $('#resultListAnotherStock').html(result);
					// $('#resultListAnotherStock').show();
					// $('#resultListDetail').hide();
					// $('#resultList').hide();
					// $('#filter').hide();
					// $('#back').hide();					
					// hideProgres();
				// }					
				// ,"html"
			// );
			
	// }
	
	function postOrder(storecode_to)
	{
		var transnum = $('#transnum').text();
		var storecode = '<?=$store['StoreCode']?>';
		
		showProgres();
		$.post(site_url+"omnichannel/traffic/update_order/"+transnum+'/'+storecode+'/'+storecode_to
			// ,$('#'+e.target.id+'').serialize()
			,function(result) {
				if(result['error'])
				{	
					swal(result['header']||'error', result['error']||'', "error");
				}else
				{
					swal(result['header']||'success', result['success']||'', "success").then((value) => {
						location.reload();
						// window.location = site_url+'membership/member/input/'+result['id'];
					});;
				}
				hideProgres();
			}					
			,"json"
		);
	}
	
	
</script>
<div class="row">
  <div class="col-md-12 form-group">
	<div class="col-md-6">
	  <label for="emailAddress1">Transaction Number : <b><a id="transnum"></a></b></label>
	</div>
	<div class="col-md-6">
	  <label for="emailAddress1">Store : <b><a><?=$store['StoreCode'].' - '.$store['Description'].' ( '.$store['Phone'].' )'?></a></b></label>
	</div>
  </div>
</div>	
<div class="row">
  <div class="col-md-12 form-group">
		<button onclick="loadListsStock('1')" type="button" class="btn btn-warning btn-min-width mr-1 mb-1 pull-right"><i class="ft-search"></i> Search Stock</button>
  </div>
</div>			
<div class="table-responsive">
	<table class="table table-bordered table-striped">
	  <thead>
		<tr>
		  <th>No</th>
		  <th>Transaction Time</th>
		
		  <th>SKU - Description</th>
		  <th>Qty</th>
		  <th>Gross</th>
		  <th>Disc</th>
		  <th>Retail</th>
		</tr>
	  </thead>
	  <tbody>
		<?php
			if($list->num_rows() <= 0){
				?>
				<tr>
					<td colspan="8">Data not Found!!!</td>
				</tr>
			<?php
			}else{
			$no = ($paging['current']-1) * $paging['limit'] ;
			foreach($list->result_array() as $row){
			$no++;
		?>

	  <tr>				  
		<td><?=$no;?></td>
		<td><?=humanize_mdate($row['TransDate']).' | '.substr($row['LastUpdate'],11);?></td>
		<td><?=$row['SKU'].' - '.$row['Description'];?></td>
		<td width = "1%" style="text-align: right;"><?=number_format($row['Quantity'],'0',',','.');?></td>
		<td style="text-align: right;"><?=number_format($row['GrossSalesTot'],'0',',','.');?></td>
		<td style="text-align: right;"><?=number_format($row['DiscountTot'],'0',',','.');?></td>
		<td style="text-align: right;"><?=number_format($row['RetailSalesTot'],'0',',','.');?></td>
		<!--td><span class="badge badge-danger mr-1" style="background-color: <?=$row['StatusColor']?>;"><?=$row['StatusTrx'];?></span></td-->
		
	  </tr>
	<?php }
	
	}?>

	  </tbody>
	</table>
</div>
<?=$paging['list'];?>
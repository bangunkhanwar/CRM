<div class="row">
  <div class="col-md-12 form-group">
	<div class="col-md-6">
	  <label for="emailAddress1">Transaction Number : <b><a id = "transnum"></a></b></label>
	</div>
	<div class="col-md-6">
	  <label for="emailAddress1">Store : <b><a><?=$store['StoreCode'].' - '.$store['Description'].' ( '.$store['Phone'].' )'?></a></b></label>
	</div>
  </div>
</div>	
<div class="row">
  <div class="col-md-12 form-group">
		<button onclick="loadListsStock('1','<?= $row['TransNum']?>')" type="button" class="btn btn-warning btn-min-width mr-1 mb-1 pull-right"><i class="ft-search"></i> Search Stock</button>
  </div>
</div>			
<div class="table-responsive">
	<table class="table table-bordered table-striped">
	  <thead>
		<tr>
		  <th>No</th>
		  <th>Transaction Time</th>
		  <th>Store Code</th>
		  <th>Trans Num</th>
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
		<td width = "10%"><?=match_key($row['StoreCode'],$key['StoreCode']).' - '.$row['StoreName'];?></td>
		<td><?=match_key($row['TransNum'],$key['TransNum']);?></td>
		<td><?=match_key($row['SKU'],$key['SKU']).' - '.$row['Description'];?></td>
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
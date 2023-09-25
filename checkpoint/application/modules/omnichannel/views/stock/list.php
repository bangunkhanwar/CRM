<div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
						  <th>Trans Date</th>
                          <th>Store Code</th>
                          <th>Trans Num</th>
                          <th>Qty Total</th>
                          <th>GSP Total</th>
                          <th>Disc Total</th>
                          <th>RSP Total</th>
                          <th>Status</th>
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
							<td><?=humanize_mdate($row['TransDate']);?></td>
							<td><?=match_key($row['StoreCode'],$key['StoreCode']).' - '.$row['StoreName'];?></td>
							<td><?=match_key($row['TransNum'],$key['TransNum']);?></td>
							<td style="text-align: right;"><?=number_format($row['QuantityTot'],'0',',','.');?></td>
							<td style="text-align: right;"><?=number_format($row['GrossSalesTot'],'0',',','.');?></td>
							<td style="text-align: right;"><?=number_format($row['DiscountTot'],'0',',','.');?></td>
							<td style="text-align: right;"><?=number_format($row['RetailSalesTot'],'0',',','.');?></td>
							<td><span class="badge badge-danger mr-1" style="background-color: <?=$row['StatusColor']?>;"><?=$row['StatusTrx'];?></span> </td>
						  </tr>
	<?php }
	
	}?>
                      </tbody>
                    </table>
</div>
<?=$paging['list'];?>
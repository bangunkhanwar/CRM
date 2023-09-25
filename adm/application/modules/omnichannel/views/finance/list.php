<div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th width="2">No</th>
                          <th>Store</th>
                          <th>Retail Sales</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
	if($list->num_rows() <= 0){
		?>
		<tr>
			<td colspan="5">Data not Found!!!</td>
		</tr>
	<?php
	}else{
	$no = ($paging['current']-1) * $paging['limit'] ;
	foreach($list->result_array() as $row){
	$no++;
?>
						  <tr>				  
							<td><?=$no;?></td>
							<td><?=match_key($row['StoreCode'],$key['StoreCode']);?> - <?=match_key($row['Description'],$key['Description']);?> </td>
							<td style="text-align: right;"><?=number_format($row['RetailSalesTot'],'0',',','.');?></td>
						  </tr>
	<?php }
	
	}?>
                      </tbody>
                    </table>
</div>
<?=$paging['list'];?>
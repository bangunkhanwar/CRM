<div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Store Code</th>
                          <th>Address</th>
                          <th>Sub District</th>
                          <th>District/City</th>
                          <th>Province</th>
                          <th>Courier</th>
                          <th>Action</th>
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
	$expedition_decoded = json_decode($row['ExpeditionList'],true);
	$expedisi = '';
	if(is_array($expedition_decoded) && (count($expedition_decoded)>0))
	{
		$i = 0;
		foreach($expedition_decoded as $keyexp=>$dataexp)
		{
			if($i!=0)
				$expedisi .= ',';
			$expedisi .= $keyexp;
			$i++;
		}
	}
?>
	<tr>				  
		<td><?=$no;?></td>
		<td><?=match_key($row['StoreCode'],$key['StoreCode']).' - '.$row['StoreName'];?></td>
		<td><?=match_key($row['Address'],$key['Address']);?></td>
		<td><?=$row['SubDistrictName'];?></td>
		<td><?=$row['CityName'];?></td>
		<td><?=$row['ProvinceName'];?></td>
		<td><?=$expedisi;?></td>
		<td  style="width:10%">
				<button type="button" title="Edit Store" class="btn btn-success" href="#" onclick="loadUpdate('<?=$row['StoreCode'];?>')">
					<i class="la la-pencil"></i>
				</button>
			</td>
	</tr>
	<?php }
	
	}?>
                      </tbody>
                    </table>
</div>
<?=$paging['list'];?>
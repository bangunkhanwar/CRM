
<div class="table-responsive">
	<table class="table">
	  <thead>
		<tr>
		  <th>#</th>
		  <th>Full Name</th>
		  <th>Birth Place / Date</th>
		  <th>Phone</th>
		  <th>Address</th>
		  <th>*</th>
		</tr>
	  </thead>
	  <tbody>
<?php
	if($list->num_rows() <= 0){
		?>
		<tr>
			<td colspan="6">Data not Found!!!</td>
		</tr>
	<?php
	}else{
	$no = ($paging['current']-1) * $paging['limit'] ;
	foreach($list->result_array() as $row){
	$no++;
?>
		<tr>
		  <th scope="row"><?=$no;?></th>
		  <td><?=match_key($row['Name'],$key['Name'])?></td>
		  <td><?=$row['CityOfBirth']?> / <?=$row['DateOfBirth'];?></td>
		  <td><?=$row['HP'];?></td>
		  <td><?=$row['Address'];?></td>
		  <td><button type="button" class="btn btn-success round btn-sm" onclick="select_lookup_member_beon('<?=$row['CustCode']?>')"><i class="la la-hand-pointer-o"></i></button></td>
		</tr>
	<?php }
	
	}?>
	  </tbody>
	</table>
  </div>
<?=$paging['list'];?>
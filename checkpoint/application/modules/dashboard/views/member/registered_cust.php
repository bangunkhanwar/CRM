<style>
.table th, .table td {
    padding: 0.5rem 1.5rem;
}
</style>
<div class="table-responsive">
  <table class="table mb-0" style="padding: 0.75rem 1rem;">
	<thead class="bg-yellow bg-lighten-4">
	  <tr>
		<th>No</th>
		<th>Member Code</th>
		<th>Name</th>
		<th>Registered</th>
	  </tr>
	</thead>
	<tbody>
	<?php 
	$no = 1;
	foreach($list_data->result_array() as $key=>$row){
	?>
	  <tr>
		<td><?=$no++?></td>
		<td><a title="<?=$row['Name']?>" href="<?=base_url()?>membership/member/info/<?=encode($row['MemberCode'])?>"><?=$row['MemberCode']?></a></td>
		<td><?=$row['Name']?></td>
		<td><?=time_elapsed_string($row['CreatedDate'])?></td>
	  </tr>
	<?php } ?>
	</tbody>
  </table>
</div>
<table class="table table-bordered table-striped">
	  <thead>
		<tr>
		  <th>No</th>
		  <th>Category</th>
		  <th>*</th>
		</tr>
	  </thead>
	  <tbody>
	  <?php 
	  $no = 1;
	  foreach($cat_access_list->result_array() as $key=>$row){ ?> 
		<tr>
			<td><?=$no++?></td>
			<td><?=$row['CatCode']?></td>
			<td>
			  <div class="btn-group">
				<button type="button" class="btn btn-danger  dropdown-toggle" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false"><i class="la la-pencil"></i></button>
				<div class="dropdown-menu">
				  <a class="dropdown-item" href="javascript:void(0)" onclick="remove_category_access('<?=$row['CatCode']?>')"><i class="la la-trash"></i>Remove</a>
				</div>
			  </div>
			</td>
		</tr>
	  <?php } ?>
	  </tbody>
</table>
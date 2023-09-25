<div class = "form-group pull-right">
					<button type="button" title="New" class="btn btn-warning" href="#" onclick="">
						<i class="la la-plus"></i> New Category
					</button>
				</div>
				<br/>	
<div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
						  <th>SKU</th>
                          <th>Description</th>
                          <th>Category</th>
                          <th>Status</th>
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
	$brand = '';
	if ($row['fidBrand'] == 1){
		$brand = 'ELZATTA';
	}else if($row['fidBrand'] == 2){
		$brand = 'DAUKY';
	}else if ($row['fidBrand'] == 9){
		$brand = 'NOORE';
	}
	// $now = strtotime(getSQLDate($row['ActiveStart'])); 
	// $activeStart = strtotime(getSQLDate($row['ActiveStart'])); 
	// $activeEnd = strtotime(getSQLDate($row['ActiveEnd'])); 
	// if ($activeStart )

?>
			  <tr>				  
				<td style="width:3%"><?=$no;?></td>
				<td><?=$brand;?></td>
				<td><?=match_key($row['Description'],$key['Description']);?></td>
				<td>
					<?php if ($row['ImagePrefix'] == ''){?>
					<a>No image</a>
					<?php }else{?>
					<img style="width: 50px;" alt="image" src="<?='https://crm.elcorps.com/'.$img?>" onClick="window.open('<?='https://crm.elcorps.com/'.$imgOriginal?>')">		  
					<?php }?>
				</td>
				<td>AKTIF</td>
				<td  style="width:10%">
					<button type="button" title="Edit" class="btn btn-success" href="#" onclick="loadUpdate('<?=$row['idFeaturedCategory'];?>')">
						<i class="la la-pencil"></i>
					</button>
				</td>				<!--td><span class="badge badge-danger mr-1" style="background-color: <?=$row['StatusColor']?>;"><?=$row['StatusTrx'];?></span> </td-->
			  </tr>
	<?php }
	
	}?>
                      </tbody>
                    </table>
</div>
<?=$paging['list'];?>
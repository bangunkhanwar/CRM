<div class="table-responsive">
	<table class="table table-bordered table-striped">
	  <thead>
		<tr>
		  <th>No</th>
		  <th>Image</th>
		  <th>Brand</th>
		  <th>SKU</th>
		  <th>Description</th>
		  <th>Product Info</th>
		  <!--th>Start Periode</th>
		  <th>End Periode</th-->
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
				$img = $row['filePath'].'/parent/thumb_80/'.$row['fileServerName'];
				$imgOriginal = $row['filePath'].'/parent/original/'.$row['fileServerName'];
				$brand = 'No Brand';
				if($row['fidProductBrand']==1){
					$brand = 'elzatta';
				}else if($row['fidProductBrand']==2){
					$brand = 'DAUKY';
				}else if($row['fidProductBrand']==9){
					$brand = 'NOORE';
				}

			?>
		<tr>
    		<td><?= $no;?></td>
    		<td align="center" style="vertical-align:middle;">	
				<?php if ($row['fileServerName'] == '' || $row['filePath'] == ''){?>
				<a>No image</a>
				<?php }else{?>
				<img style="width: 50px;" alt="image" src="<?='https://crm.elcorps.com/'.$img?>" onClick="window.open('<?='https://crm.elcorps.com/'.$imgOriginal?>')">		  
				<?php }?>
				<!--img style="max-height:50px;cursor: -webkit-zoom-in" src="" class="gravatar" alt=""></a-->
			</td>
			<td><?=$brand;?></td>
			<td><?=match_key($row['SKUParent'],$key['SKUParent']);?></td>
			<td style="width:30%"><?=match_key($row['SKUParentName'],$key['SKUParentName']);?></td>
			<td style="width:50%"><?= $row['ProductInfo'] ?></td>
            <!--td><?= humanize_mdate($row['ePOStart']) ?></td>
            <td><?= humanize_mdate($row['ePOEnd']) ?></td-->
    		<td  style="width:10%">
				<button type="button" title="Edit Image" class="btn btn-success" href="#" onclick="loadProductMatrixList(<?= $row['idMsProductParent']?>)">
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
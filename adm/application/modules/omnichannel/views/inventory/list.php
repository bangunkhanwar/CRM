<script>
	// $(document).ready(function () {
		
	// });
	
	function handleChange(checkbox,store,sku) {
		if(checkbox.checked == true){
			update_product(store,sku,1)
		}else{
			update_product(store,sku,0)
	   }
	}
	
	function update_product(store,sku,val)
	{
		showProgres();
		$.post(site_url+"omnichannel/inventory/update_status_product/"
			,{storecode:store
			,sku:sku
			,value:val}
			,function(result) {
				if(result['error'])
				{
					hideProgres();
					swal(result['header']||'error', result['error']||'', "error");
				}else
				{
					hideProgres();
					swal(result['header']||'success', result['success']||'', "success").then((value) => {
							// location.reload();
					});;
					
				}
				hideProgres();
			}					
			,"json"
		);
	}
</script>

<div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Store Code</th>
                          <th>SKU</th>
                          <th>Description</th>
                          <th>Brand</th>
                          <th>Gross Sales</th>
                          <th>Quantity</th>
                          <th>Last Update</th>
                          <th>Omni Channel</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
	if($list->num_rows() <= 0){
		?>
		<tr>
			<td colspan="9">Data not Found!!!</td>
		</tr>
	<?php
	}else{
	$no = ($paging['current']-1) * $paging['limit'] ;
	foreach($list->result_array() as $row){
	$no++;
	$isChecked = '';
	$isOmni = 'Not Active';
	if($row['isOmni']== 1){
		$isOmni = 'Active';
		$isChecked = 'checked'; 
	}
?>
	  <tr>				  
		<td><?=$no;?></td>
		<td><?=match_key($row['StoreCode'],$key['StoreCode']).' - '.$row['StoreName'];?></td>
		<td><?=match_key($row['SKU'],$key['SKU']);?></td>
		<td><?=match_key($row['Description'],$key['Description']);?></td>
		<td><?=$row['BrandName'];?></td>
		<td style="text-align: right;"><?=number_format($row['GrossSales'],'0',',','.');?></td>
		<td style="text-align: right;"><?=number_format($row['Quantity'],'0',',','.');?></td>
		<td><?=humanize_mdate($row['LastUpdate']);?></td>
		<td>
			<input type='checkbox' onchange='handleChange(this,"<?=$row['Stores'];?>","<?=$row['SKU'];?>");' <?=$isChecked;?>>
				
			<!--div class="bootstrap-switch-toggle bootstrap-switch-id-switchBootstrap19 bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate bootstrap-switch-on" style="width: 100px;"><div class="bootstrap-switch-container" style="width: 147px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 49px;">ON</span><span class="bootstrap-switch-label" style="width: 49px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger" style="width: 49px;">OFF</span><input type="checkbox" class="switchBootstrap" id="switchBootstrap19" data-off-color="danger"></div></div-->
		</td>
	  </tr>
	<?php }
	
	}?>
                      </tbody>
                    </table>
</div>

<?=$paging['list'];?>
<div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Merchant Code</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Address</th>
                          <th>TimeCreate</th>
                          <th>CreateDate</th>
                          <th>Status</th>
                          <th></th>
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
					<td><?=match_key($row['MerchantPartnerCode'],$key['MerchantPartnerCode']);?></td>
					<td><?=match_key($row['Name'],$key['Name']);?></td>
					<td><?=match_key($row['Description'],$key['Description']);?></td>
					<td><?=match_key($row['Address'],$key['Address']);?></td>
					<td><?=($row['TimeCreate']);?></td>
					<td><?=($row['CreatedDate']);?></td>
					<td><?=($row['isActive']==1)?'<i class="la la-check-circle-o"> Active</i>':'<i class="la la-times-circle-o"> Not Active</i>'?></td>
					<td><div class="form-group">
				  <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
					<div class="btn-group btn-group-sm" role="group">
					  <button id="btnGroupDrop2" type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="ft-alert-octagon"></i>
					  </button>
					  <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="btnGroupDrop2" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
						<a class="dropdown-item" href="<?=base_url()?>tools/merchant_partner/input/<?=encode($row['MerchantPartnerCode'])?>"> Edit <i class="ft-edit float-right"></i></a>
						<a class="dropdown-item" href="javascript:void" onclick="delete_mp('<?=encode($row['MerchantPartnerCode'])?>')"> Delete <i class="ft-trash float-right"></i></a>
					  </div>
					</div>
				  </div>
				</div></td>
				</tr>
	<?php }
	
	}?>
                      </tbody>
                    </table>
</div>
<?=$paging['list'];?>
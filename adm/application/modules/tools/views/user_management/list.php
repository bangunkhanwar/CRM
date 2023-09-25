<div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Login Name</th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
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
							<td><?=match_key($row['LoginName'],$key['LoginName']);?></td>
							<td><?=match_key($row['FullName'],$key['FullName']);?></td>
							<td><?=match_key($row['Email'],$key['Email']);?></td>
							<td><?=match_key($row['PhoneNumber'],$key['PhoneNumber']);?></td>
							<td><?=match_key($row['Address'],$key['Address']);?></td>
							<td><?=($row['isActive']==1)?'<i class="la la-check-circle-o"> Active</i>':'<i class="la la-times-circle-o"> Not Active</i>'?></td>
							<td><div class="form-group">
                          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group btn-group-sm" role="group">
                              <button id="btnGroupDrop2" type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ft-alert-octagon"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="btnGroupDrop2" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="<?=base_url()?>tools/user_management/input/<?=encode($row['idMsOperator'])?>"> Edit <i class="ft-edit float-right"></i></a>
                                <a class="dropdown-item hidden" href="javascript:void" onclick="delete_user('<?=encode($row['idMsOperator'])?>')"> Delete <i class="ft-trash float-right"></i></a>
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
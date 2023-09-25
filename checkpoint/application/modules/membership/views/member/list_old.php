<script>
	$(document).ready(function () {
		$('[data-toggle="popover"]').popover()
	});
</script>
<?=$paging['list'];?>
<div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode</th>
                          <th>ID Card</th>
                          <th>Name</th>
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
							<td><?=match_key($row['MemberCode'],$key['MemberCode']);?></td>
							<td><?=match_key($row['IdCardNumber'],$key['IdCardNumber']);?></td>
							<td>
							<div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="<?=getProfileImageMobile($row['MemberCode'],1)?>" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
									<a href="javascript:void;" class="media-heading" data-trigger="hover" data-html="true" data-container="body" data-toggle="popover" data-placement="top" data-content='<div class="card border-pink border-lighten-2">
										<div class="text-center">
											<div class="card-body">
											  <img src="<?=getProfileImageMobile($row['MemberCode'],0)?>" class="rounded-circle  height-150" alt="Card image">
											</div>
											<div class="card-body">
											  <h4 class="card-title"><?=$row['Name']?></h4>
											  <h6 class="card-subtitle text-muted">Phone:<?=$row['Phone']?match_key($row['Phone'],$key['Phone']):'-';?><br>Email:<?=$row['Email']?match_key($row['Email'],$key['Email']):'';?></h6>
											</div>
										  </div>
										</div>'><?=match_key($row['Name'],$key['Name']);?>
									</a>
                                </div>
                              </div>
							</td>
							<td><?=match_key($row['Address'],$key['Address']);?></td>
							<td><?=($row['isActive']==1)?'<i class="la la-check-circle-o"> Active</i>':'<i class="la la-times-circle-o"> Not Active</i>'?></td>
							<td><div class="form-group">
                          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group btn-group-sm" role="group">
                              <button id="btnGroupDrop2" type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ft-alert-octagon"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="btnGroupDrop2" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="<?=base_url()?>membership/member/input/<?=encode($row['MemberCode'])?>"> Edit <i class="ft-edit float-right"></i></a>
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
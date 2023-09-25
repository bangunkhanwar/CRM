<script>
	$(document).ready(function () {
		$('[data-toggle="popover"]').popover()
	});
</script>
<?=$paging['list'];?>
	<hr style="margin-top: .3rem;margin-bottom: .3rem;">
<div class="media-list">
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
	<div id="headingCollapse<?=$row['MemberCode']?>" class="card-header p-0">
	  <a style="padding-bottom:5px;padding-top:5px" data-toggle="collapse" href="#collapse<?=$row['MemberCode']?>" aria-expanded="false" aria-controls="collapse<?=$row['MemberCode']?>" class="email-app-sender media border-0 bg-blue-grey bg-lighten-5 collapsed">
		<div class="media-left pr-3">
		  <span class="avatar avatar-sm avatar-online rounded-circle">
			<img src="<?=getProfileImageMobile($row['MemberCode'],1)?>" alt="avatar"><i></i></span>
		</div>
		<div class="media-body w-100">
			<h6 class="list-group-item-heading text-bold-500">
				<?=match_key($row['MemberCode'],$key['MemberCode']);?>
				&nbsp;<span class="badge badge-warning mr-1"><?=$row['TotalPoints']?:0?> Points</span>
					<span class="float-right">
					<span class="badge badge-<?=($row['isActive']==1)?'success':'danger'?> mr-1"><?=($row['isActive']==1)?'ACTIVE':'NON ACTIVE'?></span>
					</span>
			</h6>
			<p class="list-group-item-text text-truncate mb-0 ">
				<i class="text-bold-500">
					<?=match_key($row['Name'],$key['Name']);?>
				</i>
				<?php if($row['RegistrationDate']!=''){?>
				<span class="float-right">
					Reg Date : <?=$row['RegistrationDate']?>
				</span>
				<?php }?>
			</p>
			<p class="list-group-item-text text-truncate mb-0">
				<i class="la la-mobile-phone"></i>
				<?=($row['Handpone']!='')?match_key($row['Handpone'],$key['Phone']):'<i>--empty--</i>';?>
				&nbsp;
				<?=($row['isVerifiedHandPhone']==1)?'<span class="badge success darken-4"><i class="la la-check"></i> Verified</span>':'<span class="badge danger darken-4"><i class="la la-close"></i> NOT Verified</span>'?>
				<span class="float-right">
				</span>
			</p>
			<p class="list-group-item-text text-truncate mb-0">
				<i class="la la-at"></i>
				&nbsp;<?=($row['Email']!='')?match_key($row['Email'],$key['Email']):'<i>--empty--</i>';?>
				&nbsp;
				<?=($row['isVerifiedEmail']==1)?'<span class="badge success darken-4"><i class="la la-check"></i> Verified</span>':'<span class="badge danger darken-4"><i class="la la-close"></i> NOT Verified</span>'?>
				<span class="float-right">
				</span>
			</p>
			<p class="list-group-item-text text-truncate mb-0">
				<i class="la la-shopping-cart"></i>
				&nbsp;
				Last Transaction : <?=($row['LastTransaction']!='')?$row['LastTransaction']:'<i>--empty--</i>';?>
				<span class="float-right">
				</span>
			</p>
		</div>
	  </a>
	</div>
	<div id="collapse<?=$row['MemberCode']?>" role="tabpanel" aria-labelledby="headingCollapse<?=$row['MemberCode']?>" class="card-collapse collapse" aria-expanded="true" style="">
	  <div class="card-content">
		<div class="card-body">
		  <p><i class="la la-home"></i>
				Address : &nbsp; <?=match_key($row['Address'],$key['Address'])?:'-';?> </p>
		  <p>CARD : &nbsp; <?=match_key($row['Barcode'],$key['Barcode'])?:'-';?></p>
		  <p>First Login Apps : <?=$row['FirstLoginApps']?:'-';?></p>
		</div>
		<a class="btn round btn-success btn-block btn-glow" href="<?=base_url()?>membership/member/info/<?=encode($row['MemberCode'])?>"> View Detail </a><hr>
	  </div>
	</div>
	<hr style="margin-top: .3rem;margin-bottom: .3rem;">
	<?php }
	
	}?>
</div>
<?=$paging['list'];?>
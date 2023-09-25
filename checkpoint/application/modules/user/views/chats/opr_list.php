<a href="#" class="list-group-item active">Select Recipient</a>
<div style="max-height: 300px;overflow-x: overlay;">
<?php foreach($list_opr->result_array() as $key=>$row){?>
<a id="list_opr_<?=$row['idMsOperator']?>" onclick="select_operator('<?=$row['idMsOperator']?>')" href="javascript:void(0)" class="list-group-item list-group-item-action">
	<div class="media">
		<div class="media-left pr-1">
		  <span class="avatar avatar-sm avatar-online rounded-circle">
			<img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
		</div>
		<div class="media-body">
		  <h6 class="media-heading mb-0"><?=match_key($row['LoginName'],$key['LoginName'])?> - <?=match_key($row['FullName'],$key['FullName'])?>
                    <span class="font-small-3 float-right info"><?=$row['last_chat_date_unread']?></span></h6>
		  <p class="font-small-2 mb-0"><?=$row['last_msg_unread']?>
		  	<span class="float-right primary">
			  <span class="badge badge-pill badge-danger" id="unread_count_<?=$row['idMsOperator']?>"><?=$row['count_unread']?></span>
			</span>
		  </p>
		</div>
	</div>
</a>
<?php } ?>
</div>
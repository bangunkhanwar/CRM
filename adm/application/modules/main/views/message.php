<?php foreach($list_msg->result_array() as $key=>$row){?>
<a href="<?=base_url()?>user/chats/<?=encode($row['idMsOperator'])?>">
	<div class="media">
	  <div class="media-left">
		<span class="avatar avatar-sm avatar-online rounded-circle">
		  <img src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>
	  </div>
	  <div class="media-body">
		<h6 class="media-heading"><?=$row['LoginName']?></h6>
		<p class="notification-text font-small-3 text-muted"><?=$row['last_msg_unread']?></p>
		<small>
		  <time class="media-meta text-muted" datetime="<?=$row['last_chat_date']?>"><?=time_elapsed_string($row['last_chat_date'])?></time>
		</small>
	  </div>
	</div>
  </a>
<?php }?>
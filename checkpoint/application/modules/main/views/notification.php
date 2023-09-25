<?php foreach($list_notif->result_array() as $key=>$row){?>
<a href="<?=base_url()?>user/detail_notification/<?=encode($row['idNotification'])?>">
	<div class="media">
	  <div class="media-left align-self-center"><i class="<?=$row['NotificationIcon']?> icon-bg-circle " style="background-color: <?=$row['Color']?>;"></i></div>
	  <div class="media-body">
		<h6 class="media-heading" style="color:<?=$row['Color']?>"><?=$row['Title']?></h6>
		<p class="notification-text font-small-3 text-muted"><?=$row['Content']?></p>
		<small>
		  <time class="media-meta text-muted" datetime="<?=$row['TimeCreate']?>"><?=time_elapsed_string($row['TimeCreate'])?></time>
		</small>
	  </div>
	</div>
  </a>
<?php }?>
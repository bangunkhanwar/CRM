<div class="card-body">
	<div id="scrollable_list" style="max-height: 350px;overflow-x: overlay;">
	<?php foreach($chat_list->result_array() as $key=>$row){?>
	  <div class="media">
		<div class="media-left pr-1">
		  <a href="#">
			<span class="avatar avatar-online">
			  <img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar">
			</span>
		  </a>
		</div>
		<div class="media-body">
		  <p class="text-bold-600 mb-0" title="<?=$row['FromOprFullName']?>"><a href="#"><?=$row['FromOprLoginName']?></a> <?=$row['fidMsOperatorFrom']==$this->session->userdata('idMsOperator')?'{me}':''?></p>
		  <p class="m-0"><?=$row['Message']?></p>
		  <ul class="list-inline mb-1 hidden">
			<li class="pr-1">
			  <a href="#" class="">
				<span class="la la-thumbs-o-up"></span> Like</a>
			</li>
			<li class="pr-1">
			  <a href="#" class="">
				<span class="la la-commenting-o"></span> Replay</a>
			</li>
		  </ul>
		</div>
	  </div>
	<?php }?>
	</div>
</div>
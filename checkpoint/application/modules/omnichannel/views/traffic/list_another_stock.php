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
	$storecodeHeader = $row['StoreCode'];
?>
	<div id="headingCollapse<?=$row['StoreCode']?>" class="card-header p-0">
	  <a style="padding-bottom:5px;padding-top:5px" data-toggle="collapse" href="#collapse<?=$row['StoreCode']?>" aria-expanded="false" aria-controls="collapse<?=$row['StoreCode']?>" class="email-app-sender media border-0 bg-blue-grey bg-lighten-5 collapsed">
		<div class="media-left pr-3">
		  <span class="avatar avatar-sm avatar-online rounded-circle">
			<img src=" alt="avatar"><i></i></span>
		</div>
		<div class="media-body w-100">
			<h5 class="list-group-item-heading text-bold-500">
				<?=$row['StoreCode'].' - '.$row['StoreName'];?>
				&nbsp;<b><?='( '.$row['PhoneStore'].' )';?></b>
			
					<span class="float-right">
					</span>
			</h5>
			
			
			<p style ="margin-bottom:8px !important;"  class="list-group-item-text text-truncate mb-0 ">
			<?php 
				foreach($listsku->result_array() as $rows){
				if ($storecodeHeader == $rows['StoreCode'])
				{
					echo '<i class="text-bold-500">'.$rows['SKU'].' - '.$rows['Description'].'	
					&nbsp;<span class="badge badge-primary mr-2"><b>'.$rows['Quantity'].'</b> Pcs</span></i><br/><br/>';
				}
			?>
				<!--i class="text-bold-500">
					- <?=$rows['SKU'];?>
					&nbsp;<span class="badge badge-primary mr-2"><b> </b>Pcs</span>
				</i-->
				<?php } ?>
				<!--
				<?php if($row['LastUpdate']!=''){?>
				<span class="float-right">
					Update : <?=$row['LastUpdate']?>
				</span>
				<?php }?>
				
				<span class="float-right">
					<button onclick="" type="button" class="btn btn-success btn-min-width mr-1 mb-1 pull-right">Post Order</button>
				</span-->
			</p>	
		</div>
	  </a>
	</div>
	<div id="collapse<?=$row['StoreCode']?>" role="tabpanel" aria-labelledby="headingCollapse<?=$row['StoreCode']?>" class="card-collapse collapse" aria-expanded="true" style="">
	  <div class="card-content">
		<!--div class="card-body">
		  <p>
			<i class="la la-home"></i>&nbsp;Detail Information : 
		  </p>
		</div-->
		<button onclick="confirm_submit('<?=$row['StoreCode']?>')" type="button" class="btn btn-success btn-block">Post Order</button>

	  </div>
	</div>
	<hr style="margin-top: .3rem;margin-bottom: .3rem;">
	<?php }
	
	}?>
</div>
<?=$paging['list'];?>
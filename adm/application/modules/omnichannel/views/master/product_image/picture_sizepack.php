

<div class="card-body my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery" data-pswp-uid="1">
	<div class="row">
		<?php
		$img ='';
		foreach($file_list->result_array() as $row){
			if($row['fileExt'] == 'png' || $row['fileExt'] == 'jpg'|| $row['fileExt'] == 'jpeg'|| $row['fileExt'] == 'gif'){
				$img = '/files/'.$id_parent.'/parent/thumb_80/'.$row['fileServerName'];
				$imgOriginal = '/files/'.$id_parent.'/parent/original/'.$row['fileServerName'];
			}
		?>
		<figure class="col-lg-1 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
		  <a itemprop="contentUrl" data-size="480x360">
			<img style = "width:100%;height:100%;" class="img-thumbnail img-fluid" src="<?='https://crm.elcorps.com'.$img?>"  onClick="window.open('<?='http://crm.elcorps.com'.$imgOriginal?>')">		
		  </a>
		</figure>	
		<div class="card" style = "position: relative;margin-left: -2%;margin-top: -1%;background-color: white;height: 1%;">
				<a style = "color:grey;" href="javascript:void(0)" onClick="removeImageSP('<?=$row['idFileUpload']?>')">
					<i class="la la-times-circle font-medium-3"></i>
				</a>                       					
		</div>
		<?php }?>
	</div>
</div>
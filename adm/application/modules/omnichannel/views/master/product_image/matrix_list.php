<?php
	$img_attach = 'assets/icon/add_plus.png'; 
?>
<script type='text/javascript'>
	$(document).ready(function(){	
	  $(".select2").select2({});
	  objDate('epostart');
	  objDate('epoend');
	  objDate('presaleend');
	  objDate('presalestart');
	  $("#epostart").inputmask("dd-mm-yyyy");	
	  $("#epoend").inputmask("dd-mm-yyyy");	
	  $("#presaleend").inputmask("dd-mm-yyyy");	
	  $("#epostart").inputmask("dd-mm-yyyy");	
	});	
	function uploadImage(obj,type)
	{
		var idParent = $('#id_product_parent').val();
		upclick(
		{
			element: obj,
			action: site_url+'omnichannel/master/foto_procces/'+idParent+'/'+type, 
			onstart:
				function(filename)
				{
					 // alert('Start upload: '+filename);
				},
			oncomplete:
				function(response_data) 
				{
					var data = response_data;
					var result = data.split('#');
					// alert(response_data['error']);
					if(result[0]!='success')
					{
						alert(result[0]);
						return;
					}
					$('#sku_product_parent').val(result[1]);
					$('#id_product_parent').val(result[2]);
					$('#msg').show();
					$('#msg').html(response_data);
					loadPicture(idParent);
					loadPictureSizePack(idParent);
					loadPictureColor(idParent);
					// save_from_upload_parent(result[2]);
				}
		});
	}
	
	function uploadImageColor(obj,colorCode)
	{
		var idParent = $('#id_product_parent').val();
		upclick(
		{
			element: obj,
			action: site_url+'omnichannel/master/foto_color_procces/'+idParent+'/'+colorCode, 
			onstart:
				function(filename)
				{
					 // alert('Start upload: '+filename);
				},
			oncomplete:
				function(response_data) 
				{
					var data = response_data;
					var result = data.split('#');
					if(result[0]!='success')
					{
						alert(result[0]);
						return;
					}
					$('#sku_product_parent').val(result[1]);
					$('#id_product_parent').val(result[2]);
					$('#msg').show();
					$('#msg').html(response_data);
					// loadPicture(idParent);
					loadPictureColor(idParent,colorCode);					
					//save_from_upload_parent(result[2]);
					// loadProductMatrixList();
				}
		});
	}
	
	function loadPictureColor(id,colorcode)
	{
		// alert(site_url+id);
		$('#resultContetPictureColor').html('Proses...');
		$.post(site_url+'omnichannel/master/load_picture_color'
			,{
			   t_idParent : id,
			   t_idColor : colorcode
			}
			,function(result) {
				$('#'+colorcode+'_resultContetPictureColor').html(result);
			}						
			,"html"
		);
	}
	
	
	
</script>
<style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file]{
    position: absolute;
    top: 0;
    right: 0;
    min-width: 70%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>
<!--PRODUCT IMAGE COLOR-->


<div class="box-body card">
	<form id="formContent" method = "post">
		<br/>
		<div class = "card">
			<h4 class="form-section"><i class="ft-image"></i> Main Image</h4>
				<div class="form-group">
                    <button onclick = "uploadImage(this,1)" type="button" class="btn mr-1 mb-1 btn-success pull-right"><i class="ft ft-image"></i>
						Upload Image
					</button>
				</div>
					<div id="resultContetPicture"></div>				
				<!--div class="col-sm-2">
					<div  id="btn_upload" style="display: inline;margin-right: 50px;"></div>&nbsp;
					<span  style ="margin-right: 100px;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0px;" class="btn btn-default btn-file " id="image1">
						<img alt="image" id="img1" style = "width:70px;height:70px;" src="<?=base_url().$img_attach?>" type = "hidden" onclick = "uploadImage(this,1)">		
					</span>
				</div-->
		</div>		
		<br/><p class="text-red">* Maximum upload image size : 3MB</p>
		<br/>
		
		<div class="card">
			<h4 class="form-section"><i class="ft-image"></i> Sizepack Image</h4>
				<div class="form-group">
                    <button onclick = "uploadImage(this,7)" type="button" class="btn mr-1 mb-1 btn-success pull-right"><i class="ft ft-image"></i>
						Upload Image
					</button>
				</div>
				<div id="resultContetPictureSP"></div>
		</div>
		
		
		<br/><p class="text-red">* Maximum upload image size : 3MB</p>
		<br/>
	
<div class="box box-grey">
<table class="table table-bordered table-striped tableFixHead">
    <thead>
        <tr>
            <tr>
                <th>Color</th>
				<th style="text-align:center;" class = "pull-center">Image</th>
            </tr>
        </tr>
    </thead>
    <input class="hidden" type="text" name="" id="id_product_parent" value="<?=$idparent?>" />
    <input class="hidden" type="text" name="" id="sku_product_parent" value="<?=$product_parent['SKUParent']?>" />
    <tbody>
        <?php
            foreach($color_list->result_array() as $color_row)
            {
				$visibility = "";
                $colorCode = $color_row['idProductColor'];
                $colorName = $color_row['ColorName'];
				if($colorCode=="000"){
					$visibility = "";
				}
		?>
		<script type="text/javascript">
			loadPictureColor('<?=$idparent?>',<?=$colorCode?>);
		</script>
			
            <tr>
				<td width = "30%";>
				    <input class = "hidden" type="text" name="" id="color_code" value="<?=$color_row['idProductColor']?>" />
                    <h6><?php echo $color_row['idProductColor'].' - '.$color_row['ColorName'];?></h6>
                    <div class="rating rating-5"></div>
                </td>
				<td style="text-align:center;" contenteditable="false">
					<div class="<?=$visibility?> card">		
						<div class="form-group">
							<button onclick = "uploadImageColor(this,<?= $color_row['idProductColor']?>)" type="button" class="btn mr-1 mb-1 btn-success pull-right"><i class="ft ft-image"></i>
								Upload Image
							</button>
						</div>
						<div style = "margin-right: 50px;" id="<?=$colorCode?>_resultContetPictureColor"></div>
					</div>	
					<br/><p class="<?=$visibility?> pull-right">* Maximum upload image size : 3MB</p>					
				</td>     
            </tr>
        <?php }?>
    </tbody>
</table>
</div>
			<div class="form-group hidden">
				<div class="row">
				  <label for="epostart" class="col-sm-2 control-label">Product Info</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="productinfo" name="productinfo" value="<?php if(isset($product_parent['ProductInfo'])){echo $product_parent['ProductInfo'];};?>" placeholder="Product Info">
				  </div>
				</div>
			</div>
			<div class="form-group hidden">
				<div class="row">
				  <label for="epostart" class="col-sm-2 control-label">Minimum Order</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="minorder" name="minorder" value="<?php if(isset($product_parent['MinOrder'])){echo $product_parent['MinOrder'];};?>" placeholder="Minimum Order">
				  </div>
				</div>
			</div>
			<div class="form-group hidden">
				<div class="row">
				  <label for="epostart" class="col-sm-2 control-label">Unit Pack</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="unitpack" name="unitpack" value="<?php if(isset($product_parent['UnitPack'])){echo $product_parent['UnitPack'];};?>" placeholder="Unit Pack">
				  </div>
				</div>
			</div>
			<div class="form-group hidden">
				<div class="row">
					<?php 
						$date = '';
						$date_default2 = date('d').'-'.date("m").'-'.date("Y");
						if(isset($product_parent['ePOStart'])){
							$date_default2 = humanize_mdate($product_parent['ePOStart']);
						}
					?>
				  <label for="epostart" class="col-sm-2 control-label">ePO Start</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="epostart" name="epostart" placeholder="ePO Start" value="<?=$date_default2?>">
				  </div>
				</div>
			</div>
			<div class="form-group hidden">
				<div class="row">
					<?php 
						$date = '';
						$date_default2 = date('d').'-'.date("m").'-'.date("Y");
						if(isset($product_parent['ePOEnd'])){
							$date_default2 = humanize_mdate($product_parent['ePOEnd']);
						}
					?>
				  <label for="epostart" class="col-sm-2 control-label">ePO End</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="epoend" name="epoend" placeholder="ePO End" value="<?=$date_default2?>">
				  </div>
				</div>
			</div>
			<div class="form-group hidden">
				<div class="row">
					<?php 
						$date = '';
						$date_default2 = date('d').'-'.date("m").'-'.date("Y");
						if(isset($product_parent['PreSaleStart'])){
							$date_default2 = humanize_mdate($product_parent['PreSaleStart']);
						}
					?>
				  <label for="epostart" class="col-sm-2 control-label">Pre Sale Start</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="presalestart" name="presalestart" placeholder="Pre Sale Start" value="<?=$date_default2?>">
				  </div>
				</div>
			</div>
			<div class="form-group hidden">
				<div class="row">
					<?php 
						$date = '';
						$date_default2 = date('d').'-'.date("m").'-'.date("Y");
						if(isset($product_parent['PreSaleEnd'])){
							$date_default2 = humanize_mdate($product_parent['PreSaleEnd']);
						}
					?>
				  <label for="epostart" class="col-sm-2 control-label">Pre Sale End</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="presaleend" name="presaleend" placeholder="Pre Sale End" value="<?=$date_default2?>">
				  </div>
				</div>
			</div>
			<div class="form-group hidden">
				<div class="row">
					<?php 
						$date = '';
						$date_default2 = date('d').'-'.date("m").'-'.date("Y");
						if(isset($product_parent['PlanDelivery'])){
							$date_default2 = humanize_mdate($product_parent['PlanDelivery']);
						}
					?>
				  <label for="epostart" class="col-sm-2 control-label">Plan Delivery</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="plandelivery" name="plandelivery" placeholder="Plan Delivery" value="<?=$date_default2?>">
				  </div>
				</div>
			</div>
			
		</form>
	  <div class="box-footer hidden">
		<button onclick="save();" href="javascript:void(0);"  class="btn btn-info pull-right">Save</button>
	  </div><!-- /.box-footer -->
	</div>

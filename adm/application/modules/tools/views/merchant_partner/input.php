<script>
	$(document).ready(function(){
		//color scheme for iCheck
		$('input[type="checkbox"].flat-blue').iCheck({
			checkboxClass: 'icheckbox_flat-blue'
		});
		$('.icheck_minimal input').iCheck({
			checkboxClass: 'icheckbox_flat-blue',
			radioClass: 'iradio_flat-blue',
		});
		$('.skin-square input').iCheck({
			checkboxClass: 'icheckbox_square-red',
			radioClass: 'iradio_square-red',
		});
		// Input, Select, Textarea validations except submit button
		$("input,select,textarea").not("[type=submit]").jqBootstrapValidation({
			preventSubmit: false,
			submitSuccess: function (form, event) {
				event.preventDefault();
				confirm_submit(event);
			},
			submitError: function (form, event, errors) {
				event.preventDefault();
				swal('failed', 'Check Your Input', "error");
			}
		});

	});
	
	function confirm_submit(e)
	{
		showProgres();
		swal({
			title: "Continue?",
			text: "Your changes will be saved",
			type: "warning",
			buttons: ["No", "Yes"],
		 }).then((value) => {
			 hideProgres();
            	if (value === false) return false;
			    if (value) {
			        submit_form(e);
			        return false;
			    }
            });
	}
	
	function submit_form(e)
	{
		showProgres();
		$.post(site_url+"tools/merchant_partner/save_data"
			,$('#'+e.target.id+'').serialize()
			,function(result) {
				if(result['error'])
				{	
					swal(result['header']||'error', result['error']||'', "error").then((value) => {
						exec_jquery(result['action']);
					});;
				}else
				{
					swal(result['header']||'success', result['success']||'', "success").then((value) => {
						window.location = site_url+'tools/merchant_partner/input/'+result['id'];
					});;
				}
				hideProgres();
			}					
			,"json"
		);
	}
	
</script>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title" id="horz-layout-colored-controls"><?=$action['description']?></h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
				<ul class="list-inline mb-0">
				<li>
				<div class="btn-group btn-group-sm">
					<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false"><i class="ft-more-vertical"></i>
					  <span class="sr-only">Toggle Dropdown</span>
					</button>
					<div class="dropdown-menu dropdown-menu-lg">
					  <a class="dropdown-item" href="<?=base_url()?>tools/merchant_partner/input">New <i class="ft-file-plus float-right"></i></a>
					</div>
				</div>
				</li>
				<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
				<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
				</ul>
				</div>
			</div>
				<div class="card-content collpase show">
					<div class="card-body">
						<section class="input-validation">
							<form  id="form_mp" autocomplete="off" novalidate>
							<div class="row">
							
							<div class="form-horizontal col-md-12">
							<input id="transnum" name="t_transnum" type="hidden" value="<?=encode($trx['MerchantPartnerCode'])?>">
							<input id="action" name="t_action" type="hidden" value="<?=($action['code'])?>">
							  <div class="form-body">
								<h4 class="form-section"><i class="la la-eye"></i> About Merchant</h4>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="MerchantPartnerCode">Merchant Partner Code</label>
									  <div class="col-md-9">
										<div class="controls">
											<input <?=($action['code']==1)?'readonly':''?> maxlength="10" type="text" class="form-control border-primary" placeholder="Automatic" id="MerchantPartnerCode" name="t_MerchantPartnerCode" value="<?=$trx['MerchantPartnerCode']?>" >
										</div>
									  </div>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="name">Merchant Name</label>
									  <div class="col-md-9">
										<div class="controls">
											<input type="text" maxlength="50" class="form-control border-primary" placeholder="Name" id="name" name="t_name" value="<?=$trx['Name']?>"  required data-validation-required-message="This field is required">
										</div>
									  </div>
									</div>
								  </div>
								</div>
							  </div>
							</div>
							</div>
							<div class="row">
							  <div class="col-md-6">
								<div class="form-group row">
								  <label class="col-md-3 label-control" for="icon">ICON</label>
								  <div class="col-md-9">
									<div class="controls">
										<input type="text" class="form-control border-primary" placeholder="Icon" id="icon" name="t_icon" value="<?=$trx['icon']?>">
									</div>
								  </div>
								</div>
							  </div>
							  <div class="col-md-6">
								<div class="form-group row">
								  <label class="col-md-3 label-control" for="description">Remark / Description</label>
								  <div class="col-md-9">
									<div class="controls">
										<input type="text" maxlength="200" class="form-control border-primary" placeholder="Remark / Description" id="description" name="t_description" value="<?=$trx['Description']?>">
									</div>
								  </div>
								</div>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-6">
								<div class="form-group row">
								  <label class="col-md-3 label-control" for="externalcode">External Code</label>
								  <div class="col-md-9">
									<div class="controls">
										<input type="text" maxlength="30" class="form-control border-primary" placeholder="External Code" id="externalcode" name="t_externalcode" value="<?=$trx['ExternalCode']?>">
									</div>
								  </div>
								</div>
							  </div>
							  <div class="col-md-6">
								<div class="form-group row">
								  <label class="col-md-3 label-control" for="address">is Active</label>
								  <div class="col-md-9">
									<div class="input-group">
									  <div class="d-inline-block custom-control custom-radio mr-1">
										<input type="radio" name="isActive" class="custom-control-input" <?=($trx['isActive']==1)?'checked=""':''?> id="yes" value="1">
										<label class="custom-control-label" for="yes">Yes</label>
									  </div>
									  <div class="d-inline-block custom-control custom-radio">
										<input type="radio" name="isActive" class="custom-control-input" <?=($trx['isActive']==0)?'checked=""':''?>  id="no" value="0">
										<label class="custom-control-label" for="no">No</label>
									  </div>
									</div>
								  </div>
								</div>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-6">
								<div class="form-group row">
								  <label class="col-md-3 label-control" for="description">Address</label>
								  <div class="col-md-9">
									<div class="controls">
										<textarea rows="4" class="form-control border-primary" placeholder="" maxlength="250" id="address" name="t_address"><?=$trx['Address']?></textarea>
									</div>
								  </div>
								</div>
							  </div>
							</div>
								<div class="form-actions right">
									<button type="submit" class="btn btn-primary loading-button">
									  <i class="la la-check-square-o"></i> Save
									</button>
								</div>
							</form>
						</section>
					</div>
				</div>
		</div>
	</div>
</div>
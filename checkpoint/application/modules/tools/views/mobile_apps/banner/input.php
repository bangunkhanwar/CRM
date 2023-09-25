<script>
$(document).ready(function(){
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
				submit_form_banner(e);
				return false;
			}
		});
}

function submit_form_banner(e)
{
	showProgres();
	$.post(site_url+"tools/mobile_apps/save_data"
		,$('#'+e.target.id+'').serialize()
		,function(result) {
			if(result['error'])
			{	
				swal(result['header']||'error', result['error']||'', "error");
			}else
			{
				swal(result['header']||'success', result['success']||'', "success").then((value) => {
					window.location = site_url+'tools/mobile_apps/banner_input/'+result['id'];
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
					<a  class="btn btn-lg btn-icon btn-light mr-1" href="<?=base_url()?>tools/mobile_apps/banner"><i class="ft-arrow-left float-left"></i>&nbsp;Back</a>
				</li>
				<li>
					<a  class="btn btn-lg btn-icon btn-light mr-1" href="<?=base_url()?>tools/mobile_apps/banner_input"><i class="ft-plus-square float-left"></i>&nbsp;New</a>
				</li>
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                    <div class="card-text">
						<ul class="nav nav-tabs">
						  <li class="nav-item">
							<a class="nav-link active" id="tabConfig-tab1" data-toggle="tab" aria-controls="tabConfig" href="#tabConfig" aria-expanded="true"><i class="la la-user"></i> Banner</a>
						  </li>
						</ul>
                    </div>
					
		<section class="input-validation">
					<form  id="form_banner" autocomplete="off" novalidate>
					<div class="tab-content px-1 pt-1">
					  <div role="tabpanel" class="tab-pane active" id="tabConfig" aria-expanded="true" aria-labelledby="tabConfig-tab1">
						<div class="row" >
							<div class="form-horizontal col-md-12">
							<input id="bannercode" name="t_bannercode" type="hidden" value="<?=encode($data['idBanner'])?>">
							<input id="action" name="t_action" type="hidden" value="<?=($action['code'])?>">
							  <div class="form-body"> 
							<h4 class="form-section"><i class="la la-eye"></i> Modify Data</h4>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="username">Title</label>
									  <div class="col-md-9">
										<div class="controls">
											<input type="text" class="form-control border-primary" placeholder="Banner / Promo Title" id="title" name="t_title" value="<?=$data['Title']?>" required  data-validation-required-message="This field is required">
										</div>
									  </div>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="fullname">Image Path</label>
									  <div class="col-md-9">
										<div class="input-group">
											<input type="text" id="image_path" class="form-control" placeholder="Select Image Path ..." name="t_image_path" onkeydown="if(event.keyCode == 13) search_image_path();" value="<?=$data['ImagePath']?>">
											<div class="input-group-append">
												<button type="button" class="btn btn-primary loading-button " onClick="search_image_path()"><i class="la la-search"></i></button>
											</div>
										</div> 
									  </div>
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="link">Link</label>
									  <div class="col-md-9">
										<input type="text"class="form-control border-primary" placeholder="Link Address" id="link" name="t_link" value="<?=$data['Link']?>">
									  </div>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="fullname">File Name</label>
									  <div class="col-md-9">
										<div class="input-group">
											<input type="text" id="file_name" class="form-control" placeholder="Select File Name ..." name="t_file_name" onkeydown="if(event.keyCode == 13) select_file_name();" value="<?=$data['FileName']?>">
											<div class="input-group-append">
												<button type="button" class="btn btn-primary loading-button " onClick="select_file_name()"><i class="la la-search"></i></button>
											</div>
										</div> 
									  </div>
									</div>
								  </div>
								</div>								
								<h4 class="form-section"><i class="ft-cpu"></i> System Configuration </h4>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-md-3 label-control" for="address">is Active</label>
									  <div class="col-md-9">
										<div class="input-group">
										  <div class="d-inline-block custom-control custom-radio mr-1">
											<input type="radio" name="isActive" class="custom-control-input" <?=($data['isActive']==1)?'checked=""':''?> id="yes" value="1">
											<label class="custom-control-label" for="yes">Yes</label>
										  </div>
										  <div class="d-inline-block custom-control custom-radio">
											<input type="radio" name="isActive" class="custom-control-input" <?=($data['isActive']==0)?'checked=""':''?>  id="no" value="0">
											<label class="custom-control-label" for="no">No</label>
										  </div>
										</div>
									  </div>
									</div>
								  </div>
								</div>
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
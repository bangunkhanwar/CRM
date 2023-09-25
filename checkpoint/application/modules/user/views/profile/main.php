<script>
$(document).ready(function(){
	$("input,select,textarea").not("[type=submit]").jqBootstrapValidation({
		preventSubmit: false,
		submitSuccess: function (form, event) {
			event.preventDefault();
			confirm_submit(event);
		},
		submitError: function (form, event, errors) {
			event.preventDefault();
			$('#tabConfig-tab1').trigger('click');
			swal('failed', 'Check Your Input', "error");
		}
    });
	$('#btn_cancel_profile').click(function() {
		alert('');
    location.reload();
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
			        submit_user_profile(e);
			        return false;
			    }
            });
	}
	
	function submit_user_profile(e)
	{
		showProgres();
		$.post(site_url+"user/save_profile"
			,$('#'+e.target.id+'').serialize()
			,function(result) {
				if(result['error'])
				{	
					swal(result['header']||'error', result['error']||'', "error");
				}else
				{
					swal(result['header']||'success', result['success']||'', "success").then((value) => {
						window.location = site_url+'/user/profile';
					});;
				}
				hideProgres();
			}					
			,"json"
		);
	}
	
</script>
<div class="row" >
	<div class="form-horizontal col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="card-content">
				<form class="form" id="form_profile">
					<input id="oprcode" name="t_oprcode" type="hidden" value="<?=encode($user_data['idMsOperator'])?>">
					<div class="form-body">
						<h4 class="form-section"><i class="la la-eye"></i> About User</h4>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-md-3 label-control" for="username">User Name</label>
							  <div class="col-md-9">
								<div class="controls">
									<input readonly type="text" class="form-control border-primary" placeholder="User Name" id="username" name="t_username" value="<?=$user_data['LoginName']?>" required  data-validation-required-message="This field is required">
								</div>
							  </div>
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-md-3 label-control" for="fullname">Full Name</label>
							  <div class="col-md-9">
								<div class="controls">
									<input type="text" class="form-control border-primary" placeholder="Full Name" id="fullname" name="t_fullname" value="<?=$user_data['FullName']?>"  required data-validation-required-message="This field is required">
								</div>
							  </div>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-md-3 label-control" for="password">Password</label>
							  <div class="col-md-9">
								<input type="password"class="form-control border-primary" placeholder="input password to change" id="password" name="t_password" value="">
							  </div>
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-md-3 label-control" for="fullname">NIK </label>
							  <div class="col-md-9">
								<div class="controls">
									<input type="text" class="form-control border-primary" placeholder="NIK" id="nik" name="t_nik" value="<?=$user_data['Nik']?>" >
								</div>
							  </div>
							</div>
						  </div>
						</div>
						<h4 class="form-section"><i class="ft-mail"></i> Contact Info &amp; Address</h4>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-md-3 label-control" for="email">Email</label>
							  <div class="col-md-9">
								<div class="controls">
									<input class="form-control border-primary" type="email" placeholder="email" id="email" name="t_email" value="<?=$user_data['Email']?>" required data-validation-required-message="This field is required">
								</div>
							  </div>
							</div>
							<div class="form-group row">
							  <label class="col-md-3 label-control" for="phone">Phone Number</label>
							  <div class="col-md-9">
								<input class="form-control border-primary" type="phone" placeholder="0822..." id="phone" name="t_phone" value="<?=$user_data['PhoneNumber']?>">
							  </div>
							</div>
							<div class="form-group row">
							  <label class="col-md-3 label-control" for="birthdate">Birh Date</label>
							  <div class="col-md-9">
								<div class="controls">
								<input class="form-control border-primary" type="date" placeholder="Birh Date" id="birthdate" name="t_birthdate" value="<?=$user_data['BirthDate']?>" max="9999-12-31">
								</div>
							  </div>
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-md-3 label-control" for="address">Address</label>
							  <div class="col-md-9">
								<textarea rows="6" class="form-control border-primary" placeholder="Address" id="address" name="t_address"><?=$user_data['Address']?></textarea>
							  </div>
							</div>
						  </div>
						</div>

						<h4 class="form-section"><i class="ft-cpu"></i> System Configuration </h4>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-md-3 label-control" for="birthdate">Expiration Date</label>
							  <div class="col-md-9">
								<div class="controls">
									<input readonly class="form-control border-primary" type="date" placeholder="Exp Date" id="expiredate" name="t_expiredate" value="<?=$user_data['ExpiryDate']?>" max="9999-12-31" required  data-validation-required-message="This field is required">
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
									<input disabled type="radio" name="isActive" class="custom-control-input" <?=($user_data['isActive']==1)?'checked=""':''?> id="yes" value="1">
									<label class="custom-control-label" for="yes">Yes</label>
								  </div>
								  <div class="d-inline-block custom-control custom-radio">
									<input disabled type="radio" name="isActive" class="custom-control-input" <?=($user_data['isActive']==0)?'checked=""':''?>  id="no" value="0">
									<label class="custom-control-label" for="no">No</label>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					</div><div class="form-actions right">
                        <button type="button" class="btn btn-warning mr-1 hidden">
                          <i class="ft-x" id="btn_cancel_profile"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
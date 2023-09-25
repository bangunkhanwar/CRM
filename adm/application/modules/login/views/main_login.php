<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Login Page - <?=get_myconf('app_name')?>
  </title>
  <link rel="apple-touch-icon" href="<?= base_url();?>app-assets/images/ico/apple-icon-120.png">
  <!-- <link rel="shortcut icon" type="image/x-icon" href="</?= base_url();?>app-assets/images/ico/favicon.ico"> -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/forms/icheck/custom.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/pages/login-register.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="<?= base_url();?>app-assets/images/logo/logo-temp.png" class="img-fluid mx-auto d-block pt-2" width="250" alt="branding logo">
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Login to <?=get_myconf('app_name')?></span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
					  <fieldset>
						<div id="error-res">
						</div>
					  </fieldset>
						<form class="form-horizontal form-simple" id="form_login" >
						  <fieldset class="form-group position-relative has-icon-left mb-0">
							<input type="text" class="form-control form-control-lg input-lg" name="t_username" id="t_username" placeholder="Your Username"
							required>
							<div class="form-control-position">
							  <i class="ft-user"></i>
							</div>
						  </fieldset>
						  <fieldset class="form-group position-relative has-icon-left">
							<input type="password" class="form-control form-control-lg input-lg"  name="t_password" id="t_password"
							placeholder="Enter Password" required>
							<div class="form-control-position">
							  <i class="la la-key"></i>
							</div>
						  </fieldset>
						  <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
						</form>
                  </div>
                </div>
                <div class="card-footer" style="display:none">
                  <div class="">
                    <p class="float-sm-left text-center m-0"><a  href="javascript:void" onclick="recover()" class="card-link">Lupa password?</a></p>
                    <p class="float-sm-right text-center m-0">Belum punya akun? <a href="javascript:void" onclick="register()" class="card-link">Daftar</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
  <script src="<?= base_url();?>app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="<?= base_url();?>app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="<?= base_url();?>app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="<?= base_url();?>app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="<?= base_url();?>app-assets/js/core/app.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="<?= base_url();?>app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
  
<script>
	var site_url = "<?= site_url()?>";
</script>
<script type='text/javascript'>
	$(document).ready(function(){
		  $('#form_login').submit(function (e) {
		    e.preventDefault();
			login(e);
		  });
		  $('#t_username').focus();
	});
	
	function login(e)
	{
		var err = '';
		var random_id = guidGenerator();
		$.post(site_url+"login/signin"
			,{t_username: $('#t_username').val()
				,t_password: $('#t_password').val()
				}
			,function(result) {
				if (result.error)
				{
					err = '<div id="'+random_id+'" class="result-danger alert round bg-danger alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">'
                        +'<span class="alert-icon"><i class="la la-info-circle"></i></span>'
                        +'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                        +'<span aria-hidden="true">×</span>'
                        +'</button>'
                        +'<strong>'+result.error+'</strong>'
						+'</div>';
					$('#error-res').append(err);
					setTimeout(function(){ $('#'+random_id).remove() }, 3000);
				}else
				{
					window.location = site_url+result['url'];
				}
			}					
			,"json"
		);
	}
	
	function register()
	{
		window.location = site_url+'login/register';
	}
	
	function recover()
	{
		window.location = site_url+'login/recover';
	}
	
	function guidGenerator() {
		var S4 = function() {
		   return (((1+Math.random())*0x10000)|0).toString(16).substring(1);
		};
		return (S4()+S4()+"-"+S4()+"-"+S4()+"-"+S4()+"-"+S4()+S4()+S4());
	}
</script>
</body>
</html>
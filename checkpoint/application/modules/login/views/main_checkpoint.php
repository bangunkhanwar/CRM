<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Check Points Page - <?=get_myconf('app_name')?>
  </title>
  <link rel="apple-touch-icon" href="<?= base_url();?>app-assets/images/ico/apple-icon-120.png">
  <!-- <link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>app-assets/images/ico/favicon.ico"> -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/vendors.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/core/menu/menu-types/horizontal-menu.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/pages/login-register.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="horizontal-layout horizontal-menu 1-column   menu-expanded blank-page blank-page"
data-open="hover" data-menu="horizontal-menu" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                <div class="card-body">
                  <span class="card-title text-center">
                    <img src="<?= base_url();?>app-assets/images/logo/logo-temp.png" class="img-fluid mx-auto d-block pt-2" width="250" alt="branding logo">
                  </span>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span style="font-size:x-large;">Check Points</span>
                  </h6>
                </div>
                <div class="card-content">
                    <div class="card-body">		
						<div class="form-group row">
							<!-- <label class="col-md-3 label-control" for="member_code">Search Member</label> -->
							<div class="col-md-12">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
										<i class="la la-key"></i></span>
									</div>
									<input type="text" id="search_key" class="form-control" placeholder="Member Code / Phone / E-mail" name="t_search_key" onkeydown="if(event.keyCode == 13)select_lookup_member()" value="<?=$member_code?>"> 
									<div class="input-group-append">
										<button type="button" class="btn btn-light loading-button " onClick="select_lookup_member();"><i class="la la-search"></i></button>
									</div>
								</div> 
                                <p></p><br>
                                <div class="form-group row" id="part_points" style="display:none"> 
                                    <div class="col-md-12">
                                        <!-- <div class="card p-1 text-white bg-success bg-darken-4"> -->
                                        <div class="card mb-1 border-success border-darken-4">
                                            <div class="card-content">
                                            <div class="card-body">
                                                <div class="float-left">
                                                
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="">
                                                      <i class="la la-bookmark-o"></i></span><span>&nbsp;&nbsp;</span>
                                                    </div>
                                                      <strong><p class="form-control-static" id="member_code" >&nbsp; </p></strong>
                                                  </div>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="">
                                                      <i class="la la-user"></i></span><span>&nbsp;&nbsp;</span>
                                                    </div>
                                                      <strong><p class="form-control-static" id="full_name" >&nbsp; </p></strong>
                                                  </div>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="">
                                                      <i class="la la-mobile"></i></span><span>&nbsp;&nbsp;</span>
                                                    </div>
                                                      <strong><p class="form-control-static" id="phone_number" >&nbsp; </p></strong>
                                                  </div>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="">
                                                      <i class="la la-credit-card"></i></span><span>&nbsp;&nbsp;</span>
                                                    </div>
                                                      <strong><p class="form-control-static" id="barcode" >&nbsp; </p></strong>
                                                  </div> <br>

                                                </div>
                                                <div class="float-right">

                                                  <p class="white mb-0">
                                                      <!-- <strong><p class="form-control-static" id="total_point" style="font-size: xx-large;"> 200</p></strong> -->

                                                      <label class="card-title danger font-weight-bold" id="total_point" style="font-size: xx-large;">
                                                        <strong>Success State</strong>
                                                      </label>
                                                  </p>
                                                  <p class="card-title">points</p>

                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-2"></div>
                                  <div class="col-md-8" align="center">
                                    <a href="/crm"><i class="la la-home"></i> Back to Home</a>
                                  </div>
                                  <div class="col-md-2"></div>
                                </div>
                                
							</div>
							<div style="display:none" class="badge phone-badge-not-verified border-right-red border-left-red round badge-striped">
								<span>Not <br>Verified</span>
								<i class="la la-times-circle font-medium-2"></i>
							</div>
							<div style="display:none" class="badge phone-badge-verified border-right-success border-left-success round badge-striped">
								<span>Verified</span>
								<i class="la la-check-circle font-medium-2"></i>
							</div>
						</div>	
						

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
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/ui/jquery.sticky.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
  <script src="<?= base_url();?>app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="<?= base_url();?>app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="<?= base_url();?>app-assets/js/core/app.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script type="text/javascript" src="<?= base_url();?>app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
  <script src="<?= base_url();?>app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>

<script src="<?= base_url();?>app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
<script>
$(document).ready(function () {
	toggle_card_input(0);
	<?php 
	if($member_code!='')
	{
	?>
		select_lookup_member();
	<?php
	}
	?>
}); 

function select_lookup_member()
{
	member_code = $('#search_key').val();
	toggle_card_input(0);
	if(member_code=='')
	{
		swal('Failed', 'Please input valid Key', "error");
		$('#search_key').focus();
		return false;
	}
	$.post("<?= base_url();?>login/lookup_member/"
		,{t_search_key:member_code}
		,function(result) {
			if(result['error'])
			{
				swal(result['header']||'error', result['error']||'', "error");
			}else
			{
				toggle_card_input(1);
				// swal(result['header']||'success', result['success']||'', "success").then((value) => {
				// });;
				$('#member_code').text(result['member']['MemberCode']);
				$('#full_name').text(result['member']['Name']);
				$('#phone_number').text(result['member']['Handpone']);
				$('#barcode').text(result['member']['Barcode']);
				$('#total_point').text(result['points']['TotalPoints']);
			}
		}					
		,"json"
	);
}

function toggle_card_input(type=0)
{
	// 1 = show
	// 0 = hide
	
	if(type==1)
	{
		$('#part_points').show();
	}else{
		$('#part_points').hide();
		$('#member_code').text('');
		$('#full_name').text('');
		$('#phone_number').text('');
		$('#barcode').text('');
		$('#total_point').text('');
	}
}


</script>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="CRM - Customer Relationship Management elcorps menyediakan data member yang terpusat untuk para member elku, elku merupakan aplikasi membership elcorps yang dapat di download secara gratis di marketplace (google playstore) ataupun (ios app store)">
  <meta name="keywords" content="CRM, elku, elcorps, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="agussuwerdo">
  <title><?=get_myconf('app_name')?></title>
  <link rel="apple-touch-icon" href="<?= base_url();?>app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/ui/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/extensions/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/ladda/ladda-themeless.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/forms/icheck/custom.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/ui/prism.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/forms/tags/tagging.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/forms/toggle/switchery.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/forms/selects/select2.min.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/core/menu/menu-types/horizontal-menu.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/fonts/simple-line-icons/style.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/pages/chat-application.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/plugins/ui/jqueryui.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/plugins/forms/checkboxes-radios.css">
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/plugins/forms/validation/form-validation.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/plugins/forms/switch.css">
  <!-- END Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/pages/timeline.css">
  
  
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/style.css">
  <!-- END Custom CSS-->
  
  
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/css/core/colors/palette-switch.css">
  
  
  <!-- BEGIN VENDOR JS-->
  <script src="<?= base_url();?>app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/ui/jquery.sticky.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/js/core/libraries/jquery_ui/jquery-ui.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/extensions/sweetalert.min.js"></script>
    <!-- Ladda -->
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/ladda/spin.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/ladda/ladda.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/ladda/ladda.jquery.min.js"></script>
   <!-- Input Mask-->
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/jasny/jasny-bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/forms/toggle/switchery.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/js/scripts/forms/checkbox-radio.js"></script>
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/forms/tags/tagging.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/ui/prism.min.js"></script>
  <!-- BEGIN PAGE LEVEL JS-->
  <script type="text/javascript" src="<?= base_url();?>app-assets/js/scripts/forms/tags/tagging.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/js/scripts/forms/validation/form-validation.js"></script>
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
  <!-- BEGIN PAGE LEVEL JS-->
  <script type="text/javascript" src="<?= base_url();?>app-assets/js/scripts/forms/select/form-select2.js"></script>
  <!-- END PAGE VENDOR JS-->
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/charts/chart.min.js"></script>
  <!-- PIE CHART JS-->
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/charts/d3.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/vendors/js/charts/c3.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/js/scripts/charts/c3/bar-pie/bar.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/js/scripts/charts/c3/bar-pie/column.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/js/scripts/charts/c3/bar-pie/donut.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/js/scripts/charts/c3/bar-pie/pie.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/js/scripts/charts/c3/bar-pie/stacked-bar.js"></script>
  <script type="text/javascript" src="<?= base_url();?>app-assets/js/scripts/charts/c3/bar-pie/stacked-column.js"></script>
  <script type="text/javascript" src="<?= base_url();?>assets/js/upclick.js"></script>
  
  
  <script src="<?= base_url();?>app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js"
  type="text/javascript"></script>
  <script src="<?= base_url();?>app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js"
  type="text/javascript"></script>
  <script src="<?= base_url();?>app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>

  <script src="<?= base_url();?>app-assets/js/scripts/forms/switch.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
  
  <!-- EMODAL -->
  <script src="<?= base_url();?>app-assets/vendors/js/modal/eModal/dist/eModal.min.js"></script>
  
  <script src="<?= base_url();?>app-assets/js/scripts/pages/chat-application.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</head>
<body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
  <!-- fixed-top-->
  <!-- navbar -->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center" data-nav="brand-center">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="<?= base_url();?>membership/registration">
              <img class="brand-logo" alt="modern admin logo" src="<?= base_url();?>app-assets/images/logo/logo-temp.png" style="width: 90px;">
              <h3 class="brand-text"></h3>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <!-- <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li> -->
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
          </ul>
          
        </div>
      </div>
    </div>
  </nav>

  <!-- navbar -->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title"><a id="label_title"></a></h3>
			<div id="label_breadcrumb"></div>
        </div>
		<div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Option</button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
			<a class="dropdown-item" onclick="location.reload()">Reload</a></div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Content -->
        </br> <!-- konten registrasi disini -->
        <div id="contentRegistration"> </div>  
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="<?= base_url();?>app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="<?= base_url();?>app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="<?= base_url();?>app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script type="text/javascript" src="<?= base_url();?>app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
  <script src="<?= base_url();?>app-assets/js/scripts/ui/jquery-ui/navigations.js" type="text/javascript"></script>
</body>
<!--<div id="action_script">
</div>-->
</html>
<script>
  $(document).ready(function () {
    loadDetail('');
  });

  function loadDetail(custcode) {
        // var form_data = $('#formHeader').serialize();
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>membership/registration/loadDetail/"+custcode,
            // data: form_data,
            dataType: 'html',
            success: function(response) {
                $('#contentRegistration').html(response);
            }
        });
    }
</script>
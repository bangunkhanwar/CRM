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
  <?=$this->load->view('js')?>
</head>
<body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover"
data-menu="horizontal-menu" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="<?=base_url().$this->session->userdata('default_url')?>">
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
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700"><?=$this->session->userdata('FullName')?></span>
                </span>
                <span class="avatar avatar-online">
                  <img src="<?= base_url();?>app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="<?=base_url()?>user/profile"><i class="ft-user"></i> Profile</a>
                <a class="dropdown-item" href="<?=base_url()?>user/notifications"><i class="ft-bell"></i> Notifications</a>
                <a class="dropdown-item" href="<?=base_url()?>user/chats"><i class="ft-message-square"></i> Chats</a>
                <div class="dropdown-divider"></div>
				<a class="dropdown-item" onclick="logout()"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
            <li class="dropdown dropdown-notification nav-item notif-list">
              <a class="nav-link nav-link-label" href="javascript:void" data-toggle="dropdown"><i class="ficon ft-bell"></i>
			  <span class="badge badge-pill badge-danger badge-up badge-glow" id="notif_count">0</span>
              </a>
			  <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-danger float-right m-0" id="notif_count_header">0</span>
                  </li>
                  <li class="scrollable-container media-list w-100 ps">
					<!-- Notif LIST -->
					<div id="notif_list">
					</div>
					<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                  <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="<?=base_url()?>user/notifications">Read all notifications</a></li>
                </ul>
            </li>
            <li class="dropdown dropdown-notification nav-item chat-list">
              <a class="nav-link nav-link-label" href="javascript:void" data-toggle="dropdown"><i class="ficon ft-mail"></i>
			  <span class="badge badge-pill badge-warning badge-up badge-glow" id="msg_count">0</span>
			  </a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Messages</span>
                  </h6>
                  <span class="notification-tag badge badge-default badge-warning float-right m-0"  id="msg_count_header">No New message</span>
                </li>
                <li class="scrollable-container media-list w-100">
					<!--List Messages-->
					<div id="msg_list">
					</div>
                </li>
                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="<?=base_url()?>user/chats">Read all messages</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
	<div class="navbar-container main-menu-content" data-menu="menu-container">
	  <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
		<?=$this->menu->generate()?>
	  </ul>
	</div>
  </div>
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
		<?=$this->load->view($content)?>  
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?=$this->load->view('tpl_footer')?>
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
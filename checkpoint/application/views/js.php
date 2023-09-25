<script>
var site_url = "<?= site_url() ?>";
var uri_string = "<?= preg_replace('/[^a-z0-9]/i', '_', (uri_string())) ?>";
    $(window).on('load',function(){
		setTimeout(function () {
			if(uri_string!='')
			{
				$('#'+uri_string).addClass('active');
				$('#'+uri_string).addClass('open');
				$('#'+uri_string).parents('li').addClass('active');
				$('#'+uri_string).parents('li').addClass('open');
			}
			<?php 
			if($this->bc->get_title())
			{ ?>
				set_title('<?=$this->bc->get_title()?>');
			<?php 					
			}else
			{
			?>
				get_menu_description();
			<?php	
			}
			?>
			set_breadcrumb('<?=$this->bc->render()?>');
		}, 100);

		if(localStorageSupport())
		{
			var active_menu = localStorage.getItem("active_menu");
		}
		get_list_notification();
		get_list_message();
	});
	
	function get_list_notification()
	{
		$.post(site_url+"main/get_notification_list"
			,{}
			,function(result) {
				get_count_notification();
				$("#notif_list").html(result);
			}					
			,"html"
		);
	}
	
	function get_count_notification()
	{
		$.post(site_url+"main/get_notification_count"
			,{}
			,function(result) {
				$('#notif_count').text(result['notif_count']);
				$('#notif_count_header').html(result['notif_count']+" Unread Notifications");
			}					
			,"json"
		);
	}
	
	function get_list_message()
	{
		$.post(site_url+"main/get_message_list"
			,{}
			,function(result) {
				get_count_message();
				$("#msg_list").html(result);
			}					
			,"html"
		);
	}
	
	function get_count_message()
	{
		$.post(site_url+"main/get_message_count"
			,{}
			,function(result) {
				$('#msg_count').text(result['msg_count']);
				$('#msg_count_header').html(result['msg_count']+" Unread Messages");
			}					
			,"json"
		);
	}
	
    $(document).ready(function (){
		// doc ready
    });
	
	$(document).on('click', '.app-content', function () {
		// to hide menu on click body (mobile version)
		$.app.menu.hide();
	});
	
	$(window).bind('beforeunload', function(){
		// localStorage.setItem("active_menu",'NULL');
	});
	
	function get_menu_description()
	{
		$.post(site_url+"main/get_menu_description"
			,{uri_string:uri_string}
			,function(result) {
				set_title(result['Description']);
			}					
			,"json"
		);
	}
	
	function set_active_menu(id)
	{
		if(localStorageSupport())
		{
			localStorage.setItem("active_menu",id);
		}
	}
	// check if browser support HTML5 local storage
	function localStorageSupport() {
		return (('localStorage' in window) && window['localStorage'] !== null)
	}
	
	function append_menu(url)
	{
		//cek div , jika udah ada id tsb maka focus, 
		//jika belum ada maka append
		showProgres();
		$.post(site_url+url
			,{}
			,function(result) {
				$(".content-body").html(result);
				hideProgres();
			}					
			,"html"
		);
	}
	
	function showProgres()
	{
		<?php if(get_myconf('debug')=='0'){ ?>
			var l = $( '.loading-button' ).ladda();
			l.ladda( 'start' );
		<?php } ?>
	}
	function hideProgres()
	{
		<?php if(get_myconf('debug')=='0'){ ?>
			var l = $( '.loading-button' ).ladda();
			l.ladda( 'stop' );
		<?php } ?>
	}
	
	function logout()
	{
		window.location = site_url+'/login/signout';
	}
	
	function loadURL(url){
		window.location = site_url+url;
	}
	
	function set_title(txt)
	{
		 $('#label_title').text(txt);
	}
	
	function set_breadcrumb(txt)
	{
		 $('#label_breadcrumb').html(txt);
	}
	
	function push_notification()
	{
		$('.notif-list').addClass('show');
		setTimeout(function () {
			$('.notif-list').removeClass('show');
		}, 3000);
	}
	
	function push_message()
	{
		$('.chat-list').addClass('show');
		setTimeout(function () {
			$('.chat-list').removeClass('show');
		}, 3000);
	}
	
    // Format icon
    function iconFormat(icon) {
        var originalOption = icon.element;
        if (!icon.id) { return icon.text; }
        var $icon = "<i class='la la-" + $(icon.element).data('icon') + "'></i>" + icon.text;

        return $icon;
    }
	
	
   function modalview(uri,judul)
   {
      var options = {
           url: site_url +uri,
           title:judul,
           size: eModal.size.lg,
           // subtitle: 'smaller text header',
           buttons: [
               // {text: 'INFO', style: 'info', close: true, click: eventA},
               // {text: 'DANGER', style: 'danger', close: true, click: eventB},
               // {text: 'WARNING', style: 'warning', close: true, click: eventC}
           ]
      };

	   function eventA()
	   {
		  pesan.info('informasi');
	   }
	   function eventB()
	   {
		  pesan.error('error');
	   }
	   function eventC()
	   {
		  pesan.warning('Warning');
	   }
      // modal
      eModal.ajax(options);
   }
   
	// function exec_jquery(script)
	// {
		// $('#action_script').html(script);
	// }
	
	function number_format(amount, decimalCount = 0, decimal = ".", thousands = ",")
	{
	  try {
		decimalCount = Math.abs(decimalCount);
		decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

		const negativeSign = amount < 0 ? "-" : "";

		let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
		let j = (i.length > 3) ? i.length % 3 : 0;

		return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
	  } catch (e) {
		console.log(e)
	  }
	}
	
	function quotedStr(str)
	{
		return '\''+str+'\'';
	}
</script>
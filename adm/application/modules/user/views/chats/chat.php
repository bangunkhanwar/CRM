<script>
	$(document).ready(function () {
		load_chat_list();
	});
	
	function load_chat_list()
	{
		showProgres();
		$.post(site_url+'user/chat_list'
			,{opr_id:"<?=$operator['idMsOperator']?>"}
			,function(result) {
				$('#chat_list').html(result);
				hideProgres();   
				$('#scrollable_list').animate({scrollTop: $('#scrollable_list').prop("scrollHeight")}, 0);
			}			
			,"html"
		);
	}
	
	function send_chat()
	{
		var chat_text = $('#chat_text').val();
		if(chat_text != '')
		{
			showProgres();
			$.post(site_url+'user/send_chat'
				,{opr_id:"<?=$operator['idMsOperator']?>"
				,message:chat_text}
				,function(result) {
					$('#chat_text').val('');
					load_chat_list();
					hideProgres();
				}			
				,"json"
			);
		}
	}
</script>
<div class="col-md-12">
  <div class="card" style="height: 545px;overflow-x: overlay;">
	<div class="card-header">
	  <h4 class="card-title"><?=$operator['FullName']?></h4>
  <p class="card-subtitle text-muted pt-1 hidden">
	<span class="font-small-3">5 hours ago</span>
  </p>
	  <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
	  <div class="heading-elements">
		<ul class="list-inline mb-0">
		  <li><a onclick="load_chat_list()"><i class="ft-rotate-cw"></i></a></li>
		</ul>
	  </div>
	</div>
	<div class="card-content collapse show">
		<div id="chat_list">
		</div>
	<div class="card-body" style="position: absolute;bottom: 0px;width: 100%;">
	  <fieldset class="form-group position-relative has-icon-left mb-0">
		<div class="input-group">
			<input type="text" id="chat_text" class="form-control" placeholder="Enter your message ..." name="t_chat_text" onkeydown="if(event.keyCode == 13) send_chat();">
			<div class="input-group-append">
				<button type="button" class="btn btn-primary loading-button " onClick="send_chat()"> <i class="la la-paper-plane"></i></button>
			</div>
			<div class="form-control-position">
			   <i class="la la-pencil-square"> </i>
			</div>
		</div> 
	</div>
	</div>
  </div>
</div>
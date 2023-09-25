<script>
	$(document).ready(function () {
		load_opr_list();
	});
	
	function load_opr_list()
	{
		showProgres();
		$.post(site_url+'user/chats_get_list_opr'
			,{t_search_key:$('#search_key').val()}
			,function(result) {
				$('#resultOpr').html(result);
				hideProgres();
				<?php if(decode($chat_id)!=''){?>
					$("#list_opr_"+<?=decode($chat_id)?>+"").trigger('click');
				<?php }?>
			}			
			,"html"
		);
	}
	
	function select_operator(opr_id)
	{
		showProgres();
		$.post(site_url+'user/chat_view'
			,{opr_id:opr_id}
			,function(result) {
				$('#chat_content').html(result);
				$(".list-group-item").removeClass("active");
				$("#list_opr_"+opr_id+"").addClass("active");
				$("#unread_count_"+opr_id+"").text("");
				hideProgres();
			}			
			,"html"
		);
	}
</script>
<div class="content-detached content-right">
	<div class="content-body">
	  <section class="row">
		<div class="col-12">
				<div id="chat_content">
				</div>
		  </div>
		</div>
	  </section>
	</div>
  </div>
<div class="sidebar-detached sidebar-left">
        <div class="sidebar">
          <div class="bug-list-sidebar-content">
            <!-- Predefined Views -->
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">List User</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                <div class="heading-elements hidden">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              <!-- bug-list search -->
              <div class="card-content">
                <div class="card-body border-top-blue-grey border-top-lighten-5">
                  <div class="bug-list-search">
                    <div class="bug-list-search-content">
                        <div class="position-relative">
						<div class="input-group">
							<input type="text" id="search_key" class="form-control" placeholder="Search Recipient ..." name="t_search_key" onkeydown="if(event.keyCode == 13) load_opr_list(1);">
							<div class="input-group-append">
								<button type="button" class="btn btn-primary loading-button " onClick="load_opr_list()"><i class="la la-search"></i></button>
							</div>
						</div> 
                        </div>
                    </div>
                  </div>
                </div>
                <!-- /bug-list search -->
                <!-- bug-list view -->
                <div class="card-body ">
				<div id="resultOpr">
					<div class="list-group" >
					</div>
				</div>
                </div>
              </div>
            </div>
            <!--/ Predefined Views -->
            <!--/ QA Team -->
          </div>
        </div>
      </div>
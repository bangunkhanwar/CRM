<script src="<?= base_url();?>app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
<script>
$(document).ready(function () {
	check_token();
	// onShow event
	$('#show-tooltip').tooltip({
		title: 'Tooltip Show Event',
		trigger: 'click',
		placement: 'right'
		}).on('show.bs.tooltip', function() {
			alert('Show event fired.');
	});
}); 

function select_lookup_member(hp)
{
	if(hp=='')
	{
		swal('Failed', 'Please enter phone number', "error");
		return false;
	}
	showProgres();
	$.post(site_url+"membership/activation/select_member/"+hp
		,{}
		,function(result) {
			$('#btn_validate_otp').hide();
			$('#input_validate_otp').hide();
			$('#btn_send_otp').hide();
			$('.phone-badge-verified').hide();
			$('.phone-badge-not-verified').hide();
			if(result['MemberCode']=='')
			{
				swal('Failed', 'Data not found', "error");
				hideProgres();
				return;
			}
			$('#member_code').val(result['MemberCode']);
			$('#full_name').text(result['Name']);
			$('#store_member').text(result['StoreCode']+" - "+result['StoreDescription']);
			$('#email_address').val(result['Email']);
			$('#otp').val('');
			console.log(result);
			if(result['isVerifiedHandPhone']==1)
			{
				$('.phone-badge-verified').show();
				
			}else
			{
				$('.phone-badge-not-verified').show();
				$('#input_validate_otp').show();
				$('#btn_validate_otp').show();
				$('#btn_send_otp').show();
				$('#otp').focus();
			}
			hideProgres();
		}					
		,"json"
	);
}

function send_sms_otp()
{
	swal({
		title: "Send SMS OTP?",
		text: "",
		type: "warning",
		buttons: ["No", "Yes"],
	 }).then((value) => {
		 hideProgres();
			if (value === false) return false;
			if (value) {
				showProgres();
				$.post(site_url+"membership/activation/send_sms_otp/"
					,{t_phone_number:$('#phone_number').val()
					,t_member_code:$('#member_code').val()}
					,function(result) {
						if(result['error'])
						{	
							swal(result['header']||'error', result['error']||'', result['header']||'error');
						hideProgres();
						}else
						{
						hideProgres();
							button_disable('button_otp',60);
							swal(result['header']||'success', result['success']||'', result['header']||'success').then((value) => {
							});;
						}
					}					
					,"json"
				);
				return false;
			}
		});
}

function button_disable(btn_id,seconds)
{
	var original_text = $('#'+btn_id).text();
	var counter = 0;
	var countdown = seconds;
	var interval = setInterval(function() {
		$('#'+btn_id).prop( "disabled", true );
		counter++;
		countdown = countdown - 1;
		$('#'+btn_id).text('Wait... : ('+countdown+') second(s)');
		// Display 'counter' wherever you want to display it.
		if (counter == seconds) {
			// Display a login box
			$('#'+btn_id).prop( "disabled", false );
			clearInterval(interval);
			$('#'+btn_id).text(original_text);
		}
	}, 1000);
}

function submitPoll(id){
      document.getElementById("votebutton").disabled = true;
      setTimeout(function(){document.getElementById("votebutton").disabled = false;},5000);
  }
  
function activate_member()
{
	showProgres();
	$.post(site_url+"membership/activation/activate_member/"
		,{t_phone_number:$('#phone_number').val()
		,t_otp:$('#otp').val()
		,t_member_code:$('#member_code').val()}
		,function(result) {
			if(result['error'])
			{	
				swal(result['header']||'error', result['error']||'', "error");
			}else
			{
				swal(result['header']||'success', result['success']||'', "success").then((value) => {
					select_lookup_member(result['phone_number']);
				});;
			}
			hideProgres();
		}					
		,"json"
	);
}

function guidGenerator() {
	var S4 = function() {
	   return (((1+Math.random())*0x10000)|0).toString(16).substring(1);
	};
	return (S4()+S4()+"-"+S4()+"-"+S4()+"-"+S4()+"-"+S4()+S4()+S4());
}

function check_token()
{
	var err = '';
	var random_id = guidGenerator();
	var response = 'SISA TOKEN 0';
	$.post(site_url+"membership/activation/check_token"
		,{}
		,function(result) {
			response = 'Kuota SMS telah habis, TOKEN : '+result["token"];
			err = '<div data-toggle="tooltip" data-placement="top" title data-original-title="SMS Tidak bisa terkirim jika Token sudah habis atau tanggal sudah melewati Expiration Date" id="'+random_id+'" class="result-danger alert round bg-danger alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">'
				+'<span class="alert-icon" ><i data-toggle="tooltip" data-placement="top" title="SMS Tidak bisa terkirim jika Token sudah habis atau tanggal sudah melewati Expiration Date" class="la la-info-circle"></i></span>'
				+'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
				+'<span aria-hidden="true">×</span>'
				+'</button>'
				+'<strong>'+response+'</strong>'
				+'</div>';
			if(result["token"]<10)
			{
				$('#error-res').append(err);
			}
			// setTimeout(function(){ $('#'+random_id).remove() }, 3000);
			// $("#check_token").css("display", "block");
			// $('#c_token').text(result["token"]);
			// $('#c_type').text(result["type"]);
			// $('#c_expiry').text(result["date-expiry"]);
		}		
		,"json"
	);
}
</script>
<div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-icons"><?=$title?></h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">	
					<div class="row">
						<div id="error-res">
						</div>
					</div>
					<div class="form-group row">
						  <label class="col-md-3 label-control" for="phone_number">Phone Number</label>
						  <div class="col-md-5">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
									<i class="la la-mobile"></i></span>
								</div>
								<input style="display:none" type="text" id="member_code" class="form-control" name="t_member_code">
								<input type="text" id="phone_number" class="form-control" placeholder="Search key ..." name="t_phone_number" onkeydown="if(event.keyCode == 13)select_lookup_member($('#phone_number').val())">
								<div class="input-group-append">
									<button type="button" class="btn btn-primary loading-button " onClick="select_lookup_member($('#phone_number').val());"><i class="la la-search"></i></button>
								</div>
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
					<div class="form-group row">
					  <label class="col-md-3 label-control" for="email_address">Full Name</label>
					  <div class="col-md-5">
					  <label class="label-control" id="full_name" name="t_full_name" for=""></label>
						<div class="input-group hidden">
							<div class="input-group-prepend">
								<span class="input-group-text">
								<i class="la la-user"></i></span>
							</div>
							<input type="text"class="form-control" placeholder="Full Name" > 
						</div>
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-md-3 label-control" for="email_address">Store</label>
					  <div class="col-md-5">
					  <label class="label-control" id="store_member" name="t_store_member" for=""></label>
					  </div>
					</div>
					<div class="form-group row" id="btn_send_otp" style="display:none">
					  <label class="col-md-3 label-control" for="email_address"></label>
					  <div class="col-md-5">
					  <label class="label-control" id="req_otp" name="t_req_otp" for=""></label>
						<div class="input-group ">
							<div class="input-group-prepend">
							</div>
							<div  class="input-group-append">
								<button id="button_otp" type="button" class="btn btn-warning  loading-button" onClick="send_sms_otp();"><i class="la la-key"></i> Request OTP  </button>
							</div>
						</div>
					  </div>
					</div>
					<div class="form-group row" id="input_validate_otp" style="display:none">
					  <label class="col-md-3 label-control" for="phone_number">OTP</label>
					  <div class="col-md-5">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
								<i class="la la-calculator"></i></span>
							</div>
							<input type="text" id="otp" class="form-control" placeholder="Input SMS OTP" name="t_otp">
						</div>
					  </div>
					</div> 
					<div class="form-group row" id="btn_validate_otp" style="display:none">
					  <label class="col-md-3 label-control" for="phone_number"></label>
					  <div class="col-md-5">
						<div class="input-group">
							<button type="button" class="btn btn-success round btn-min-width mr-1 mb-1 loading-button" onClick="activate_member()"> <i class="la la-check-circle-o"></i> Activate Member</button>
						</div>
					  </div>
					</div> 
                  </div>
                </div>
              </div>
            </div>
<script src="<?= base_url();?>app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
<script>
$(document).ready(function () {
	gen_randid();
  $('#form_single_sms').submit(function (e) {
	e.preventDefault();
	submit_sms_single(e);
  });
});

function gen_randid()
{
	var number = Math.random() // 0.9394456857981651
	number.toString(36); // '0.xtis06h6'
	var id = number.toString(36).substr(2, 9); // 'xtis06h6'
	return (id);
}

function removediv(div)
{
	$("#"+div+"").css("display", "none")
}

function submit_sms_single(e)
{
	$.post(site_url+"sms/submit_sms_single"
		,{t_sender:$('#sender').val()
		,t_msisdn_encoded:encodeURIComponent($('#msisdn').val())
		,t_msisdn:$('#msisdn').val()
		,t_message:$('#message').val()}
		,function(result) {
			var myStringArray = result;
			var arrayLength = myStringArray.length;
			if(arrayLength>0)
			{
				for (var i = 0; i < arrayLength; i++) {
					append_status(gen_randid(),myStringArray[i].code,myStringArray[i].status,myStringArray[i].message,myStringArray[i].msgid);
				}
			}else
			{
				append_status(gen_randid(),result.code,result.status,result.message,result.msgid);
			}
			
			if(result.code==1)
			{
				$('#msisdn').val('');
				$('#message').val('');
			}
		}					
		,"json"
	);
}

function append_status(id,code,status,message,msgid)
{
	var border = 'border-primary';
	if(code==0)
	{
		border = 'border-danger';
	}
	$('#status').append(''+
		'	<div class="card mb-1 '+border+' border-lighten-1" id="check_submit'+id+'"> '+
		'		<div class="card-content">'+
		'		  <div class="p-1">'+
		'			<p class="mb-0">'+
		'			  <strong>Send Message</strong>'+
		'			  <small class="text-muted float-right">'+
		'				<a onclick="removediv(\'check_submit'+id+'\')"><i class="ft-x"></i>'+
		'				</a>'+
		'			  </small>'+
		'			</p>'+
		'			<p class="mb-0">Status : '+status+'</p>'+
		'			<p class="mb-0">Response : '+message+'</p>'+
		'			<p class="mb-0">Msg ID : '+msgid+'</p>'+
		'		  </div>'+
		'		</div>'+
		' </div>');
}

function objectLength(obj) {
  var result = 0;
  for(var prop in obj) {
    if (obj.hasOwnProperty(prop)) {
    // or Object.prototype.hasOwnProperty.call(obj, prop)
      result++;
    }
  }
  return result;
}
function check_token()
{
	$.post(site_url+"sms/check_token"
		,{}
		,function(result) {
			console.log(result);
			$("#check_token").css("display", "block");
			$('#c_token').text(result["token"]);
			$('#c_type').text(result["type"]);
			$('#c_expiry').text(result["date-expiry"]);
			$('#c_status').text(result["status"]);
		}		
		,"json"
	);
}

function reset_form()
{
	$('#msisdn').val('');
	$('#message').val('');
	$('#msisdn').focus();
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
                    <div class="card-text">
                      <p>Trial SMS using <code>https://smsblast.id/</code>  <code>api</code>  </p>
                    </div>
                    <form method="post" class="form" id="form_single_sms" autocomplete="off">
                      <div class="form-body">
					  
                    <div class="form-group">
                      <div class="text-bold-600 font-medium-2">
                        Sender
                      </div>
                      <p>Default Sender  <code>elcorps</code> </p>
                      <select class="select2 form-control" id="sender" name="t_sender">
                        <optgroup label="ID SENDER">
                          <option value="elcorps">elcorps</option>
                        </optgroup>
                      </select>
                    </div>
                        <div class="form-group">
                          <label for="msisdn">Destination</label>
                          <div class="position-relative has-icon-left">
                            <input type="text" id="msisdn" class="form-control" placeholder="phone number" name="t_msisdn" >
                            <div class="form-control-position">
                              <i class="ft-user"></i>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="message">Messages</label>
                          <div class="position-relative has-icon-left">
                            <textarea id="message" rows="5" class="form-control" name="t_message" placeholder="notes"></textarea>
                            <div class="form-control-position">
                              <i class="ft-message-square"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions right">
						<div class="form-group ">
							<button type="button" class="btn btn-success btn-min-width mr-1 mb-1" onclick="check_token()">
							  <i class="ft-activity"></i> Check Token
							</button>
							<button type="button" class="btn btn-warning  btn-min-width mr-1 mb-1" onclick="reset_form()">
							  <i class="ft-x"></i> Reset Form
							</button>
							<button type="submit" class="btn btn-primary  btn-min-width mr-1 mb-1">
							  <i class="la la-check-square-o"></i> Send SMS
							</button>
						</div>
                      </div>
                    </form>
					<div class="card mb-1 border-primary border-lighten-1" id="check_token" style="display:none"> 
						<div class="card-content">
						  <div class="p-1">
							<p class="mb-0">
							  <strong>Check Token</strong>
							  <small class="text-muted float-right">
								<a onclick="$('#check_token').css('display', 'none');"><i class="ft-x"></i>
								</a>
							  </small>
							</p>
							<p class="mb-0">Token : <a id="c_token"></a></p>
							<p class="mb-0">Type : <a id="c_type"></a></p>
							<p class="mb-0">Expiry : <a id="c_expiry"></a></p>
							<p class="mb-0">Status : <a id="c_status"></a></p>
						  </div>
						</div>
					</div>
					<div id="status">
					</div>					
                  </div>
                </div>
              </div>
            </div>
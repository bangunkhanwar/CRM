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
                <div class="form-group row">
                    <label class="col-md-3 label-control" for="member_code">Trans Number</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="la la-tag"></i></span>
                            </div>
                            <input type="text" id="trx_num" class="form-control" placeholder="Insert Transaction Number" name="t_trx_num" style="text-transform:uppercase" maxlength="14" value="">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary loading-button " onClick="getVoucher()"><i class="la la-arrow-right"></i></button>
                            </div>
                        </div> 
                    </div>                    
                </div>	
                <!-- detail -->
                <div class="card-content" id="detail_booked">
                    <div class="card-body">
                        <div id="resultBookedList"></div> <br>
                        <div class="row">
                            <div class="col-10"></div>
                            <div class="col-2">
                                <button type="button" class="btn btn-success btn-block btn-glow" onClick="printvBooked()"><i class="la la-print"></i> Print Voucher&nbsp; </button>
                            </div>
                        </div>                     
                    </div>
                </div>
                         
                <!-- detail -->
            </div>	
        </div>
    </div>
</div>

<div style="display:none">
	<div id="print-content-vbooked"></div>
</div>

<script>

$(document).ready(function () {
	loadVoucherBooked();
}); 

    function loadVoucherBooked()
	{
		var id = $('#trx_num').val();            
        var trxnum = id.toUpperCase();    
        showProgres();
		$.post(site_url+'membership/voucher_booked/getVoucherBooked'
			,{trxnum : trxnum}
			,function(result) {
				$('#resultBookedList').html(result);
				hideProgres();
			}			
			,"html"
		);
	}	

    function printvBooked() {
        var trxnum = $('#trx_num').val();            
        var id = trxnum.toUpperCase(); 
        $.ajax({
            url: site_url + "membership/voucher_booked/print_doc_pdf/",
            type: 'POST',
            dataType: 'html',
            data: {
               id : id
            },
            success: function(result) {
            $('#print-content-vbooked').html(result);
                    $('#print-content-vbooked').printThis({
                        importCSS: false,
                        importStyle: false,
                        canvas: true,
                        copyTagClasses: false,    // copy classes from the html & body tag
                        loadCSS: ["<?=base_url()?>assets/css/print-this-pdf.css"],
                    });    
            }
        });
    }

    function getVoucher()
    {
        var id = $('#trx_num').val();            
        var trxnum = id.toUpperCase();            
        showProgres();
                swal({
                title: "Confirmation",
                text: "Anda yakin nomor transaksi sales yang diinput sudah benar " +trxnum+" ?",
                icon: "warning",
                buttons: ["No", "Yes"],				
            }).then((value) => {
                    hideProgres();
                    if (value === false) return false ;
                    if (value) {
                        showProgres();
                        $.post(site_url+"membership/voucher_booked/checkVoucherBooked/"
                            ,{ id : trxnum }
                            ,function(result) {
                                if(result['error'])
                                {	
                                    swal(result['header']||'error', result['error']||'', "error");
                                }else
                                {
                                    swal(result['header']||'success', result['success']||'', "success").then((value) => {
                                        // window.location = site_url+'membership/redeem/main/'+result['id'];
                                        loadVoucherBooked();
                                    });;
                                }
                                hideProgres();
                            }					
                            ,"json"
                        );
                        return false;
                    };
                });
        
    }

</script>
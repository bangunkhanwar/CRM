<script>
	$(document).ready(function() {
		$(".select2").select2();
		$('#filter').show();
		getComboStatusFilter();
		$('#back').hide();
		$('#datafilter').submit(function (e) {
			e.preventDefault();
			refreshDataTable(true);
		});
		
		var listDataTable = $('#listDataTable')
			.on('preXhr.dt', function(e, settings, data) {
				// $('.browseBtn').ladda('start');
			}).DataTable({
				"lengthMenu": [
					[10, 25, 50, -1],
					[10, 25, 50, "All"]
				],
				'ordering': true,
				'processing': true,
				'serverSide': true,
				'responsive': true,
				'serverMethod': 'post',
				'ajax': {
					'async': true,
					'url': site_url + "omnichannel/monitoring/listPage",
					'beforeSend': function(xhr) {},
					'data': function(d) {
						d.filter_date_start = $('#filter_date_start').val(),
						d.filter_date_end = $('#filter_date_end').val()
						d.status_trx_key = $('#status_trx_key').val()
					},
					'error': function(jqXhr, textStatus, errorThrown) {
						var error_message = 'internal error';
						if (jqXhr.responseJSON !== undefined) {
							error_message = jqXhr['responseJSON']['message'];
						}
						swal('error', error_message, "error");
						$('.browseBtn').ladda('stop');
					}
				},
				'dom': '<"html5buttons"B><"row"<"col-sm-5"l><"col-sm-7"f>>T<"PrintArea"tr><"row"<"col-sm-5"i><"col-sm-7"p>>',
				"columnDefs": [
					{
						"render" : function(data ,type, row){
							var	menu_list = '<a class="dropdown-item" data-toggle="modal" data-target="#modal-detail" onclick="showModalDetail('+quotedStr(row['TransNum'])+')">Lihat Detail</a>';
							if((row['TransStatus']==1)||(row['TransStatus']==2))
							{
								if(row['PaymentTypeCode'] == 3)
								{
									menu_list += '<div class="dropdown-divider"></div>';
									menu_list +='<a class="dropdown-item" data-toggle="modal" data-target="#modal-verify" onclick="showModalVerify('+quotedStr(row['TransNum'])+')">Verifikasi</a>';
								}
							}
							var	aksi_btn = 
									'<div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">'+
									'<button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i></button>'+
									'<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">'+menu_list+
									'</div>'
							return aksi_btn;
						},
						"className": 'text-right',
						"targets": 2,
						"orderable": false
					},
					{
						"render": function(data, type, row){
							return number_format(row['QuantityTot']);
						},
						"className": 'text-center',
						"targets": 3
					},
					{
						"render" : function(data ,type, row){
							return number_format(row['RetailSalesTot']);
						},
						"className": 'text-right',
						"targets": 6,
						"orderable": true
					},
					{
						"render": function(data, type, row)
						{
							return row['CustCode']+'-'+row['MemberName'];
						},
						"targets":8,
						"orderable": true
					},
					{
						"targets": [0,7],
						"visible": false
					},
					{
						"render" : function(data ,type, row){
							var status_label = '<span class="badge badge-default badge-lg" style="background-color: '+row['StatusColor']+';">'+row['StatusDescription']+'</span>';
							return status_label;
						},
						"className": 'text-right',
						"targets": 10,
						"orderable": true
					},
					{
						"render" : function(data ,type, row){
							var payment_type_label = '';
							if(row['PaymentTypeCode'] == 1)
							payment_type_label = 'Midtrans';
							if(row['PaymentTypeCode'] == 2)
							payment_type_label = 'Gift Voucher';
							if(row['PaymentTypeCode'] == 3)
							payment_type_label = 'Manual Transfer';
							return payment_type_label;
						},
						"className": 'text-right',
						"targets": 9,
						"orderable": true
					},
					{
						"render" : function(data ,type, row){
							var alamat = '';
							alamat = row['AddressList'];
							return alamat;
						},
						"className": 'text-right',
						"targets": 11,
						"orderable": true
					}
				],
				'columns': [
					{
						"className":      'details-control',
						"orderable":      false,
						"data":           null,
						defaultContent: ''
					},
					{
						data: 'TransNum'
					},
					{
						data: 'TransStatus'
					},
					{
						data: 'QuantityTot'
					},	
					{
						data: 'StoreCodeList'
					},	
					{
						data: 'TransDate'
					},
					{
						data: 'RetailSalesTot'
					},
					{
						data: 'Phone'
					},
					{
						data: 'CustCode'
					},
					{
						data: 'PaymentTypeCode'
					},
					{
						data: 'TransStatus'
					},
					{
						data: 'AddressList'
					}
				],
				initComplete: function() {},
				drawCallback: function(settings) {
					// $('.browseBtn').ladda('stop');
					$('#status_all').text(0);
					$('#status_1').text(0);
					$('#status_2').text(0);
					$('#status_3').text(0);
					$('#status_7').text(0);
					$('#status_-2').text(0);
					var status_count_all = 0;
					settings['json']['count_status'].forEach(function(value, prop, obj){
						var status_id = value['TransStatus'];
						var status_count = parseInt(value['count']);
						status_count_all += status_count;
						$('#status_'+status_id).text(status_count);
					});
					$('#status_all').text(status_count_all);
				},
				buttons: [{
						extend: 'copy'
					},
					// {extend: 'csv'},
					// {extend: 'excel', title: 'ExampleFile'},
					// {extend: 'pdf', title: 'ExampleFile'},
					// {extend: 'print',
					// customize: function (win){
					// $(win.document.body).addClass('white-bg');
					// $(win.document.body).css('font-size', '10px');
					// $(win.document.body).find('table').addClass('compact').css('font-size', 'inherit');
					// }
					// }
				],
			});
			
		// Add event listener for opening and closing details
		$('#listDataTable tbody').on('click', 'td.details-control', function () {
			var tr = $(this).closest('tr');
			var row = listDataTable.row( tr );
	 
			if ( row.child.isShown() ) {
				// This row is already open - close it
				row.child.hide();
				tr.removeClass('shown');
			}
			else {
				// Open this row
				row.child( viewDetail(row.data()) ).show();
				tr.addClass('shown');
			}
		} );
	})
	
	function viewDetail ( d ) {
    // `d` is the original data object for the row
	var content = '<div class="card-content"></div>';
    return content;
	}

	function refreshDataTable($reset_page = false) {
		$('#listDataTable').DataTable().ajax.reload(null, $reset_page);
	}
	
	function getComboStatusFilter(new_value='') {
		$.ajax({
			type: 'POST',
			url: site_url + "omnichannel/monitoring/getComboStatusFilter/",
			dataType: 'html',
			'async': false,
			data: {},
			success: function(result) {
				$('#status_trx_key').empty();
				$('#status_trx_key').append(result);
				if(new_value=='')
				{
					$('#status_trx_key').val([<?= get_myconf('default_status') ?>]).trigger("chosen:updated");
				}else{
					$('#status_trx_key').val([new_value]).trigger("chosen:updated");
				}
			}
		});
	}
	
	function showModalVerify(transnum)
	{
		$('#transaction-id').text(transnum);
		$.ajax({
			type: 'POST',
			url: site_url + "omnichannel/monitoring/showModalVerify/",
			dataType: 'html',
			'async': true,
			data: {
				t_transnum:transnum
			},
			success: function(result) {
				$('#modal-verify-content').html(result);
			}
		});
	}
	
	function showModalDetail(transnum)
	{
		$('#transaction-id-detail').text(transnum);
		$.ajax({
			type: 'POST',
			url: site_url + "omnichannel/monitoring/showModalDetail/",
			dataType: 'html',
			'async': true,
			data: {
				t_transnum:transnum
			},
			success: function(result) {
				$('#modal-detail-content').html(result);
			}
		});
	}
	
	function verifyModalTransaction(transstatus)
	{
		var transnum = $('#transaction-id').text();
		var status_desc = 'Paid';
		var title = "Verifikasi Transaksi ["+transnum+"]?";
		if(transnum=='')
		{
			swal('error','Transaksi belum dipilih','error');
			return false;
		}
		if(transstatus==-1)
		{
			status_desc = 'Denied';
			title = "Reject Transaksi ["+transnum+"]?";
		}
		swal({
			title: title,
			text: "Status Transaksi akan berubah menjadi ["+status_desc+"]",
			type: "warning",
			buttons: ["No", "Yes"],
		 }).then((value) => {
		 hideProgres();
			if (value === false) return false;
			if (value) {
				showProgres();
				$.ajax({
					type: "POST",
					url: site_url + "omnichannel/monitoring/verifyTransaction",
					data: {
						t_transnum:transnum,
						t_transstatus:transstatus
					},
					dataType: 'json',
					success: function(response) {
						if(response['statusCode'] == 0)
						{
							swal('error', response['message'], "error");
						}else{
							swal(response['header'] || 'success', response['message'] || '', "success").then((value) => {
								$('#modal-verify').modal('hide');
								refreshDataTable(false);
							});
						}
					},
					error: function(jqXhr, textStatus, errorThrown) {
						var error_message = 'internal error';
						if (jqXhr.responseJSON !== undefined) {
							error_message = jqXhr['responseJSON']['message'];
						}
						swal('error', error_message, "error");
					}
				});
				return false;
			}
		});
	}
</script>
<section id="header">
<div class="row">
          <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
              <div onclick="getComboStatusFilter();refreshDataTable(true)" class="card-content" style="cursor: pointer;">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info" id="status_all">0</h3>
                      <h6>All</h6>
                    </div>
                    <div>
                      <i class="icon-basket-loaded info font-large-2 float-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
              <div onclick="getComboStatusFilter(1);refreshDataTable(true)" class="card-content" style="cursor: pointer;">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning" id="status_1">0</h3>
                      <h6>Checkout</h6>
                    </div>
                    <div>
                      <i class="icon-wallet warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
              <div onclick="getComboStatusFilter(2);refreshDataTable(true)" class="card-content" style="cursor: pointer;">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success" id="status_2">0</h3>
                      <h6>Payment To Be Confirmed</h6>
                    </div>
                    <div>
                      <i class="icon-paper-plane success font-large-2 float-right"></i>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
              <div onclick="getComboStatusFilter(3);refreshDataTable(true)" class="card-content" style="cursor: pointer;">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="primary" id="status_3">0</h3>
                      <h6>Paid</h6>
                    </div>
                    <div>
                      <i class="icon-control-rewind primary font-large-2 float-right"></i>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>        
		  <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
              <div onclick="getComboStatusFilter(7);refreshDataTable(true)" class="card-content" style="cursor: pointer;">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success" id="status_7">0</h3>
                      <h6>Delivery</h6>
                    </div>
                    <div>
                      <i class="icon-plane success font-large-2 float-right"></i>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
		  <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
              <div onclick="getComboStatusFilter(-2);refreshDataTable(true)" class="card-content" style="cursor: pointer;">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger" id="status_-2">0</h3>
                      <h6>Cancel</h6>
                    </div>
                    <div>
                      <i class="icon-social-dropbox danger font-large-2 float-right"></i>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
</section>
<section id="configuration">
  <div class="row">
	<div class="col-12">
	  <div class="card">
		<div class="card-header">
		  <h4 class="card-title">Order Checkout List</h4>
		  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
		  <div class="heading-elements">
			<ul class="list-inline mb-0">
				<li>
					<a id = "filter" class="btn btn-lg btn-icon btn-light mr-1" data-toggle="collapse" href="#datafilter" aria-expanded="false" aria-controls="datafilter"   href="javascript:void"><i class="ft-filter float-left"></i>&nbsp;Filter</a>		 
				</li>
 			  <li><a id = "back" onclick = "back()"><i class="ft-arrow-left"></i></a></li>
 			  <li><a onclick = "reload()" data-action="reload"><i class="ft-rotate-cw"></i></a></li>
			  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
			  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
			</ul>
		  </div>
		</div>
		<div class="card-content collapse show">
		  <div class="card-body card-dashboard">
				<div id="datafilter" role="tabpanel" aria-labelledby="headingCollapse53" class="card-collapse collapse" aria-expanded="false" style="">
                  <div class="card-content">
                    <div class="card-body">
					  <form id="formFilter" autocomplete="off">
						<div class="row">
						  <?php 
								$date_start_default = date('Y-m-').'01';
								$date_end_default 	= date('Y-m-d');
							?>
						  <div class="col-xl-2 col-lg-12">
							  <fieldset>
								  <h5>
									  Start Periode
								  </h5>
								  <div class="form-group">
								  <input type="date" class="form-control" id="filter_date_start" name ="t_filter_date_start"value="<?=$date_start_default?>">
								  </div>
							  </fieldset>
							</div>
							<div class="col-xl-2 col-lg-12">
							  <fieldset>
								  <h5>
									  End Periode
								  </h5>
								  <div class="form-group">
								  <input type="date" class="form-control" id="filter_date_end" name ="t_filter_date_end" value="<?=$date_end_default?>">
								  </div>
							  </fieldset>
							</div>
						  <div class="col-xl-6 col-lg-12 ">
							<fieldset>
							  <h5>Transcation Status 
								<small class="text-muted"></small>
							  </h5>
							  <div class="form-group">
								  <select id="status_trx_key" name="t_status_trx_key[]" data-placeholder="Select a state..." multiple="multiple" class="select2 form-control" style="width:90%">								  
								  </select>
							  </div>
							</fieldset>
						  </div>
						  <div class="col-xl-1 col-lg-12">
							<fieldset>
							  <h5>
								&nbsp;
							  </h5>
							  <div class="form-group">
							  <div class="btn-group">
								<button type="submit" class="btn btn-outline-success loading-button"><i class="la la-search"></i> Browse</button>
								</div>
							  </div>
							</fieldset>
						  </div>
						</div>
						</form>
                    </div>
                  </div>
                </div>
			<div class="table-responsive">
				<table id="listDataTable" class="table table-hover table-xl mb-0">
					<thead>
						<tr>
							<th class="hidden">*</th>
							<th>Trans Num</th>
							<th>Action</th>
							<th>Qty</th>
							<th>Toko</th>
							<th>Date</th>
							<th>Sales</th>
							<th>Phone</th>
							<th>Customer</th>
							<th>Tipe Bayar</th>
							<th>Status</th>
							<th>Shipping Address</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		  </div>
		</div>
		
	  </div>
	</div>
  </div>
  
</section>
  <!-- Modal -->
  <div class="modal fade text-left" id="modal-verify" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title" id="myModalLabel1"><i class="la la-lightbulb-o"></i><i id="transaction-id">TRX</i></h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times; Tutup</span>
		  </button>
		</div>
		<div class="modal-body">
		  <div id="modal-verify-content"></div>
		</div>
		<div class="" style="border-top: 1px solid #98A4B8;padding: 1rem;">
		  <button type="button" class="btn btn-outline-danger" onclick="verifyModalTransaction(-1)">Reject Transaksi</button>
		  <button type="button" class="btn btn-outline-primary pull-right" onclick="verifyModalTransaction(3)">Verifikasi Transaksi</button>
		</div>
	  </div>
	</div>
  </div>
  <div class="modal fade text-left" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
  aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title" id="myModalLabel2"><i class="la la-lightbulb-o"></i><i id="transaction-id-detail">TRX</i></h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times; Tutup</span>
		  </button>
		</div>
		<div class="modal-body">
		  <div id="modal-detail-content"></div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
  </div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.css"/>

<link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/tables/datatable2/rowReorder.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/tables/datatable2/responsive.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
<script src="<?= base_url();?>app-assets/vendors/js/tables/datatable2/dataTables.rowReorder.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>app-assets/vendors/js/tables/datatable2/dataTables.responsive.min.js" type="text/javascript"></script>
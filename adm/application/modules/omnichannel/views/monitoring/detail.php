<div style="display: flex;align-items: flex-start;justify-content: space-between;">
	<h1>Customer:<?=$order_header['CustCode']?>-<?=$customer['Name']?></h1>
	<h3>Retail Sales:<?=number_format($order_header['RetailSalesTot'])?></h3>
</div>
<div class="card-body">
	<div class="row">
		<div class="col-md-4 col-sm-12 ">
			  <p class="lead">Rekap transaksi:</p>
			  <div class="table-responsive">
				<table class="table table-sm">
				  <tbody>
					<tr>
					  <td class="">Retail Sales</td>
					  <td class="text-right"><?=number_format($order_header['RetailSalesTot'])?></td>
					</tr>
					<?php if($order_header['OngkosKirim']<>0){?>
					<tr>
					  <td>Ongkos Kirim</td>
					  <td class="text-right"><?=number_format($order_header['OngkosKirim'])?></td>
					</tr>
					<?php }?>
					<?php if($order_header['OngkosKirimDiscount']<>0){?>
					<tr>
					  <td>Diskon Ongkos Kirim</td>
					  <td class="pink text-right">(-) <?=number_format($order_header['OngkosKirimDiscount'])?></td>
					</tr>
					<?php }?>
					<?php if($order_header['UniqueCodeNominal']<>0){?>
					<tr>
					  <td class="text-bold-800">Kode Unik</td>
					  <td class="text-bold-800 text-right"> <?=number_format($order_header['UniqueCodeNominal'])?></td>
					</tr>
					<?php }?>
					<?php if($order_header['VoucherAmount']<>0){?>
					<tr>
					  <td class="text-bold-800">Potongan Voucher</td>
					  <td class="pink text-right">(-)  <?=number_format($order_header['VoucherAmount'])?></td>
					</tr>
					<?php }?>
					<tr class="bg-grey bg-lighten-4">
					  <td class="text-bold-800">Total Transaksi</td>
					  <td class="text-bold-800 text-right"><?=number_format($order_header['TransactionAmount'])?></td>
					</tr>
				  </tbody>
				</table>
			  </div>
		</div>
		<div class="col-md-4 text-center text-md-left">
		  <p class="lead">Metode pembayaran:</p>
		  <div class="row">
			<div class="col-md-12">
			  <table class="table table-sm">
				<tbody>
				  <tr>
					<td class="">Deskripsi:</td>
					<td class="text-right"><?=$payment_type['Name']?></td>
				  </tr>
				  <tr>
					<td>No Rekening:</td>
					<td class="text-right"><?=$order_payment_status['ManualNoRekening']?></td>
				  </tr>
				  <tr>
					<td>Nama Rekening:</td>
					<td class="text-right"><?=$order_payment_status['ManualNamaBank']?></td>
				  </tr>
				</tbody>
			  </table>
			</div>
		  </div>
		</div>
		<?php 
			$amount_transfer = ($bank_transaction['Debet']-$bank_transaction['Credit'])*-1;
		?>
		<div class="col-md-4 text-center text-md-left">
		  <p class="lead">Status pembayaran:</p>
		  <div class="row">
			<div class="col-md-12">
			  <table class="table table-sm">
				<tbody>
				  <tr>
					<td>Tanggal:</td>
					<td class="text-right"><?=$bank_transaction['TransDate']?></td>
				  </tr>
				  <tr>
					<td>Nominal:</td>
					<td class="text-right"><?=number_format($amount_transfer)?></td>
				  </tr>
				  <tr>
					<td class="">Deskripsi:</td>
					<td class="text-right"><?=$bank_transaction['Remark']?></td>
				  </tr>
				  <tr>
					<td>Detail:</td>
					<td class="text-right"><?=$order_payment_status['TransactionStatusDescription']?></td>
				  </tr>
				</tbody>
			  </table>
			</div>
		  </div>
		</div>
	</div>
	<?php if($order_list->num_rows()>0){?>
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			  <p class="lead">Metode Pengiriman:</p>
			  <div class="table-responsive">
				<table class="table table-sm">
				  <tbody>
					<?php foreach($order_list->result_array() as $row){ ?>
					<tr>
					  <td class="">Toko <?=$row['StoreCode']?> - <?=$row['StoreName']?></td>
					  <td class="text-center"><?=$row['ServiceName']?><?=$row['NomorResi']?' [Resi:'.$row['NomorResi'].']':'';?></td>
					  <td class="text-right">fee: <?=number_format($row['OngkosKirimRSP'])?></td>
					</tr>
					<?php }?>
				  </tbody>
				</table>
			  </div>
		</div>
	</div>
	<?php }?>
</div>
  <div class="alert alert-warning hidden" role="alert">
	<span class="text-bold-600"><i class="la la-lightbulb-o"></i>&nbsp;Page is Under Development</span> 
  </div>
 <script>
	$(document).ready(function() {
		var listDataTableLookup = $('#listDataTableLookup')
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
					'url': site_url + "omnichannel/monitoring/detailPage",
					'beforeSend': function(xhr) {},
					'data': function(d) {
						d.transnum = "<?=$transnum;?>"
					},
					'error': function(jqXhr, textStatus, errorThrown) {
						var error_message = 'internal error';
						if (jqXhr.responseJSON !== undefined) {
							error_message = jqXhr['responseJSON']['message'];
						}
						swal('error', error_message, "error");
						// $('.browseBtn').ladda('stop');
					}
				},
				'dom': '<"html5buttons"B><"row"<"col-sm-5"l><"col-sm-7"f>>T<"PrintArea"tr><"row"<"col-sm-5"i><"col-sm-7"p>>',
				"columnDefs": [
					{
						"render" : function(data ,type, row){
							return row['StoreCode']+':'+row['StoreName'];
						},
						"targets": 0,
						"orderable": true
					},
					{
						"render" : function(data ,type, row){
							return row['SKU']+':'+row['Description'];
						},
						"targets": 1,
						"orderable": true
					},
					{
						"render" : function(data ,type, row){
							return number_format(row['Quantity']);
						},
						"className": 'text-right',
						"targets": 2,
						"orderable": true
					},
					{
						"render" : function(data ,type, row){
							return number_format(row['RetailSalesTot']);
						},
						"className": 'text-right',
						"targets": 3,
						"orderable": true
					},
					{
						"render" : function(data ,type, row){
							var status_label = '<span class="badge badge-default badge-lg" style="background-color: '+row['StatusColor']+';">'+row['StatusTrx']+'</span>';
							return status_label;
						},
						"className": 'text-right',
						"targets": 4,
						"orderable": true
					}
				],
				'columns': [
					{
						data: 'StoreCode'
					},
					{
						data: 'SKU'
					},	
					{
						data: 'Quantity'
					},
					{
						data: 'RetailSalesTot'
					},
					{
						data: 'TransStatus'
					}
				],
				initComplete: function() {},
				drawCallback: function(settings) {
					// $('.browseBtn').ladda('stop');
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
			
	})
	
	function refreshDataTableLookup($reset_page = false) {
		$('#listDataTableLookup').DataTable().ajax.reload(null, $reset_page);
	}
</script>
<h3>Detail Transaksi:</h3>
<div class="card-body">
	<div class="row">
		<div class="table-responsive">
			<table id="listDataTableLookup" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
				<thead>
					<tr>
						<th>Toko</th>
						<th>Product</th>
						<th>Quantity</th>
						<th>Retail Sales</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</div>
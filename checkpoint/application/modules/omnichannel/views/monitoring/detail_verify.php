<h1>Customer:<?=$order_header['CustCode']?>-<?=$customer['Name']?></h1>
<div class="card-body">
	<div class="row">
		<div class="col-md-6 col-sm-12 ">
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
		<div class="col-md-6 text-center text-md-left">
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
	</div>
</div>
<?php if($order_payment_status['ManualNamaBankPengirim']!=''){?>
	  <div class="text-center">
		<h1>Konfirmasi Transfer</h1>
		<?php 
			$api_url = 'http://elshop.elcorps.com/api_url/';
			$img_url = $api_url.$order_payment_status['ManualBuktiUpload'];
		?>
		<div class="table-responsive">
		  <table class="table table-sm">
			<tbody>
			  <tr>
				<td rowspan="5" style="width: 30%;"><a href="<?=$img_url?>" target="_blank" ><img src="<?=$img_url?>" alt="bukti transfer" class="height-100"></a></td>
				<td class="">Nama Rekening Pengirim:</td>
				<td class="text-right"><?=$order_payment_status['ManualNamaRekeningPengirim']?></td>
			  </tr>
			  <tr>
				<td>Nama Bank Pengirim:</td>
				<td class="text-right"><?=$order_payment_status['ManualNamaBankPengirim']?></td>
			  </tr>
			  <tr>
				<td>No Rekening Pengirim:</td>
				<td class="text-right"><?=$order_payment_status['ManualNoRekeningPengirim']?></td>
			  </tr>
			  <?php if($order_payment_status['ManualTanggalTransfer']!=''){ ?>
			  <tr>
				<td>Tanggal Transfer:</td>
				<td class="text-right"><?=$order_payment_status['ManualTanggalTransfer']?></td>
			  </tr>
			  <?php } ?>
			  <tr>
				<td>Nominal Transfer:</td>
				<td class="text-right"><?=number_format($order_payment_status['ManualAmountTransfer'])?></td>
			  </tr>
			</tbody>
		  </table>
		</div>
	  </div>
<?php }else{ ?>
  <div class="alert alert-warning" role="alert">
	<span class="text-bold-600">Bukti Transfer belum di upload</span> 
  </div>
<?php } ?>
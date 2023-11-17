<?php
    foreach ($vbooked->result_array() as $row) {
?>
<br>
<table class="table">
		<tbody>
			<tr>
				<td colspan="3" class="title"><?=$storedata['StoreCode']?> - <?=$storedata['Description']?></td>				
			</tr>
			<tr>
				<td colspan="3" class="sub-title" style="text-align:center"><?=$storedata['Address']?></td>				
			</tr>
			<tr>
				<td colspan="3" class="title"></td>				
			</tr>
			<tr>
				<td colspan="3" class="title bottom-border"></td>				
			</tr>
			<tr>
				<td colspan="3" class="title bottom-border"></td>				
			</tr>
			<tr class="sub-title">
				<td style="text-align:left">Trans Num</td>
				<td></td>
				<td style="text-align:right"><?=$row['TransNum']?></td>
			</tr>
			<tr class="sub-title">
                <td style="text-align:left">Tanggal dibuat</td>
				<td></td>
				<td style="text-align:right"><?=humanize_mdate($row['CreatedDate'])?></td>
			</tr>	
            <tr>
				<td colspan="3" class="title"></td>		
            </tr>    	
            <tr>
				<td colspan="3" class="title bottom-border"></td>				
			</tr>
			<tr>
				<td colspan="3" class="title bottom-border"></td>				
			</tr>
            <tr>
				<td colspan="3" class="title"></td>		
            </tr>    		
            <tr>
				<td colspan="3" class="title"></td>		
            </tr>    		
            <tr>
                <td colspan="3" class="title">Selamat anda mendapatkan Voucher Cashback senilai</td>				
            </tr>	
            <tr>
                <td colspan="3" class="title">Rp.&nbsp;<?=number_format($row['VoucherAmount'])?></td>				
            </tr>	
            <tr>
				<td colspan="3" class="title"></td>		
            </tr>    		
            <tr>
				<td colspan="3" class="title"></td>		
            </tr>    		
            <tr>
				<td colspan="3" class="title"></td>		
            </tr>    		
            <tr>
                <td colspan="3" class="sub-title" style="text-align:center">Penukaran Voucher Cashback berlaku syarat dan ketentuan khusus di Toko &nbsp;<?=$storedata['Description']?></td>				
            </tr>		
            <tr>
                <td colspan="3" class="title"></td>				
            </tr>	
            <tr>
				<td colspan="3" class="title bottom-border"></td>				
			</tr>
			<tr>
				<td colspan="3" class="title bottom-border"></td>				
			</tr>
            <tr>
                <td colspan="3" class="sub-title" style="text-align:center">.: Kode Voucher :.</td>				
            </tr>
            <tr>
				<td colspan="3" class="title"></td>		
            </tr>  
            <tr>
				<td colspan="3" class="title"></td>		
            </tr>  	
            <tr>
                <td colspan="3" class="title"><?=$row['UniqueCode']?></td>				
            </tr>
            <tr>
				<td colspan="3" class="title"></td>		
            </tr>    	
            <tr>
				<td colspan="3" class="title bottom-border"></td>				
			</tr>
			<tr>
				<td colspan="3" class="title bottom-border"></td>				
			</tr>
            <tr>
                <td colspan="3" class="sub-title" style="text-align:center">Terima Kasih</td>				
            </tr>	
            <tr>
                <td colspan="3" class="sub-title" style="text-align:center">||.: Jazakumullah Khairan Katshira :.||</td>				
            </tr>	
            <tr>
				<td colspan="3" class="title"></td>					
			</tr>
			<tr>
				<td colspan="3" class="title"></td>					
			</tr>
		</tbody>
	</table>
<br><br><br><br>
<div style="page-break-after: always;"></div>
<?php } ?>

<style>
	.centered {
		text-align:center;
	}
</style>
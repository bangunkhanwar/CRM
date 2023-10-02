<div>
	<table class="table">
		<tbody>
			<tr>
				<td colspan="3" class="title"><?=$reprint?></td>				
			</tr>
			<tr>
				<td colspan="3" class="title">Bukti Penukaran Point</td>				
			</tr>
			<br/>
			<tr>
				<td colspan="3" class="title"><?=$history['RefNum']?></td>				
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
				<td style="text-align:left"><?=$history['MemberCode']?></td>
				<td></td>
				<td style="text-align:right"><?=humanize_mdate($history['TransDate'])?></td>
			</tr>
			<tr class="sub-title">
                <td style="text-align:left"><?=$history['Name']?></td>
				<td></td>
				<td></td>
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
                <td colspan="3" class="sub-title">Anda telah menukarkan point sebanyak <?=$history['JumlahPoint']?> dengan <?=$history['GiftDescription']?> , berlaku sampai dengan <?=humanize_mdate($history['ExpiryDate'])?>.</td>				
            </tr>	
            <tr>
				<td colspan="3" class="title"></td>		
            </tr>    		
            <tr>
				<td colspan="3" class="title"></td>		
            </tr>    		
            <tr>
                <td colspan="3" class="title"><?=$history['GiftRefNum']?></td>				
            </tr>		
            <tr>
                <td colspan="3" class="title"><?=$history['GiftDescription']?></td>				
            </tr>	
            <tr>
                <td colspan="3" class="title"></td>				
            </tr>		
            <tr>
                <td colspan="3" class="title"></td>				
            </tr>		
            <tr>
                <td colspan="3" class="sub-title">Total Point Anda Saat Ini :</td>				
            </tr>	
            <tr>
                <td colspan="3" class="title"><?=number_format($point['TotalPoints'],0,',','.')?></td>				
            </tr>	
            <tr>
                <td colspan="3" class="sub-title">Ayo Tingkatkan Terus Pembelanjaan Anda, Agar Peluang Untuk Menukar Point Semakin Besar.</td>				
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
                <td colspan="3" class="sub-title" style="text-align:center">.:: Terima Kasih ::.</td>				
            </tr>	
            <tr>
				<td colspan="3" class="title"></td>					
			</tr>
			<tr>
				<td colspan="3" class="title"></td>					
			</tr>
		</tbody>
	</table>
</div>
<style>
	.centered {
		text-align:center;
	}
</style>
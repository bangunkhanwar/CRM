<div class="table-responsive">
    <table class="table" id="tbl_reward">
        <thead>
            <tr>
                <th width="1%" style="text-align:left; vertical-align:middle;">No</th>
                <th style="text-align:left; vertical-align:middle;">Trans Date</th>
                <th style="text-align:left; vertical-align:middle;">Description</th>
                <th style="text-align:left; vertical-align:middle;">Gift</th>
                <th style="text-align:left; vertical-align:middle;">Gift Ref Number</th>
                <th style="text-align:right; vertical-align:middle;">Point Redeem</th>
                <th style="text-align:center; vertical-align:middle;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $hno = 0 ;
            foreach($history->result_array() as $row_h) { 
            $hno++
            ?>
                <tr>
                    <th scope="row"><?=$hno?></th>
                    <td><?=humanize_mdate($row_h['TransDate'])?></td>
                    <td><?=$row_h['Description']?></td>
                    <td><?=$row_h['GiftDescription']?></td>
                    <td><?=$row_h['GiftRefNum']?></td>
                    <td style="text-align:right"><?=number_format($row_h['JumlahPoint'],0,".",",")?></td>
                    <td>
                        <button type="button" class="btn btn-warning btn-block btn-glow" onClick="printRedeem('<?=$row_h['RefNum']?>','REPRINT')"><i class="la la-print"></i> Reprint&nbsp; </button>
                    </td>
                </tr>
            <?php }?>
        </tbody>								
    </table>
</div>
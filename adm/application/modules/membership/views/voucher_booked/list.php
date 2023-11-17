<div class="table-responsive">
    <table class="table table-bordered" id="tbl_booked">
        <thead>
            <tr>
                <th rowspan="2" width="1%" style="text-align:center; vertical-align:middle;">No</th>
                <th rowspan="2" style="text-align:center; vertical-align:middle;">Transaction Number</th>
                <th colspan="2" style="text-align:center; vertical-align:middle;">Voucher</th>
            </tr>
            <tr>
                <th style="text-align:center;">ID</th>
                <th style="text-align:center;">Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($listvbooked->num_rows() > 0) {
                $i = 0;
                foreach ($listvbooked->result_array() as $row) {
                    $i++;
            ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?=$row['TransNum']?></td>
                        <td><?=$row['UniqueCode']?></td>
                        <td style="text-align:right;"><?=number_format($row['VoucherAmount'])?></td>                                            
                    </tr>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <td colspan="4" style="color:red"><i>Data not found</i></td>
                </tr>
            <?php } ?>
        </tbody>								
    </table>
</div>      
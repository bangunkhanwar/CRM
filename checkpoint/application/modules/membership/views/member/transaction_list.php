<div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th width="1%">No</th>
                          <th>Trans Number</th>
                          <th>Trans Date</th>
                          <th>Qty Item</th>
                          <th>Gross Sales</th>
                          <th>Discount</th>
                          <th>Retail Sales</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php 
					  $no = ($paging['current']-1) * $paging['limit'] ;
					  $tot_qty =0;
					  $tot_gsp =0;
					  $tot_dsc =0;
					  $tot_rsp =0;
					  foreach($sales_list->result_array() as $row) { 
					  $no++;
					  $tot_qty = $tot_qty+$row['QtyItem'];
					  $tot_gsp = $tot_gsp+$row['GrossSalesTot'];
					  $tot_dsc = $tot_dsc+$row['DiscountTot'];
					  $tot_rsp = $tot_rsp+$row['RetailSalesTot'];
					  $status = '';
					  if($row['TransStatus']==9)
					  {
						  $status = 'Transaksi Sales';
					  }else if($row['TransStatus']==8)
					  {
						  $status = 'Transaksi Sales Retur';
					  }else{
						  $status = 'Unknown';
					  }
					  ?>
                        <tr>
                          <th rowspan="2"><?=$no?></th>
                          <td colspan="6"><?=match_key($row['StoreCode'],$key['StoreCode'])?> - <?=match_key($row['StoreDescription'],$key['StoreDescription'])?> : (<?=$status?>)</td></td>
                        </tr>
                        <tr>
                          <td><?=match_key($row['TransNum'],$key['TransNum'])?></td>
                          <td><?=humanize_mdate($row['TransDate'])?></td>
                          <td><?=number_format($row['QtyItem'])?></td>
                          <td><?=number_format($row['GrossSalesTot'])?></td>
                          <td><?=number_format($row['DiscountTot'])?></td>
                          <td><?=number_format($row['RetailSalesTot'])?></td>
                        </tr>
					  <?php }?>
                        <tr style="display:none">
                          <th colspan="3">Total</th>
                          <td><?=number_format($tot_qty)?></td>
                          <td><?=number_format($tot_gsp)?></td>
                          <td><?=number_format($tot_dsc)?></td>
                          <td><?=number_format($tot_rsp)?></td>
                        </tr>
                      </tbody>
					  
                    </table>
                  </div>
<?=$paging['list'];?>
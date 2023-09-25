<div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th width="1%">No</th>
                          <th>Trans Date</th>
                          <th>Trans REF</th>
                          <th>Description</th>
                          <th>Points</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php 
						$no = ($paging['current']-1) * $paging['limit'] ;
					  foreach($points_list->result_array() as $row) { 
					  $no++
					  ?>
                        <tr>
                          <th scope="row"><?=$no?></th>
                          <td><?=humanize_mdate($row['TransDate'])?></td>
                          <td><a href="javascript:void(0)" onclick="find_trans('<?=$row['TransNumRef']?>')"><?=match_key($row['TransNumRef'],$key['TransNumRef'])?></a></td>
                          <td><?=match_key($row['Description'],$key['Description'])?></td>
                          <td><?=$row['Debit']?'+'.number_format($row['Debit']):''?> <?=$row['Credit']?'-'.number_format($row['Credit']):''?></td>
                        </tr>
					  <?php }?>
                        <tr>
                          <th colspan="4">Total</th>
                          <td><?=number_format($tot_points)?></td>
                        </tr>
                      </tbody>
					  
                    </table>
                  </div>
<?=$paging['list'];?>
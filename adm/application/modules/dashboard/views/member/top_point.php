<div class="table-responsive">
					  <table class="table mb-0">
						<thead class="bg-yellow bg-lighten-4">
						  <tr>
							<th>No</th>
							<th>Member Code</th>
							<th>Name</th>
							<th>Points</th>
						  </tr>
						</thead>
						<tbody>
						<?php 
						$no = 1;
						foreach($list_data->result_array() as $key=>$row){ ?>
						  <tr>
							<td><?=$no++?></td>
							<td><a title="<?=$row['Name']?>" href="<?=base_url()?>membership/member/info/<?=encode($row['MemberCode'])?>"><?=$row['MemberCode']?></a></td>
							<td><?=$row['Name']?></td>
							<td><?=number_format($row['Pts'],0,',','.')?></td>
						  </tr>
							<?php } ?>
						</tbody>
					  </table>
					</div>
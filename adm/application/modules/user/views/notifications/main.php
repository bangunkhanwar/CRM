
<div class="row">
          <div id="recent-transactions" class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">All Notification</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="ijavascript:void(0)"><?=$count_notif?> Unread Notification</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">#</th>
                        <th class="border-top-0">Title</th>
                        <th class="border-top-0">Description</th>
                        <th class="border-top-0">*</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php 
					$no = 1;
					foreach($list_notif->result_array() as $key=>$row){ ?>
                      <tr>
                        <td class="text-truncate p-1"><?=time_elapsed_string($row['TimeCreate'])?>
                        </td>
                        <td class="text-truncate"><?=$row['Title']?></td>
                        <td class="text-truncate">
                          <span><?=$row['Content']?></span>
                        </td>
                        <td>
						<?php if($row['fidNotification'] == ''){?>
							<a class="btn btn-sm  btn-outline-danger round btn-min-width" href="<?=base_url()?>user/detail_notification/<?=encode($row['idNotification'])?>" target="">unread</a>
						<?php }else{?>
							<a class="btn btn-sm  btn-outline-success round btn-min-width" href="<?=base_url()?>user/detail_notification/<?=encode($row['idNotification'])?>" target="">read</a>
						<?php }?>
                        </td>
					<?php } ?>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
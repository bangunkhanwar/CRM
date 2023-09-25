<section id="timeline" class="timeline-left timeline-wrapper">
          <h3 class="page-title text-center text-lg-left">User Activity</h3>
		  <?php foreach ($activity->result_array() as $row) { ?>
          <ul class="timeline">
            <li class="timeline-line"></li>
            <li class="timeline-item" style="padding-bottom: 0px;">
              <div class="timeline-badge">
                <span class="bg-red bg-lighten-1" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="la la-info"></i></span>
              </div>
              <div class="timeline-card card border-grey border-lighten-2" style="margin-bottom: unset;">
                <div class="card-header">
                  <h4 class="card-title"><a href="#"><?=$row['LogType']?></a></h4>
                  <p class="card-subtitle text-muted pt-1">
                    <span class="font-small-3"><?=time_elapsed_string($row['ActionTime'])?></span>
                  </p>
              </div>
              </div>
            </li>
          </ul>
		  <?php } ?>
          <ul class="timeline" style="display:none">
            <li class="timeline-line"></li>
			<li class="timeline-item" style="padding-bottom: 0px;">
			  <div class="timeline-badge">
				<span class="bg-teal bg-lighten-1" data-toggle="tooltip" data-placement="left" title="Nullam facilisis fermentum"><i class="la la-check"></i></span>
			  </div>
			  <div class="timeline-card card border-grey border-lighten-2" style="margin-bottom: unset;">
				<div class="card-header">
				  <h4 class="card-title"><a href="#">Portfolio project work</a></h4>
                  <p class="card-subtitle text-muted pt-1">
                    <span class="font-small-3">5 hours ago</span>
                  </p>
				</div>
			  </div>
			</li>
          </ul> 
        </section>
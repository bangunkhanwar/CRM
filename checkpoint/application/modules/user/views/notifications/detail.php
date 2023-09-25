<section class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><?=$notification['Title']?> <small><?=$notification['TimeCreate']?></small></h4>
				<div class="heading-elements">
                    <ul class="list-inline mb-0">
						<li>	 
							<a class="btn btn-lg btn-icon btn-light mr-1" href="<?=base_url()?>user/notifications"><i class="ft-arrow-left float-left"></i>&nbsp;Back</a>			 
						</li>
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div class="card-text">
                    <p><?=$notification['Content']?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
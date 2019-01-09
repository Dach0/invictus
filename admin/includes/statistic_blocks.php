 <?php

//broj servisa
$num_of_services = countFromDb('service_id', 'service');
//broj projekata
$num_of_projects = countFromDb('project_id', 'project');
//broj komentara
$num_of_comments = countFromDb('comment_about_us_id', 'comment_about_us');
//broj administratora
$num_of_admins = countFromDb('id', 'user');
//broj klijanata
$num_of_clients = countFromDb('client_id', 'client');




?>
             
             <div class="row">
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Servisi</span>
                        <h6 class="stats-small__value count my-3"><?php echo $num_of_services ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Projekti</span>
                        <h6 class="stats-small__value count my-3"><?php echo $num_of_projects ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">KOMENTARI O NAMA</span>
                        <h6 class="stats-small__value count my-3"><?php echo $num_of_comments ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Administratori</span>
                        <h6 class="stats-small__value count my-3"><?php echo $num_of_admins ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-12 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Klijenti</span>
                        <h6 class="stats-small__value count my-3"><?php echo $num_of_clients ?></h6>
                      </div>
                  </div>
                </div>
              </div>
            </div>
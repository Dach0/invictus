   <?php

 //povlaci podatke iz baze koji ce se postaviti na formu
    if(isset($_GET['p_id'])){
        
        $db_project_id = $_GET['p_id'];
        
        $query = "SELECT * FROM project where project_id = $db_project_id";
        $select_project = mysqli_query($connection, $query);
        confirmQuery($select_project);
        $result = mysqli_fetch_assoc($select_project);    
        $db_project_name = $result['project_name'];
        $db_project_image = $result['project_image'];
        $db_project_description = $result['project_description'];
        $db_project_service_id = $result['service_id'];
        
    }
    ?>
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Projekti</span>
                <h3 class="page-title">Pregled projekta</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                    <form class="add-new-post" action="" method="post" enctype="multipart/form-data">
                     
                     
                     <div class="form-group">
                        <label  for="service_category">Kategorija servisa</label>
                        <select disabled class="form-control form-control-lg mb-3" name="service_category" id="">

                        <?php

                        $query = "SELECT * FROM service";             
                        $select_services = mysqli_query($connection, $query);

                        confirmQuery($select_services);

                        while ($row = mysqli_fetch_assoc($select_services)){

                        $service_id = $row['service_id'];
                        $service_name = $row['service_name'];   
                            
                            if ($service_id == $db_project_service_id){
                                echo "<option selected value='{$service_id}'>{$service_name}</option>";
                            }else{
                                echo "<option value='{$service_id}'>{$service_name}</option>";
                            }

                        }

                        ?>
                        </select>
                    </div>
                      <input disabled class="form-control form-control-lg mb-3" type="text" name="project_title" value="<?php echo $db_project_name ?>">
                      <div class="form-group">
                        <img width="150px" src="/amplitudo/invictus/images/<?php echo $db_project_image ?>" alt="">
                      </div>
                      <label for="editor-container">Opis projekta</label>
                      <textarea disabled name="service_description" id="" cols="" rows="10" class="form-control"><?php echo $db_project_description ?></textarea>
<!--                      <div id="editor-container" class="add-new-post__editor mb-1"></div>-->
                      <div class="btn_save_project_service">
                        <a href="services_projects.php?source=view_projects" class="btn btn-sm btn-accent ml-auto">Nazad na tabelu projekata</a>
                        </div>
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
            </div>
          </div>

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


//update-uje podatke u bazi
    if(isset($_POST['update_project'])){
        
        $project_title = escape($_POST['project_title']);
        $service_id = escape($_POST['service_category']);
        
        $project_image = $_FILES['image']['name'];
        $project_image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($project_image_tmp, "../images/$project_image");
        
        //ako se ne mijenja slika uzmi istu putanju
        if(empty($project_image)){
                
                $query = "SELECT project_image FROM project WHERE project_id = {$db_project_id}";
                $select_image = mysqli_query($connection, $query);
                
                $row = mysqli_fetch_assoc($select_image);
                $project_image = $row['project_image'];
            }
        
        
        $project_description = escape($_POST['service_description']);
        
        if (empty($project_title) || empty($project_description)){
            ?>
                <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
               <i class="fa fa-exclamation-triangle mx-2"></i>
                <strong>Greška!</strong> Polja ne mogu biti prazna! <?php echo "<a href='services_projects.php?source=view_projects'>Pregled projekata</a>";?></div>

            <?php
         
        } else {
            
            $query = "UPDATE `project` SET `project_name`=?,`project_image`=?,`project_description`=?,`service_id`=? WHERE project_id=$db_project_id";
            $stmt = mysqli_prepare($connection, $query);
            mysqli_stmt_bind_param($stmt, 'sssi', $project_title, $project_image, $project_description, $service_id);
            mysqli_stmt_execute($stmt);
            
            if(!$stmt){
                  die("Nesto nije u redu" . mysqli_error($connection));
            }else {
                
                 ?>
                <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <i class="fa fa-check mx-2"></i>
                <strong>Uspješno!</strong> Projekat je ažuriran! <?php echo "<a href='services_projects.php?source=view_projects'>Pregled projekata</a>";?></div>
                <?php
            }
            
        }     
        }
    ?>
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Projekti</span>
                <h3 class="page-title">Ažuriraj projekat</h3>
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
                        <select  class="form-control form-control-lg mb-3" name="service_category" id="">

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
                      <input class="form-control form-control-lg mb-3" type="text" name="project_title" value="<?php echo $db_project_name ?>">
                      <div class="form-group">
                        <img width="150px" src="/amplitudo/invictus/images/<?php echo $db_project_image ?>" alt="">
                        <label for="image" class="d-block">Izaberi novu sliku</label>
                        <input type="file" class="form-control" name="image" id="image">
                      </div>
                      <label for="editor-container">Opis projekta</label>
                      <textarea name="service_description" id="" cols="" rows="10" class="form-control"><?php echo $db_project_description ?></textarea>
<!--                      <div id="editor-container" class="add-new-post__editor mb-1"></div>-->
                      <div class="btn_save_project_service">
                          <button class="btn btn-sm btn-accent ml-auto" name="update_project">
                          <i class="material-icons">file_copy</i> Ažuriraj</button>
                          <a class="btn btn-danger ml-1" href="services_projects.php?source=view_projects">Odustani</a>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
            </div>
          </div>

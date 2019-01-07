   <?php

    if(isset($_POST['create_project'])){
        
        $project_title = escape($_POST['project_title']);
        $service_id = escape($_POST['service_category']);
        
        $project_image = $_FILES['image']['name'];
        $project_image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($project_image_tmp, "../images/$project_image");
        
        $project_description = escape($_POST['service_description']);
        
        if (empty($project_title) || empty($project_description)){
            ?>
                <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
               <i class="fa fa-exclamation-triangle mx-2"></i>
                <strong>Greška!</strong> Polja ne mogu biti prazna!</div>

            <?php
         
        } else {
            
            $query = "INSERT INTO `project`(`project_name`, `project_image`, `project_description`, `service_id`) VALUES (?,?,?,?)";
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
                <strong>Uspješno!</strong> Dodat je novi projekat! <?php echo "<a href='services_projects.php?source=view_projects'>Pregled projekata</a>";?></div>
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
                <h3 class="page-title">Dodaj novi projekat</h3>
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

                            echo "<option value='{$service_id}'>{$service_name}</option>";

                        }

                        ?>
                        </select>

                    </div>
                      <input class="form-control form-control-lg mb-3" type="text" name="project_title" placeholder="Naziv projekta ovdje">
                      <div class="form-group">
                        <label for="image">Izaberi sliku</label>
                        <input type="file" class="form-control" name="image">
                      </div>
                      <label for="editor-container">Opis projekta</label>
                      <textarea name="service_description" id="" cols="" rows="10" class="form-control"></textarea>
<!--                      <div id="editor-container" class="add-new-post__editor mb-1"></div>-->
                      <div class="btn_save_project_service">
                          <button class="btn btn-sm btn-accent ml-auto" name="create_project">
                          <i class="material-icons">file_copy</i> Sačuvaj</button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
            </div>
          </div>

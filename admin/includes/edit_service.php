<?php


    //povlaci podatke iz baze koji ce se postaviti na formu
    if(isset($_GET['s_id'])){
        
        $db_service_id = $_GET['s_id'];
        
        $query = "SELECT * FROM service where service_id = $db_service_id";
        $select_service = mysqli_query($connection, $query);
        confirmQuery($select_service);
        $result = mysqli_fetch_assoc($select_service);
        
        $db_service_name = $result['service_name'];
        $db_service_description = $result['service_description'];
        
    }

    //updajetuje podatke u bazi
    if(isset($_POST['update_service'])){
        
        $service_title = escape($_POST['title']);
        $service_content = escape($_POST['service_description']);
         
        if ($service_title == '' || empty($service_title) || $service_content == '' || empty($service_content)){
            ?>

                <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
               <i class="fa fa-exclamation-triangle mx-2"></i>
                <strong>Greška!</strong> Polja ne mogu biti prazna! <?php echo "<a href='services_projects.php?source=view_services'>Pregled servisa</a>";?></div>

                <?php
         
        }
        else {
            
            $stmt = mysqli_prepare($connection, "UPDATE `service` SET `service_name`=?,`service_description`=? WHERE service_id = $db_service_id");
            
            mysqli_stmt_bind_param($stmt, 'ss', $service_title, $service_content);
            
            mysqli_stmt_execute($stmt);
            
            if(!$stmt){
                die("Nesto nije u redu" . mysqli_error($connection));
            } else {
               
                ?>

                <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
               <i class="fa fa-check mx-2"></i>
                <strong>Uspješno!</strong> Podaci su ažurirani! <?php echo "<a href='services_projects.php?source=view_services'>Pregled servisa</a>";?></div>

                <?php
         
           }
            
       }                      
    }
?>
        
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Servisi</span>
                <h3 class="page-title">Ažuriraj servis</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-9 col-md-12">
               
                  
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                    <form class="" action="" method="post" enctype="multipart/form-data">
                    
                      <input class="form-control form-control-lg mb-3" type="text" placeholder="Naziv servisa ovdje" name="title" value="<?php echo $db_service_name ?>">
                      
                      <label for="editor-container">Opis servisa</label>
                      <textarea name="service_description" id="" cols="" rows="10" class="form-control"><?php echo $db_service_description ?></textarea>
<!--                   interesantan editor, samo ga treba protumaciti   
                       <div id="editor-container" class="add-new-post__editor mb-1"></div>-->
                        <div class="btn_save_project_service">
                          <button class="btn btn-sm btn-accent ml-auto" name="update_service">
                         <i class="material-icons">file_copy</i> Ažuriraj podatke</button>
                        </div>
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
            </div>
          </div>

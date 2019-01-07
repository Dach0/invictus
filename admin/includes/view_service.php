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
?>
        
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Servisi</span>
                <h3 class="page-title">Pregled servis</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-9 col-md-12">
               
                  
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                    <form class="" action="" method="post" enctype="multipart/form-data">
                    
                      <label for="title">Naziv servisa</label>
                      <input class="form-control form-control-lg mb-3" type="text" name="title" value="<?php echo $db_service_name ?>" disabled>
                      
                      <label for="editor-container">Opis servisa</label>
                      <textarea disabled name="service_description" id="" cols="" rows="10" class="form-control"><?php echo $db_service_description ?></textarea>
<!--                   interesantan editor, samo ga treba protumaciti   
                       <div id="editor-container" class="add-new-post__editor mb-1"></div>-->
<!--
                        <div class="btn_save_project_service">
                          <button class="btn btn-sm btn-accent ml-auto" name="update_service">
                         <i class="material-icons">file_copy</i> Ažuriraj podatke</button>
                        </div>
-->
                        <div class="btn_save_project_service">
                        <a href="services_projects.php?source=view_services" class="btn btn-sm btn-accent ml-auto">Nazad na pregled servisa</a>
                        </div>
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
            </div>
          </div>

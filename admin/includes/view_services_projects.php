    
          
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Opšti pregled</span>
                <h3 class="page-title">Servis/projekat</h3>
              </div>
            </div>
            <!-- End Page Header -->
            
            <?php 

            $query = "SELECT project.project_id, project.project_name, project.project_image, project.service_id, service.service_id, service.service_name FROM project LEFT JOIN service ON project.service_id = service.service_id";
            $select_all_projects = mysqli_query($connection, $query);
            confirmQuery($select_all_projects);
                
                while ($row = mysqli_fetch_assoc($select_all_projects)){
                               
                               $project_id = $row['project_id'];
                               $project_name = $row['project_name'];
                               $project_image = $row['project_image'];
                               $service_id = $row['service_id'];
                               $service_name = $row['service_name'];
     
                  ?>         
              
            <div class="row">
              <div class="col-lg-12 col-sm-12 mb-4">
                <div class="card card-small card-post card-post--aside card-post--1">
                  <div class="card-post__image" style="background-image: url('<?php echo "/amplitudo/invictus/images/$project_image" ?>');">
                    <a href="#" class="card-post__category badge badge-pill  
                                     
                    <?php 
                    //mijenja boju pozadine u zavisnosti od servisa, tj poziva klasu koja to radi
                    switch($service_name){
                      case "Mobilne aplikacije" :
                          echo "badge-info";
                          break;
                      case "Web razvoj" :
                          echo "badge-success";
                          break;
                      case "Softveri" :
                          echo "badge-dark";
                          break;
                      default : 
                          echo "badge-warning";
                  }
                                       
                                       
                                       
                    ?>
                    
                    "><?php echo $service_name?></a>
                    <div class="card-post__author d-flex">
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" href="#"><?php echo $project_name ?></a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">Mjesto za neki eventualni tekst o projektu, ako bude postojao.</p>
                    <span class="text-muted">03/01/2019</span>
                  </div>
                        <a class='btn btn-info btn-adopt' href='services_projects.php?source=edit_project&p_id=<?php echo $project_id; ?>'>Edit</a>
                       
                        <form action="" method="post" class="container_btn_del" style="display: flex;">
                        <input type="hidden" name="project_id" value="<?php echo $project_id; ?>">
                            
                        <?php
                            echo "<input class='btn btn-danger btn-adopt' type='submit' name='delete' value='Delete'>";   
                           ?>
                        </form>
                          
                </div>
              </div> 
            </div>
                
          <?php } ?>
          </div>
<?php
    if(isset($_POST['delete'])){
        
        if(isset($_POST['project_id'])){
           
        $the_project_id = $_POST['project_id'];
        $query = "DELETE FROM project WHERE project_id = {$the_project_id}";
        $delete_query = mysqli_query($connection, $query);
        confirmQuery($delete_query);
        echo "Projekat izbrisan";
        header("Location: index.php");
       }     
    }
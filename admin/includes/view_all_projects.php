<?php
    $query = "SELECT project.project_id, project.project_name, project.project_image, project.service_id, service.service_id, service.service_name FROM project LEFT JOIN service ON project.service_id = service.service_id";
    $select_all_projects = mysqli_query($connection, $query);
    confirmQuery($select_all_projects);

    ?>
            <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">projekti</span>
                <h3 class="page-title">Pregled svih projekata</h3>
              </div>
            </div>
            <!-- End Page Header -->
            
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Projekti</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">Ime projekta</th>
                          <th scope="col" class="border-0">Slika</th>
                          <th scope="col" class="border-0">Projekat iz servisa</th>
                          <th scope="col" class="border-0">Pregled</th>
                          <th scope="col" class="border-0">Upravljaj podacima</th>
                          <th scope="col" class="border-0">Uništi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            while ($row = mysqli_fetch_assoc($select_all_projects)){
                               
                               $project_id = $row['project_id'];
                               $project_name = $row['project_name'];
                               $project_image = $row['project_image'];
                               $service_id = $row['service_id'];
                               $service_name = $row['service_name'];


                                echo "<tr>";
                                echo "<td>{$project_id}</td>";
                                echo "<td>{$project_name}</td>";
                                echo "<td><img width=100 src='/amplitudo/invictus/images/{$project_image}' alt=''></td>";
                                echo "<td>{$service_name}</td>";
                                echo "<td><a class='btn btn-primary' href='services_projects.php?source=view_project&p_id={$project_id}'>View complete</a></td>";
                                echo "<td><a class='btn btn-info' href='services_projects.php?source=edit_project&p_id={$project_id}'>Edit</a></td>";
                                ?> 
                               
                            <form action="" method="post">
                            <input type="hidden" name="project_id" value="<?php echo $project_id; ?>">
                            
                        <?php
                            echo "<td><input class='btn btn-danger' type='submit' name='delete' value='Delete'></td>";   
                           ?>
                            </form>
                        <?php
                            echo "</tr>";
                            }
                            ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


<?php
    if(isset($_POST['delete'])){
        
        if(isset($_POST['project_id'])){
           
        $the_project_id = $_POST['project_id'];
        $query = "DELETE FROM project WHERE project_id = {$the_project_id}";
        $delete_query = mysqli_query($connection, $query);
        confirmQuery($delete_query);
        echo "Projekat izbrisan";
        header("Location: services_projects.php?source=view_projects");
       }     
    }
?>
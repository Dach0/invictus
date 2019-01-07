<?php 
            $query = "SELECT * FROM service";
            $select_all_services = mysqli_query($connection, $query);
            confirmQuery($select_all_services);

          ?>
           
           <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">servisi</span>
                <h3 class="page-title">Pregled svih servisa</h3>
              </div>
            </div>
            <!-- End Page Header -->
           
            <div class="row">
              <div class="col">
                <div class="card card-small overflow-hidden mb-4">
                  <div class="card-header bg-dark">
                    <h6 class="m-0 text-white">Servisi</h6>
                  </div>
                  <div class="card-body p-0 pb-3 bg-dark text-center">
                    <table class="table table-dark mb-0">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col" class="border-bottom-0">#</th>
                          <th scope="col" class="border-bottom-0">Vrsta servisa</th>
                          <th scope="col" class="border-bottom-0">Opis servisa</th>
                          <th scope="col" class="border-bottom-0">Pregled</th>
                          <th scope="col" class="border-bottom-0">Upravljaj servisima</th>
                          <th scope="col" class="border-bottom-0">Uništi servis</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            while ($row = mysqli_fetch_assoc($select_all_services)){
                               
                               $service_id = $row['service_id'];
                               $service_name = $row['service_name'];
                               $service_description = substr($row['service_description'],0,80);
                                echo "<tr>";
                                echo "<td>{$service_id}</td>";
                                echo "<td>{$service_name}</td>";
                                echo "<td>{$service_description}</td>";
                                echo "<td><a class='btn btn-primary' href='services_projects.php?source=view_service&s_id={$service_id}'>View complete</a></td>";
                                echo "<td><a class='btn btn-info' href='services_projects.php?source=edit_service&s_id={$service_id}'>Edit</a></td>";
                           ?> 
                               
                            <form action="" method="post">
                            <input type="hidden" name="service_id" value="<?php echo $service_id; ?>">
                            
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
        
       if(isset($_POST['service_id'])){
           
        $the_service_id = $_POST['service_id'];
        $query = "DELETE FROM service WHERE service_id = {$the_service_id}";
        $delete_query = mysqli_query($connection, $query);
        confirmQuery($delete_query);
        echo "Servis izbrisan"; 
       }  
    }
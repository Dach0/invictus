 <!-- Default Light Table Administratori-->
    
            <?php 

            if(isset($_POST['submition'])){
                if(isset($_POST['ckbAdmin'])) {
            ?>
               
               <?php
                
                $query = "SELECT * FROM user";
                $select_all_users = mysqli_query($connection, $query);
                 
                confirmQuery($select_all_users);
              
              ?>
             
               <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Administratori</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">Korisničko ime</th>
                          <th scope="col" class="border-0">Ime</th>
                          <th scope="col" class="border-0">Prezime</th>
                          <th scope="col" class="border-0">Email</th>
                          <th scope="col" class="border-0">Pregled</th>
                          <th scope="col" class="border-0">Upravljaj podacima</th>
                          <th scope="col" class="border-0">Uništi</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                         
                         <?php
                            while ($row = mysqli_fetch_assoc($select_all_users)){
                               
                               $user_id = $row['id'];
                               $username = $row['username'];
                               $user_password = $row['user_password'];
                               $user_firstname = $row['user_firstname'];
                               $user_lastname = $row['user_lastname'];
                               $user_email = $row['user_email'];
                               $user_role = $row['user_role'];
                                
                                echo "<tr>";
                                echo "<td>{$user_id}</td>";
                                echo "<td>{$username}</td>";
                                echo "<td>{$user_firstname}</td>";
                                echo "<td>{$user_lastname}</td>";
                                echo "<td>{$user_email}</td>";
                                echo "<td><a class='btn btn-primary' href='user_profile.php?source=view_complete&u_id={$user_id}'>View complete</a></td>";
                                echo "<td><a class='btn btn-info' href='user_profile.php?source=edit_user&u_id={$user_id}'>Edit</a></td>";
                                ?> 
                               
                                <form action="" method="post">
                                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

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
            <?php }  ?>
            <!-- End Default Light Table Administratori-->
            
            <!-- Default Dark Table Servisi-->
           
          <?php 
            if(isset($_POST['ckbService'])) {

            $query = "SELECT * FROM service";
            $select_all_services = mysqli_query($connection, $query);
            confirmQuery($select_all_services);

          ?>
           
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
            <?php } ?>
            <!-- End Default Dark Table Servisi -->
           <!-- Default Light Table Projekti -->

            <?php 
            if(isset($_POST['ckbProject'])) {

            $query = "SELECT project.project_id, project.project_name, project.project_image, project.service_id, service.service_id, service.service_name FROM project LEFT JOIN service ON project.service_id = service.service_id";
            $select_all_projects = mysqli_query($connection, $query);
            confirmQuery($select_all_projects);

            ?>
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


            <?php } ?>
            <!-- End Default Light Table Projekti-->
            <!-- Default Dark Table Rekli su o nama-->
            <?php 
            if(isset($_POST['ckbComment'])) {
                
            $query = "SELECT * FROM comment_about_us";
            $select_all_comments = mysqli_query($connection, $query);
            confirmQuery($select_all_comments);

            ?>
            <div class="row">
              <div class="col">
                <div class="card card-small overflow-hidden mb-4">
                  <div class="card-header bg-dark">
                    <h6 class="m-0 text-white">Rekli su o nama</h6>
                  </div>
                  <div class="card-body p-0 pb-3 bg-dark text-center">
                    <table class="table table-dark mb-0">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col" class="border-bottom-0">#</th>
                          <th scope="col" class="border-bottom-0">Autor komentara</th>
                          <th scope="col" class="border-bottom-0">Zvanje autora</th>
                          <th scope="col" class="border-bottom-0">Sadržaj komentara</th>
                          <th scope="col" class="border-bottom-0">Datum</th>
                          <th scope="col" class="border-bottom-0">Pregled</th>
                          <th scope="col" class="border-bottom-0">Upravljaj podacima</th>
                          <th scope="col" class="border-bottom-0">Uništi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          
                            while ($row = mysqli_fetch_assoc($select_all_comments)){
                               
                               $comment_id = $row['comment_about_us_id'];
                               $comment_author = $row['comment_author'];
                               $comment_author_title = $row['comment_author_title'];
                               $comment_content = substr($row['comment_content'],0,80);
                               $comment_date = $row['comment_date'];
                               

                                echo "<tr>";
                                echo "<td>{$comment_id}</td>";
                                echo "<td>{$comment_author}</td>";
                                echo "<td>{$comment_author_title}</td>";
                                echo "<td>{$comment_content}</td>";
                                echo "<td>{$comment_date}</td>";
                                echo "<td><a class='btn btn-primary' href='comments_about_us.php?source=view_comment&c_id={$comment_id}'>View complete</a></td>";
                                echo "<td><a class='btn btn-info' href='comments_about_us.php?source=edit_comment&c_id={$comment_id}'>Edit</a></td>";
                                ?> 
                               
                            <form action="" method="post">
                            <input type="hidden" name="comment_id" value="<?php echo $comment_id; ?>">
                            
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
            <?php } ?>
            <!-- End Default Dark Table Rekli su o nama-->
            <!-- Default Light Table Klijenti -->
            
            <?php
            if(isset($_POST['ckbClient'])) {
                $query = "SELECT * FROM client";
                $select_all_clients = mysqli_query($connection, $query);
                confirmQuery($select_all_clients);

            ?>
            
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Klijenti</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">Ime klijenta</th>
                          <th scope="col" class="border-0">Logo</th>
                          <th scope="col" class="border-0">Upravljaj podacima</th>
                          <th scope="col" class="border-0">Uništi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            while ($row = mysqli_fetch_assoc($select_all_clients)){
                               
                               $client_id = $row['client_id'];
                               $client_name = $row['client_name'];
                               $client_logo = $row['client_logo'];

                                echo "<tr>";
                                echo "<td>{$client_id}</td>";
                                echo "<td>{$client_name}</td>";
                                echo "<td><img width=150 src='/amplitudo/invictus/images/{$client_logo}'></td>";
                                echo "<td><a class='btn btn-info' href='clients.php?source=edit_comment&cl_id={$client_id}'>Edit</a></td>";
                                ?> 
                               
                            <form action="" method="post">
                            <input type="hidden" name="client_id" value="<?php echo $client_id; ?>">
                            
                        <?php
                            echo "<td><input class='btn btn-danger' type='submit' name='delete' value='Delete'></td>";   
                           ?>
                            </form>
                        <?php
                            echo "</tr>";
                            }
                            ?>

                        <tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
              <p>Note koji se briše: za klijente je besmisleno praviti dugme view complete budući da klijent ima samo logo i ime.</p>

            <?php } }  ?>
            <!-- End Default Light Table Klijenti-->

<?php
    if(isset($_POST['delete'])){
        
       if(isset($_POST['service_id'])){
           
        $the_service_id = $_POST['service_id'];
        $query = "DELETE FROM service WHERE service_id = {$the_service_id}";
        $delete_query = mysqli_query($connection, $query);
        confirmQuery($delete_query);
        echo "Servis izbrisan"; 
       }
         
       if(isset($_POST['user_id'])){
           
        $the_user_id = $_POST['user_id'];
        $query = "DELETE FROM user WHERE id = {$the_user_id}";
        $delete_query = mysqli_query($connection, $query);
        confirmQuery($delete_query);
        echo "Korisnik izbrisan"; 
       }
        
        if(isset($_POST['project_id'])){
           
        $the_project_id = $_POST['project_id'];
        $query = "DELETE FROM project WHERE project_id = {$the_project_id}";
        $delete_query = mysqli_query($connection, $query);
        confirmQuery($delete_query);
        echo "Projekat izbrisan"; 
       }
        
         if(isset($_POST['comment_id'])){
           
        $the_comment_id = $_POST['comment_id'];
        $query = "DELETE FROM comment_about_us WHERE comment_about_us_id = {$the_comment_id}";
        $delete_query = mysqli_query($connection, $query);
        confirmQuery($delete_query);
        echo "Komentar 'o nama' izbrisan"; 
       }
        
        if(isset($_POST['client_id'])){
           
        $the_client_id = $_POST['client_id'];
        $query = "DELETE FROM client WHERE client_id = {$the_client_id}";
        $delete_query = mysqli_query($connection, $query);
        confirmQuery($delete_query);
        echo "Korisnik izbrisan"; 
       }
        
        
        
    }
?>
<?php

    $query = "SELECT * FROM user";
    $select_all_users = mysqli_query($connection, $query);

    confirmQuery($select_all_users);
  ?>


           
           <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">korisnici</span>
                <h3 class="page-title">Lista administratora</h3>
              </div>
            </div>
            <!-- End Page Header -->
           
             
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
                                echo "<td><a class='btn btn-info' href='tables.php?user_id={$user_id}'>Edit</a></td>";
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

<?php
    if(isset($_POST['delete'])){
        
       if(isset($_POST['user_id'])){
           
        $the_user_id = $_POST['user_id'];
        $query = "DELETE FROM user WHERE id = {$the_user_id}";
        $delete_query = mysqli_query($connection, $query);
        confirmQuery($delete_query);
        header("Location: user_profile.php");
        
       }
    }
?>
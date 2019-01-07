<?php

    if(isset($_POST['add_user'])){
        
        $username = escape($_POST['username']);
        $user_password = escape($_POST['password']);
        $user_firstname = escape($_POST['firstname']);
        $user_lastname = escape($_POST['lastname']);
        $user_email = escape($_POST['email']);
        
        $user_image = $_FILES['image']['name'];
        $user_image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($user_image_tmp, "../images/$user_image");
        
        $user_role = "ADMIN";
        
        if (empty($username) || empty($user_password) || empty($user_firstname) || empty($user_lastname) || empty($user_email)){
                ?>
                <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
               <i class="fa fa-exclamation-triangle mx-2"></i>
                <strong>Greška!</strong> Polja ne mogu biti prazna!</div>

            <?php
         
        } else {
            
            $query = "INSERT INTO `user`( `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`) VALUES (?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($connection, $query);
            mysqli_stmt_bind_param($stmt, 'sssssss', $username, $user_password, $user_firstname, $user_lastname, $user_email, $user_image, $user_role);
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
                <strong>Uspješno!</strong> Dodat je novi administrator! <?php echo "<a href='user_profile.php?source=view_all_users'>Lista administratora</a>";?></div>
                <?php
//                
//                echo "<div class='col-lg-3 col-md-8 mt-3'><p class='bg-success'>Korisnik kreiran.  <a href='user_profile.php?source=view_all_users'>Lista administratora</a></p></div>";
            
            }
            
        }     
        
    }

?>
           

           <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Korisnici</span>
                <h3 class="page-title">Dodaj novog korisnika</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-9">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Detalji</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">Ime</label>
                                <input type="text" class="form-control" id="feFirstName" placeholder="Milivoje" name="firstname"> </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Prezime</label>
                                <input type="text" class="form-control" id="feLastName" placeholder="Milivojevic" name="lastname"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" class="form-control" id="feEmailAddress" placeholder="milivojem@example.com" name="email"> </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Lozinka</label>
                                <input type="password" class="form-control" id="fePassword" placeholder="Password" name="password"> </div>
                            </div>
                            <div class="form-group">
                              <label for="feInputAddress">Korisničko ime</label>
                              <input type="text" class="form-control" id="feInputAddress" placeholder="milijana" name="username"> </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="image">Prikači sliku</label>
                                <input type="file" class="form-control" name="image" id="image">
                              </div>
                            </div>
                            <button type="submit" class="btn btn-accent" name="add_user">Dodaj novog administratora</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
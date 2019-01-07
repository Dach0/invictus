<?php

    if(isset($_SESSION['username'])){

          $db_username = $_SESSION['username'];
          $query = "SELECT * FROM user WHERE username = '$db_username'";
          $select_user = mysqli_query($connection, $query);
        
          confirmQuery($select_user);
        
          $result = mysqli_fetch_assoc($select_user);
        
            $user_id = $result['id']; 
            $username = $result['username'];
            $user_password = $result['user_password'];
            $user_firstname = $result['user_firstname'];
            $user_lastname = $result['user_lastname'];
            $user_email = $result['user_email'];
            $user_image = $result['user_image'];
            $user_role = $result['user_role'];
      }
?>
           

           
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Opšti pregled</span>
                <h3 class="page-title">Korisnički profil</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="rounded-circle" src="../images/<?php echo $user_image; ?>" alt="User Avatar" width="110"> </div>
                    <h4 class="mb-0"><?php echo $user_firstname . ' ' . $user_lastname; ?></h4>
                    <span class="text-muted d-block mb-2"><?php echo $user_role; ?></span>
                     <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                      <i class="material-icons mr-1">person_add</i>Promijeni sliku</button>
                  </div>
<!--
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4">
                      <div class="progress-wrapper">
                        <strong class="text-muted d-block mb-2">Workload</strong>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%;">
                            <span class="progress-value">74%</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item p-4">
                      <strong class="text-muted d-block mb-2">Description</strong>
                      <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</span>
                    </li>
                  </ul>
-->
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Detalji</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">Ime</label>
                                <input type="text" class="form-control" id="feFirstName" placeholder="First Name" value="<?php echo $user_firstname; ?>"> </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Prezime</label>
                                <input type="text" class="form-control" id="feLastName" placeholder="Last Name" value="<?php echo $user_lastname; ?>"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" class="form-control" id="feEmailAddress" placeholder="Email" value="<?php echo $user_email; ?>"> </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Lozinka</label>
                                <input type="password" class="form-control" id="fePassword" placeholder="New password"> </div>
                            </div>
                            <div class="form-group">
                              <label for="feInputAddress">Korisničko ime</label>
                              <input type="text" class="form-control" id="feInputAddress" placeholder="milijana" value="<?php echo $username; ?>"> </div>
                            <div class="form-row">
                            </div>
                            <button type="submit" class="btn btn-accent">Ažuriraj podatke</button>
                            <a class="btn btn-danger" href="user_profile.php">Odustani</a>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
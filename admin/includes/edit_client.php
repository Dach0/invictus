<?php


    //povlaci podatke iz baze koji ce se postaviti na formu
    if(isset($_GET['cl_id'])){
        
        $db_client_id = $_GET['cl_id'];
        
        $query = "SELECT * FROM client where client_id = $db_client_id";
        $select_client = mysqli_query($connection, $query);
        confirmQuery($select_client);
        $result = mysqli_fetch_assoc($select_client);
        
        $db_client_name = $result['client_name'];
        $db_client_logo = $result['client_logo'];
        
    }

    //updajetuje podatke u bazi
    if(isset($_POST['update_client'])){
        
        
        $client_name = escape($_POST['client_name']);
        
        $client_logo = $_FILES['image']['name'];
        $client_logo_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($client_logo_tmp, "../images/$client_logo");
        
        if(empty($client_logo)){
                
                $query = "SELECT client_logo FROM client WHERE client_id = {$db_client_id}";
                $select_image = mysqli_query($connection, $query);
                $row = mysqli_fetch_assoc($select_image);
                $client_logo = $row['client_logo'];
            }
        
        if (empty($client_name) || $client_name == ''){
                ?>
                <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
               <i class="fa fa-exclamation-triangle mx-2"></i>
                <strong>Greška!</strong> Polja ne mogu biti prazna!</div>

            <?php
        } else {
            
            $query = "UPDATE `client` SET `client_name`=?,`client_logo`=? WHERE client_id = $db_client_id";
            $stmt = mysqli_prepare($connection, $query);
            mysqli_stmt_bind_param($stmt, 'ss', $client_name, $client_logo);
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
                <strong>Uspješno!</strong> Podaci o klijentu su ažurirani! <?php echo "<a href='clients.php?source=view_clients'>Pregled klijenata</a>";?></div>
                <?php
            }
            
        }     
        }
?>
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Klijenti</span>
                <h3 class="page-title">Izmijeni podatke o klijentu</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                    <form class="add-new-post" action="" method="post" enctype="multipart/form-data">
                      <label  class="d-block">Ime klijenta</label>
                      <input class="form-control form-control-lg mb-3" type="text" name="client_name" value="<?php echo $db_client_name; ?>">
                      <div class="form-group">
                        <img width=150 src="/amplitudo/invictus/images/<?php echo $db_client_logo; ?>" alt="">
                        <label for="image" class="d-block">Zamijeni logo</label>
                        <input type="file" class="form-control" name="image">
                      </div>
                      <div class="btn_save_project_service">
                          <button class="btn btn-sm btn-accent ml-auto" name="update_client">
                          <i class="material-icons">file_copy</i> Ažuriraj podatke</button>
                           <a class="btn btn-danger ml-1" href="clients.php">Odustani</a>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
            </div>
            
            <p>Note koji se briše: za klijente je besmisleno praviti dugme view complete budući da klijent ima samo logo i ime.</p>

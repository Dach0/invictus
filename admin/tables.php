<?php include "includes/header.php" ?>
       
       
        <!-- Main Sidebar -->
         <?php include "includes/main_sidebar.php" ?>
        <!-- End Main Sidebar -->
        
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
           
            <!-- Main Navbar -->
               <?php include "includes/main_navbar.php" ?>
            <!-- / .main-navbar -->
            
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->

        
            <div class="page-header row no-gutters py-4">
             <form action="" method="post">
                  <div class="col-lg-12 col-sm-4 text-center text-sm-left mb-0">
                   <div class="table_text">
                    <span class="text-uppercase page-subtitle">Pregled</span>
                    <h3 class="page-title">Tabelarni prikaz podataka</h3>
                   </div>
                    <div class="show_tables">
                        <ul>
                            <li><label for="selectAllTables"><input type="checkbox" id="selectAllTables"> Sve tabele</label></li>
                            <li><label for="ckbAdmin"><input class="checkBox" type="checkbox" id="ckbAdmin" name="ckbAdmin" value="admin"> Administratori</label></li>
                            <li><label for="ckbService"><input class="checkBox" type="checkbox" id="ckbService" name="ckbService" value="service"> Servisi</label></li>
                            <li><label for="ckbProject"><input class="checkBox" type="checkbox" id="ckbProject" name="ckbProject" value="project"> Projekti</label></li>
                            <li><label for="ckbComment"><input class="checkBox" type="checkbox" id="ckbComment" name="ckbComment" value="comment_about_us"> Rekli su o nama</label></li>
                            <li><label for="ckbClient"><input class="checkBox" type="checkbox" id="ckbClient" name="ckbClient" value="clients"> Klijenti</label></li>
                        </ul>
                    </div>
                        <input type="submit" name="submition" class="btn btn-success" value="Prikaži">
                  </div>
              </form>
            </div>
            <!-- End Page Header -->
    
            <!-- Content -->
            
            <?php include "includes/view_all_tables.php"?>
            
            
            
            <!-- /Content -->
           
           
          </div>
          </div>
          <!-- footer  -->
<?php include "includes/footer.php";?>
<!--/.footer  -->
<?php include "includes/header.php" ?>
    <div class="container-fluid">
      <div class="row">
       
       
        <!-- Main Sidebar -->
       <?php include "includes/main_sidebar.php" ?>
        <!-- End Main Sidebar -->
        
        
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
           
            <!-- Main Navbar -->
                <?php include "includes/main_navbar.php" ?>
            <!-- / .main-navbar -->
           
            <div class="main-content-container px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Opšti pregled</span>
                <h3 class="page-title">Statistika</h3>
              </div>
            </div>
            <!-- End Page Header -->
             
            <!-- Small Stats Blocks -->
           <?php include "includes/statistic_blocks.php" ?>
            <!-- End Small Stats Blocks -->
          </div>
          </div>
          
          <?php include "includes/view_services_projects.php" ?>
<!-- footer  -->
<?php include "includes/footer.php";?>
<!--/.footer  -->
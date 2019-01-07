<?php include "includes/header.php" ?>    
       
        <!-- Main Sidebar -->
         <?php include "includes/main_sidebar.php" ?>
        <!-- End Main Sidebar -->
        
          <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
           
           
            <!-- Main Navbar -->
             <?php include "includes/main_navbar.php" ?>
          <!-- / .main-navbar -->
          
           
            
            <!--Content -->
            
             <?php
                    
                    if(isset($_GET['source'])){
                        $source = $_GET['source'];
                    } 
                    else {  
                        $source = '';
                    }
                    
                    switch ($source){
                            
                        case "view_services":
                            include "includes/view_all_services.php";
                            break;
                            
                        case "view_service":
                            include "includes/view_service.php";
                            break;
                             
                        case "add_service":
                            include "includes/add_new_service.php";
                            break;
                        
                        case "edit_service":
                            include "includes/edit_service.php";
                            break;
                            
                        case "view_projects":
                            include "includes/view_all_projects.php";
                            break;
                            
                        case "view_project":
                            include "includes/view_project.php";
                            break;
                            
                        case "add_project":
                            include "includes/add_new_project.php";
                            break;
                            
                        case "edit_project":
                            include "includes/edit_project.php";
                            break;
                        
                        default :
                            
                            include "includes/view_services_projects.php";
                            
                        break;
                         
                    }
            
                    ?>
         
        <!-- /Content -->
              
          </div>
<!-- footer  -->
<?php include "includes/footer.php";?>
<!--/.footer  -->
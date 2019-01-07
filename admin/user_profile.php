<?php include "includes/header.php" ?>
       
        <!-- Main Sidebar -->
        <?php include "includes/main_sidebar.php" ?>
        <!-- End Main Sidebar -->
        
        
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
           
           
            <!-- Main Navbar -->
                <?php include "includes/main_navbar.php" ?>
            <!-- / .main-navbar -->
            
          <?php
    
                 if(isset($_GET['source'])){
                        
                        $source = $_GET['source'];
                      
                    } 
                    
                    else {
                        
                        $source = '';
                    }
                    
                    switch ($source){
                        
                        case "edit_profile":
                            include "includes/edit_user_profile.php";
                            break;
                         
                        case "add_user":
                            include "includes/add_new_user.php";
                            break;
                        
                        default :
                            include "includes/view_all_users.php";
                        break;
                            
                            
                    } 
    
    
    
    
            ?>
          </div>
          
<!-- footer  -->
<?php include "includes/footer.php";?>
<!--/.footer  -->
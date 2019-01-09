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
            
            <!--Content -->
            
            <?php
                    
                    if(isset($_GET['source'])){
                        
                        $source = $_GET['source'];
                      
                    } 
                    
                    else {
                        
                        $source = '';
                    }
                    
                    switch ($source){
                        
                        case "add_comment":
                            include "includes/add_new_comment.php";
                            break;
                            
                        case "edit_comment":
                            include "includes/edit_comment.php";
                            break;
                            
                        case "view_comment":
                            include "includes/view_comment.php";
                            break;
                        
                        default :
                            
                            include "includes/view_all_comments.php";
                            
                        break;
                            
                            
                    } 
                ?>
            
        <!-- /Content -->
              
          </div>
<!-- footer  -->
<?php include "includes/footer.php";?>
<!--/.footer  -->
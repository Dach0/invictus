   <?php

if(isset($_GET['c_id'])){
        
        $db_comment_about_us_id = $_GET['c_id'];
        
        $query = "SELECT * FROM comment_about_us WHERE comment_about_us_id = $db_comment_about_us_id";
        $select_comment = mysqli_query($connection, $query);
        confirmQuery($select_comment);
        $result = mysqli_fetch_assoc($select_comment);  

        $db_comment_author_image = $result['comment_author_image'];
        $db_comment_author = $result['comment_author'];
        $db_comment_author_title = $result['comment_author_title'];
        $db_comment_content = $result['comment_content'];
        $db_comment_date = $result['comment_date'];
        
    
    }

    ?>
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Komentari</span>
                <h3 class="page-title">Pregled komentara</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                    <form class="add-new-post" action="" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <img width=150 src="/amplitudo/invictus/images/<?php echo $db_comment_author_image ?>" alt="">
                      </div>
                      <label for="">Ime autora</label>
                      <input disabled class="form-control form-control-lg mb-3" type="text" name="comment_author" value="<?php echo $db_comment_author ?>">
                      <label for="">Zvanje autora</label>
                      <input disabled class="form-control form-control-lg mb-3" type="text" name="comment_author_title" value="<?php echo $db_comment_author_title ?>">
                      <label for="editor-container">Sadržaj komentara</label>
                      <textarea disabled name="comment_content" id="" cols="" rows="10" class="form-control"><?php echo $db_comment_content ?></textarea>
                      <br>
                      <label for="">Datum poslednjeg ažuriranja komentara</label>
                      <input disabled class="form-control form-control-lg mb-3" type="text" value="<?php echo $db_comment_date ?>">
                     
<!--                      <div id="editor-container" class="add-new-post__editor mb-1"></div>-->
                      <div class="btn_save_project_service">
                        <a href="comments_about_us.php?source=view_comments" class="btn btn-sm btn-accent ml-auto">Nazad na tabelu komentara</a>
                        </div>
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
            </div>

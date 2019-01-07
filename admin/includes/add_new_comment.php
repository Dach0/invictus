   <?php

    if(isset($_POST['create_comment'])){
        
        
        $author_image = $_FILES['image']['name'];
        $author_image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($author_image_tmp, "../images/$author_image");
        
        $comment_author = escape($_POST['comment_author']);
        $comment_author_title = escape($_POST['comment_author_title']);
        $comment_content = escape($_POST['comment_content']);
      //  $comment_date = date();
        
        if (empty($comment_author) || empty($comment_content)){
            ?>
                <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
               <i class="fa fa-exclamation-triangle mx-2"></i>
                <strong>Greška!</strong> Polja ne mogu biti prazna!</div>

            <?php
         
        } else {
            
            $query = "INSERT INTO `comment_about_us`(`comment_author_image`, `comment_author`, `comment_author_title`, `comment_content`, `comment_date`) VALUES (?,?,?,?,now())";
            $stmt = mysqli_prepare($connection, $query);
            mysqli_stmt_bind_param($stmt, 'ssss', $author_image, $comment_author, $comment_author_title, $comment_content);
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
                <strong>Uspješno!</strong> Dodat je novi komentar! <?php echo "<a href='comments_about_us.php'>Pregled komentara</a>";?></div>
                <?php
            }
            
        }     
        }
    ?>
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Komentari</span>
                <h3 class="page-title">Dodaj novi komentar</h3>
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
                        <label for="image">Izaberi sliku autora</label>
                        <input type="file" class="form-control" name="image">
                      </div>
                      <input class="form-control form-control-lg mb-3" type="text" name="comment_author" placeholder="Ime autora komentara">
                      <input class="form-control form-control-lg mb-3" type="text" name="comment_author_title" placeholder="Zvanje">
                      <label for="editor-container">Sadržaj komentara</label>
                      <textarea name="comment_content" id="" cols="" rows="10" class="form-control"></textarea>
                     
<!--                      <div id="editor-container" class="add-new-post__editor mb-1"></div>-->
                      <div class="btn_save_project_service">
                          <button class="btn btn-sm btn-accent ml-auto" name="create_comment">
                          <i class="material-icons">file_copy</i> Sačuvaj</button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
            </div>

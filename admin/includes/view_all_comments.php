<?php 
                
            $query = "SELECT * FROM comment_about_us";
            $select_all_comments = mysqli_query($connection, $query);
            confirmQuery($select_all_comments);

            ?>
             <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Komentari</span>
                <h3 class="page-title">Pregled svih komentara</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col">
                <div class="card card-small overflow-hidden mb-4">
                  <div class="card-header bg-dark">
                    <h6 class="m-0 text-white">Rekli su o nama</h6>
                  </div>
                  <div class="card-body p-0 pb-3 bg-dark text-center">
                    <table class="table table-dark mb-0">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col" class="border-bottom-0">#</th>
                          <th scope="col" class="border-bottom-0">Autor komentara</th>
                          <th scope="col" class="border-bottom-0">Zvanje autora</th>
                          <th scope="col" class="border-bottom-0">Sadržaj komentara</th>
                          <th scope="col" class="border-bottom-0">Datum</th>
                          <th scope="col" class="border-bottom-0">Upravljaj podacima</th>
                          <th scope="col" class="border-bottom-0">Uništi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          
                            while ($row = mysqli_fetch_assoc($select_all_comments)){
                               
                               $comment_id = $row['comment_about_us_id'];
                               $comment_author = $row['comment_author'];
                               $comment_author_title = $row['comment_author_title'];
                               $comment_content = substr($row['comment_content'],0,80);
                               $comment_date = $row['comment_date'];
                               

                                echo "<tr>";
                                echo "<td>{$comment_id}</td>";
                                echo "<td>{$comment_author}</td>";
                                echo "<td>{$comment_author_title}</td>";
                                echo "<td>{$comment_content}</td>";
                                echo "<td>{$comment_date}</td>";
                                echo "<td><a class='btn btn-info' href='comments_about_us.php?source=edit_comment&c_id={$comment_id}'>Edit</a></td>";
                                ?> 
                               
                            <form action="" method="post">
                            <input type="hidden" name="comment_id" value="<?php echo $comment_id; ?>">
                            
                        <?php
                            echo "<td><input class='btn btn-danger' type='submit' name='delete' value='Delete'></td>";   
                           ?>
                            </form>
                        <?php
                            echo "</tr>";
                            }
                            ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
<?php
    if(isset($_POST['delete'])){
        
         if(isset($_POST['comment_id'])){
           
        $the_comment_id = $_POST['comment_id'];
        $query = "DELETE FROM comment_about_us WHERE comment_about_us_id = {$the_comment_id}";
        $delete_query = mysqli_query($connection, $query);
        confirmQuery($delete_query);
        header("Location: comments_about_us.php");
       }
    }
?>
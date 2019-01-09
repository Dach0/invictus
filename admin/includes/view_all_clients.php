            <?php
                $query = "SELECT * FROM client";
                $select_all_clients = mysqli_query($connection, $query);
                confirmQuery($select_all_clients);
            ?>

           
           <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">klijenti</span>
                <h3 class="page-title">Lista klijenata</h3>
              </div>
            </div>
            <!-- End Page Header -->
           
            
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Klijenti</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">Ime klijenta</th>
                          <th scope="col" class="border-0">Logo</th>
                          <th scope="col" class="border-0">Upravljaj podacima</th>
                          <th scope="col" class="border-0">Uništi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            while ($row = mysqli_fetch_assoc($select_all_clients)){
                               
                               $client_id = $row['client_id'];
                               $client_name = $row['client_name'];
                               $client_logo = $row['client_logo'];

                                echo "<tr>";
                                echo "<td>{$client_id}</td>";
                                echo "<td>{$client_name}</td>";
                                echo "<td><img width=150 src='/amplitudo/invictus/images/{$client_logo}'></td>";
                                echo "<td><a class='btn btn-info' href='clients.php?source=edit_comment&cl_id={$client_id}'>Edit</a></td>";
                                ?> 
                               
                            <form action="" method="post">
                            <input type="hidden" name="client_id" value="<?php echo $client_id; ?>">
                            
                        <?php
                            echo "<td><input class='btn btn-danger' type='submit' name='delete' value='Delete'></td>";   
                           ?>
                            </form>
                        <?php
                            echo "</tr>";
                            }
                            ?>

                        <tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
              <p>Note koji se briše: za klijente je besmisleno praviti dugme view complete budući da klijent ima samo logo i ime.</p>

<?php
if(isset($_POST['delete'])){
    
    if(isset($_POST['client_id'])){
           
        $the_client_id = $_POST['client_id'];
        $query = "DELETE FROM client WHERE client_id = {$the_client_id}";
        $delete_query = mysqli_query($connection, $query);
        confirmQuery($delete_query);
        header("Location: clients.php"); 
       }
}
?>
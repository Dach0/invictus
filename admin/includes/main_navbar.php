     <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
      <form action="search.php" method="post" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
        <div class="input-group input-group-seamless ml-3">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-search"></i>
            </div>
          </div>
          <input class="navbar-search form-control" type="text" placeholder="Traži projekat" aria-label="Search" name="search_keyword"> </div>
      </form>
      <ul class="navbar-nav border-left flex-row ">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
           <span>Dobrodošli na admin stranicu</span>
           
           <?php 
              if(isset($_SESSION['username'])){
                  
                  $db_username = $_SESSION['username'];
                  $query = "SELECT user_image FROM user WHERE username = '$db_username'";
                  $select_image = mysqli_query($connection, $query);
                  $result = mysqli_fetch_array($select_image);
                  
              }
              
              else {
                  $result['user_image'] = "";
                  $db_username = "Nijeste ulogovani";   
              }
              
              ?>
           
            <img class="user-avatar rounded-circle mr-2" src="/amplitudo/invictus/images/<?php echo $result['user_image']; ?>" alt="User Avatar">
            
            
            <span class="d-none d-md-inline-block"><?php echo $db_username; ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-small">
            <a class="dropdown-item" href="user_profile.php?source=edit_profile">
              <i class="material-icons">&#xE7FD;</i> Profil</a>
<!--
            <a class="dropdown-item" href="add-new-post.php">
              <i class="material-icons">note_add</i> Dodaj novi servis/projekat</a>
-->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="../includes/logout.php">
              <i class="material-icons text-danger">&#xE879;</i> Logout </a>
          </div>
        </li>
      </ul>
      <nav class="nav">
        <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
          <i class="material-icons">&#xE5D2;</i>
        </a>
      </nav>
    </nav>
  </div>
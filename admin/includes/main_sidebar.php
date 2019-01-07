 <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1">Admin Dashboard</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <i class="material-icons">edit</i>
                  <span>Statistika</span>
                </a>
              </li>
            <!--  Servisi/projekti  -->
              <li class="nav-item">
                <a class="nav-link" href="services_projects.php" data-toggle="collapse" data-target="#services_projects"><i class="fa fa-fw fa-caret-down"></i> Servisi/projekti </a>
                <ul id="services_projects" class="collapse">
                  <li class="nav-item">
                    <a class="nav-link " href="services_projects.php?source=view_services">
                      <i class="material-icons">vertical_split</i>
                      <span>Pregled servisa</span>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link " href="services_projects.php?source=add_service">
                      <i class="material-icons">note_add</i>
                      <span>Dodaj novi servis</span>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link " href="services_projects.php?source=view_projects">
                      <i class="material-icons">vertical_split</i>
                      <span>Pregled projekata</span>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link " href="services_projects.php?source=add_project">
                      <i class="material-icons">note_add</i>
                      <span>Dodaj novi projekat</span>
                    </a>
                  </li>
                </ul>
            </li>
             <!--  /.Servisi/projekti  -->
             
             <!--  Rekli su o nama  -->
              <li class="nav-item">
                <a class="nav-link" href="services_projects.php" data-toggle="collapse" data-target="#comments_about_us"><i class="fa fa-fw fa-caret-down"></i> Rekli su o nama </a>
                <ul id="comments_about_us" class="collapse">
                   <li class="nav-item">
                    <a class="nav-link " href="comments_about_us.php">
                      <i class="material-icons">record_voice_over</i>
                      <span>Pregled komentara o nama</span>
                    </a>
                    <li class="nav-item">
                    <a class="nav-link " href="comments_about_us.php?source=add_comment">
                      <i class="material-icons">note_add</i>
                      <span>Dodaj novi komentar</span>
                    </a>
                </ul>
            </li>
             <!--  /.Rekli su o nama  -->
             
             <!--  Klijenti  -->
              <li class="nav-item">
                <a class="nav-link" href="services_projects.php" data-toggle="collapse" data-target="#clients"><i class="fa fa-fw fa-caret-down"></i> Klijenti </a>
                <ul id="clients" class="collapse">
                     <li class="nav-item">
                        <a class="nav-link " href="clients.php">
                          <i class="material-icons">business_center</i>
                          <span>Pregled klijenata</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="clients.php?source=add_client">
                          <i class="material-icons">note_add</i>
                          <span>Dodaj klijenta</span>
                        </a>
                      </li>
                </ul>
            </li>
             <!--  /Klijenti  -->
              
              
              <li class="nav-item">
                <a class="nav-link " href="tables.php">
                  <i class="material-icons">table_chart</i>
                  <span>Tabele</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="javascript:;" data-toggle="collapse" data-target="#profiles"><i class="fa fa-fw fa-caret-down"></i> Korisnici </a>
                <ul id="profiles" class="collapse">
                    <li class="nav-item">
                        <a class="nav-link " href="user_profile.php">
                          <i class="material-icons">vertical_split</i>
                          <span>Lista administratora</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="user_profile.php?source=edit_profile">
                          <i class="material-icons">person</i>
                          <span>Korisnički profil</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="user_profile.php?source=add_user">
                          <i class="material-icons">person_add</i>
                          <span>Dodaj novog korisnika</span>
                        </a>
                    </li>
                </ul>
            </li>
          
              <li class="nav-item">
                <a class="nav-link " href="errors.php">
                  <i class="material-icons">error</i>
                  <span>Errors</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
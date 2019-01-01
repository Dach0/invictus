<!-- Header -->
<?php include "includes/header.php"?>
 
<!--Navigation -->
<?php include "includes/navigation.php"?>
 
<!--  Home
  ============================================ -->
   
   <section id="home">
       
       <div id="home-left-content">
           <h1>LOREM IPSUM DOLOREM</h1>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni consectetur necessitatibus incidunt dolorem nam cumque blanditiis ex distinctio, error perferendis ab consequuntur quibusdam, repellat sed voluptate dicta similique reiciendis. Maxime?</p>
           <button class="btnForm">Zakaži sastanak</button>
       </div >
       
       
       <div id="home-right-content">
           <img src="images/header.png" alt="">
       </div>
       

   </section>
   
   <!--  /HOME
  ============================================ -->
   
   
   <!--  Services
  ============================================ -->
   
   <section id="services">
       
    <!-- Section header and navigation -->
        
       <div id="sectionNav">

        <!-- logo -->
        <div class="resetBorders">
            <a href="">
                <img id="logo" src="images/logo.png" alt="">
            </a>
        </div>
        <!-- end of logo -->

        <!-- Navigation -->
           <nav>
               <ul class="navigation">
                <li><a href="">Početna</a></li>
                <li><a href="#">Usluge</a></li>
                <li><a href="">Rekli su o nama</a></li>
                <li><a href="">Klijenti</a></li>
                <li><a href="">Kontakt</a></li>
                <li><a href="login.php">Login</a></li>
               </ul>
           </nav>
        <!--  /Navigation -->
    </div>
    <!-- /Section header and navigation -->
    
    <!--  Services content   -->
       <div id="servicces-left-content">
         
    <!--  Slider dots -->
          <ul class="slides">
           
            <input type="radio" name="radio-btn" id="img-1" checked />
            <li class="slide-container">
                <div class="slide">
                    <img src="images/mobileapp-development.png" />
                </div>
            </li>

            <input type="radio" name="radio-btn" id="img-2" />
            <li class="slide-container">
                <div class="slide">
                  <img src="http://farm9.staticflickr.com/8504/8365873811_d32571df3d_z.jpg" />
                </div>
            </li>

            <input type="radio" name="radio-btn" id="img-3" />
            <li class="slide-container">
                <div class="slide">
                  <img src="http://farm9.staticflickr.com/8068/8250438572_d1a5917072_z.jpg" />
                </div>
            </li>

            <li class="nav-dots">
              <label for="img-1" class="nav-dot" id="img-dot-1"></label>
              <label for="img-2" class="nav-dot" id="img-dot-2"></label>
              <label for="img-3" class="nav-dot" id="img-dot-3"></label>
            </li>
        </ul>
        <!-- /Slider dots -->
          
           <img src="" alt="">
       </div>
       
       
       <div id="services-right-content">
           <h1>MOBILNE</h1>
           <h2>APLIKACIJE</h2>
           <img class="picWave" src="images/wave.png" alt="">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni consectetur necessitatibus incidunt dolorem nam cumque blanditiis ex distinctio, error perferendis ab consequuntur quibusdam, repellat sed voluptate dicta similique reiciendis. Maxime?</p>
           <button class="btnForm">Pošalji upit</button>    
       </div >
       
       <div class="pagination">
           <ul>
               <li><a href="">&FilledSmallSquare;</a></li>
               <li><a href="">&FilledSmallSquare;</a></li>
               <li><a href="">&FilledSmallSquare;</a></li>
           </ul>
       </div>
    <!-- /Services content -->
       
   </section>
   
   <!--  /Services
  ============================================ -->
   
   
<!--  They say about us
  ============================================ -->
  
   <section class="roumors">
    <!--  Roumors header -->
       <div id="roumors-header">
           <h1>REKLI SU</h1>
           <h1>O NAMA</h1>
           <img class="picWave" src="images/wave.png" alt="">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni consectetur necessitatibus incidunt dolorem nam cumque blanditiis ex distinctio.</p>
       </div >
    <!--  /Roumors header -->
       
       
    <!-- Slider "about us" -->
        <section id="comments-about-us">
            <div></div>
            <div><a href=""><img class="arrow" src="images/array-left.png" alt=""></a></div>
            <div></div>
            <div><a href=""><img class="arrow" src="images/array-right.png" alt=""></a></div>
            <div></div>
        </section>
    <!-- Slider "about us" -->
          
   </section> 

<!--  /They say about us
  ============================================ -->
   

<?php include "includes/footer.php" ?>
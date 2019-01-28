<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,700"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/boot-and-scroll.css" />
    <link href="css/onepage-scroll.css" rel="stylesheet" type="text/css" />

    <title>Invictus</title>
  </head>
  <body>
    <div class="main">
      <section
        id="home-section"
        class="d-flex flex-column justify-content-center align-items-stretch"
      >
        <nav id="navbar-home" class="navbar navbar-expand-lg navbar-dark navbar-fixed-top">
          <div class="container">
            <a href="" class="navbar-brand"
              ><img src="images/logo.png" alt=""
            /></a>
            <buttton
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navbarCollapse"
            >
              <span class="navbar-toggler-icon"></span
            ></buttton>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav ml-auto">
                <li class="navbar-item">
                  <a href="#home-section" class="nav-link">Početna</a>
                </li>
                <li class="navbar-item">
                  <a href="#services-section" class="nav-link">Usluge</a>
                </li>
                <li class="navbar-item">
                  <a href="#they-say-about-us-section" class="nav-link"
                    >Rekli su o nama</a
                  >
                </li>
                <li class="navbar-item">
                  <a href="#client-section" class="nav-link">Klijenti</a>
                </li>
                <li class="navbar-item">
                  <a href="#contact-section" class="nav-link">Kontakt</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- HOME SECTION -->
        <div class="d-flex flex-wrap">
          <div id="hs-left-content" class="d-flex flex-column justify-content-center col-md-5 p-5">
            <h1 class="mt-3"><strong>LOREM IPSUM DOLOR</strong></h1>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Asperiores corporis dignissimos ipsam voluptas, quia hic?
            </p>
            <button class="btn-schedule">Zakaži sastanak</button>
          </div>
          <div class="col-md-7 px-5">
            <img class="img-fluid" src="images/header.png" alt="" />
          </div>
        </div>
        <div class="d-flex p-3 justify-content-center">
          <div class="chevron"></div>
          <div class="chevron"></div>
          <div class="chevron"></div>
          <span class="text">Scroll down</span>
        </div>
      </section>

      <!-- VIDEO SECTION -->
      <section class="video section active">
        <video muted loop id="myVideo">
          <source src="video/earth.mp4" type="video/mp4" />
          Your browser does not support HTML5 video.
        </video>
        <div class="video-overlay d-flex justify-content-center">
          <button id="myBtn" onclick="myFunction()">
            <i id="play-icon" class="fas fa-play fa-3x"></i>
          </button>
        </div>
      </section>

      <!-- SECTION SERVICES -->

      <section
        id="services-section"
        class="d-flex flex-column justify-content-center align-items-stretch"
      >
        <nav id="navbar-services" class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a href="" class="navbar-brand"
              ><img src="images/logo.png" alt=""
            /></a>
            <buttton
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navbarCollapseSticky"
            >
              <span class="navbar-toggler-icon"></span
            ></buttton>
            <div class="collapse navbar-collapse" id="navbarCollapseSticky">
              <ul class="navbar-nav ml-auto">
                <li class="navbar-item">
                  <a href="#home-section" class="nav-link">Početna</a>
                </li>
                <li class="navbar-item">
                  <a href="#services-section" class="nav-link">Usluge</a>
                </li>
                <li class="navbar-item">
                  <a href="#they-say-about-us-section" class="nav-link"
                    >Rekli su o nama</a
                  >
                </li>
                <li class="navbar-item">
                  <a href="#client-section" class="nav-link">Klijenti</a>
                </li>
                <li class="navbar-item">
                  <a href="#contact-section" class="nav-link">Kontakt</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- left content -->
        <div class="d-flex flex-wrap">
          <div
            class="d-flex flex-column justify-content-center col-lg-6 col-md-5 pl-5"
          >
            <div id="slider2" class="carousel slide m-5" data-ride="carousel">
              <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="0"
                    class="active"
                  ></li>
                  <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="1"
                  ></li>
                  <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="2"
                  ></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      class="img-fluid d-block w-100"
                      src="images/mobileapp-development.png"
                      alt="First slide"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      class="img-fluid d-block w-100"
                      src="images/mobileapp-development1.png"
                      alt="Second slide"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      class="img-fluid d-block w-100"
                      src="images/mobileapp-development2.png"
                      alt="Third slide"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- right cotent -->
          <div class="d-flex align-items-center col-lg-6 col-md-7 px-5">
            <div
              id="s-content"
              class="col-11 services-content-all"
              data-spy="scroll"
              data-target="#service-nav-navbar"
              data-offset="0"
            >
              <div id="service-content1" class="display-service-content">
                <h1>
                  MOBILNE <br />
                  <span class="label-sm">APLIKACIJE</span>
                </h1>
                <img class="mb-3" src="images/wave.png" alt="" />
                <p class="text-muted">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Vitae, consectetur similique esse excepturi omnis assumenda
                  voluptatum deserunt delectus voluptatibus nobis.
                </p>
                <button class="btn-schedule" data-toggle="modal" data-target="#upit">Pošalji upit</button>
              </div>
             
              <div id="service-content2" class="display-service-content">
                <h1>
                  WEB <br />
                  <span class="label-sm">RAZVOJ</span>
                </h1>
                <img class="mb-3" src="images/wave.png" alt="" />
                <p class="text-muted">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Vitae, consectetur similique esse excepturi omnis assumenda
                  voluptatum deserunt delectus voluptatibus nobis.
                </p>
                <button class="btn-schedule">Pošalji upit</button>
              </div>
              <div id="service-content3" class="display-service-content">
                <h1>
                  SOFTVERI <br />
                  <span class="label-sm"></span>
                </h1>
                <img class="mb-3" src="images/wave.png" alt="" />
                <p class="text-muted">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Vitae, consectetur similique esse excepturi omnis assumenda
                  voluptatum deserunt delectus voluptatibus nobis.
                </p>
                <button class="btn-schedule">Pošalji upit</button>
              </div>
            </div>
            <div id="services-nav" class="col-1 d-flex align-items-center">
              <ul id="service-nav-navbar" class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="#service-content1">&#9632;</a>
                </li>
                <li class="nav-item">
                  <a data-scroll class="nav-link" href="#service-content2">&#9632;</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#service-content3">&#9632;</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- REKLI SU O NAMA -->

      <section id="they-say-about-us-section" class="comments-section">
        <div class="container">
          <div class="comments-title d-flex flex-column">
            <h1>
              REKLI SU <br />
              O NAMA
            </h1>
            <div>
            <img src="images/wave.png" alt="" />
          </div>
            <div class="title-comment">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta
                beatae minima recusandae repudiandae, dignissimos eaque!
              </p>
            </div>
          </div>

          <!-- slider -->

          <div class="row justify-content-center p-5">
            <div
              id="slider-comments"
              class="carousel slide"
              data-ride="carousel"
            >
              <ol id="carousel-indicators-position" class="carousel-indicators">
                <li
                  class="active"
                  data-target="#slider-comments"
                  data-slide-to="0"
                ></li>
                <li data-target="#slider-comments" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div id="card-wrapper">
                    <div class="card">
                      <div class="card-body d-flex flex-column">
                        <div id="card-heading" class="row">
                          <img class="avatar" src="images/avatar.png" alt="" />
                          <div>
                            <h2><strong>Richard Parker</strong></h2>
                            <h4>Neki djavo at Pakao</h4>
                          </div>
                        </div>
                        <div class="card-body">
                          <div style="height: 130px;">
                            <p>
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Consequuntur laudantium necessitatibus
                              eveniet maxime fuga? Impedit nam nisi consectetur
                              quia obcaecati quas, provident ea!
                            </p>
                          </div>
                          <div class="stretch-up">
                            <p class="">3:50 AM - 10 Jul 1985</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div id="card-wrapper">
                    <div class="card">
                      <div class="card-body d-flex flex-column">
                        <div id="card-heading" class="row">
                          <img class="avatar" src="images/avatar.png" alt="" />
                          <div>
                            <h2><strong>Nesko Neskovic</strong></h2>
                            <h4>CEO at BlaBlah</h4>
                          </div>
                        </div>
                        <div class="card-body">
                          <div style="height: 130px;">
                            <p>
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Consequuntur laudantium necessitatibus
                              eveniet maxime fuga? Impedit nam nisi consectetur
                              quia obcaecati quas, provident ea!
                            </p>
                          </div>
                          <div class="stretch-up">
                            <p class="">3:50 AM - 10 Jul 1985</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- slider controls -->
              <a
                href="#slider-comments"
                class="carousel-control-prev"
                data-slide="prev"
                ><span class="next-icon-color"
                  ><i class="fas fa-chevron-circle-left fa-3x"></i></span
              ></a>
              <a
                href="#slider-comments"
                class="carousel-control-next"
                data-slide="next"
                ><span class="next-icon-color"
                  ><i class="fas fa-chevron-circle-right fa-3x"></i></span
              ></a>
            </div>
          </div>
        </div>
      </section>

      <!-- CLIENTS -->

      <section
        id="client-section"
        class="d-flex flex-column align-items-stretch justify-content-between"
      >
        <div><h1 id="client-heading" class="container">KLIJENTI</h1>
          <div class="client-section-header">
            <div class="container">
              <img src="images/wave.png" alt="" />
            </div>
          </div>
        </div>
          <div class="client-section-body">
          <div
            class="d-flex flex-wrap align-items-center justify-content-around"
          >
            <img src="images/trust.png" alt="" />
            <img src="images/sabre-bw.png" alt="" />
            <img src="images/bookassist.png" alt="" />
            <img src="images/innquest.jpg" alt="" />
            <img src="images/idiso-bw.png" alt="" />
          </div>
        </div>

        <div class="footer">
          <footer id="main-footer">
            <div class="container">
              <div class="row">
                <div id="footer-content" class="col text-center py-4">
                  <img id="footer-logo" src="images/logo-white.png" alt="">
                  <p>Murtezira Karađuzovića br. 5, Podgorica</p>
                  <p><strong>+382 67 807 144</strong></p>
                  <p>info@invictusdev.me</p>
                  <div id="footer-icon-container" class="d-flex justify-content-center">
                    <div class="footer-icon">
                      <p><i class="fab fa-facebook-f"></i> 
                    </div>
                    <div class="footer-icon">
                      <p><i class="fab fa-instagram"></i></i> 
                    </div>
                    <div class="footer-icon tweet">
                      <p> <i class="fab fa-twitter"></i></i> 
                    </div>
                    <div class="footer-icon">
                      <p><i class="fab fa-linkedin-in"></i></i> 
                    </div>
                  </p>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </section>

      
      <!-- /.main -->
    </div>


     <!-- modal -->
     <div class="modal fade text-dark" id="upit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title">MOBILNE APLIKACIJE</h1>
              <button class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="d-flex">
                <div class="form-group mr-1">
                  <label for="name">Ime i prezime</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control">
                </div>
               </div>
               <div class="d-flex">
                 <input id="android" type="checkbox" hidden>
                  <label class="osButton" for="android"><i class="fab fa-android fa-2x"></i></label>
                  <input id="ios" type="checkbox" hidden>
                  <label class="osButton" for="ios"><i class="fab fa-apple fa-2x"></i></label>
               </div>
               <div class="form-group">
                  <label for="opisProjekta">Opis projekta</label>
                  <textarea name="" id="opisProjekta" cols="30" rows="5" class="form-control"></textarea>
               </div>
               <div class="d-flex">
                  <div class="form-group mr-1">
                    <label for="">Rok izrade</label>
                    <select class="form-control" name="" id="">
                      <option value="asap">Što prije</option>
                      <option value="asap">Do 20 radnih dana</option>
                    </select>
                  </div>
                  <div class="form-group mr-1">
                    <label for="">Budžet</label>
                    <select class="form-control" name="" id="">
                      <option value="asap">Do 500 evra</option>
                      <option value="asap">Od 500 do 1000 evra </option>
                    </select>
                  </div>
                 </div>
                 <div class="pt-3">
                    <button class="btn-schedule float-right ">Pošalji</button>
                 </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /. modal -->
    
    <script
      src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <!-- scroll script -->
    <script type="text/javascript" src="js/jquery.onepage-scroll.js"></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
      integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"
    ></script>

    <script>
      //video Play
      var video = document.getElementById("myVideo");
      var btn = document.getElementById("myBtn");

      //scrollspy
      function myFunction() {
        if (video.paused) {
          video.play();
          $("#play-icon").toggleClass("fa-play fa-pause");
        } else {
          video.pause();
          $("#play-icon").toggleClass("fa-play fa-pause");
        }
      }

      $("#s-content").scrollspy({ target: "#service-nav-navbar" });   
   
    //  calling pagescroll
    $(".main").onepage_scroll({
      sectionContainer: "section", // sectionContainer accepts any kind of selector in case you don't want to use section
      easing: "ease", // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
      // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
      animationTime: 1000, // AnimationTime let you define how long each section takes to animate
      pagination: false, // You can either show or hide the pagination. Toggle true for show, false for hide.
      updateURL: false, // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
      beforeMove: function(index) {}, // This option accepts a callback function. The function will be called before the page moves.
      afterMove: function(index) {}, // This option accepts a callback function. The function will be called after the page moves.
      loop: false, // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
      keyboard: true, // You can activate the keyboard controls
      responsiveFallback: false, // You can fallback to normal page scroll by defining the width of the browser in which
      // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
      // the browser's width is less than 600, the fallback will kick in.
      direction: "vertical" // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".
    });


 //prevent scrollbypage on sercives scroll
    $('.services-content-all').hover(
        function(){
          $(".main").disable();
          document.querySelector(".services-content-all").addEventListener('wheel', function(event){
            var mouseDirection = event.deltaY;
            console.log(mouseDirection);
            var divHeight = document.querySelector('.services-content-all').scrollHeight;
            var divTop = document.querySelector(".services-content-all").scrollTop;
              if(mouseDirection > 0){
                document.querySelector(".services-content-all").scrollTop += 350;
              }
              else {
                document.querySelector(".services-content-all").scrollTop -= 350;
              }
            //   console.log( document.querySelector('.services-content-all').scrollTop);
          
            // console.log( document.querySelector('.services-content-all').scrollHeight);

          });
        },
        function(){
          $(".main").enable();
  });

//change class on navbar-home
var alterClass = function() {
    var ww = document.body.clientWidth;
    if (ww < 992) {
      $('#navbar-home').addClass('navbar-light');
      $('#navbar-home').removeClass('navbar-dark');
    } else if (ww >= 992) {
      $('#navbar-home').addClass('navbar-dark');
      $('#navbar-home').removeClass('navbar-light');
    };
  };
  $(window).resize(function(){
    alterClass();
  });
  //Fire it when the page first loads:
  alterClass();

//change class on mini
(function(){
    var ww = document.body.clientWidth;
    console.log(ww);
    if (ww < 768){
      $('#hs-left-content').addClass('align-items-center');
    } else if(ww >= 769){
      $('#hs-left-content').removeClass('align-items-center');
    }
})();

//prevent default na services-nav jer podje cijela stranica gore
var startingPoint = 122;
$('#service-nav-navbar .nav-item .nav-link').on('click', function(event) {
    event.preventDefault();
  //   var link = $($(this).attr('href'));
  // //  console.log($(this).attr('href') + ' ' + $('.services-content-all').scrollTop());
  //   console.log(link.offset().top + 'link parent ' + link.parent().position().top);
  //   $('.services-content-all').animate({scrollTop: link.offset().top}, 500);
});

    </script>
  </body>
</html>

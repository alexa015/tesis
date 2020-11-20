<?php
include 'conexion.php';
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
//se muestra el contenido de la página web


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- //Meta tags -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- Style-CSS -->
    <link href="css/font-awesome.css" rel="stylesheet"><!-- font-awesome-icons -->

    <title>Hotel Ohana</title>

    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>

    <body>
        

        <!--w3l-header-->

        <header class="w3l-header-nav">
        	<!--/nav-->
        	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        		<div class="container">
        			<a class="navbar-brand" href="">
        				<img src="assets/images/hotel.png" alt="Your logo"/></a>
        			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        				<span class="navbar-toggler-icon"></span>
        			</button>

        			<div class="collapse navbar-collapse" id="navbarSupportedContent">
        				<ul class="navbar-nav ml-auto">
        					<li class="nav-item active">
        						<a class="nav-link" href="home.php">Principal</a>
        					</li>
        					<li class="nav-item @@about__active">
        						<a class="nav-link" href="about.html">Sobre Nosotros</a>
        					</li>
        					<li class="nav-item @@services__active">
        						<a class="nav-link" href="services.html">Servicios</a>
        					</li>
        					<li class="nav-item @@contact__active">
        						<a class="nav-link" href="contact.html">Contáctanos</a>
        					</li>
        				</ul>
        				<a href="#booking" class="ml-3 book btn btn-primary btn-style">Reserva Ya</a>

                            <li class="dropdown ml-3 book btn btn-light btn-style">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h6>¡Bienvenido <?php print $_SESSION['name'];?>!</h6> <span class="caret"></span></a>
                                <ul class="dropdown-menu ml-3 book btn btn-style">
                                    <li><a href="mis_reservas.php">Mis Reservas</a></li>
                                    <li><a href="cerrar_sesion.php">Salir</a></li>
                                </ul>
                            </li>     
                    </div>    
                </div>
            </nav>            
    </header>

    <section class="w3l-main-slider" id="home">
             <div class="companies20-content">
                 <div class="owl-one owl-carousel owl-theme">
                     <div class="item">
                         <li>
                             <div class="slider-info banner-view bg bg2">
                                 <div class="banner-info">
                                     <div class="container">
                                         <div class="banner-info-bg">
                                             <h5>La ubicación perfecta para tu viaje.</h5>
                                             <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html">Nuestros Servicios</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </li>
                     </div>
                     <div class="item">
                         <li>
                             <div class="slider-info  banner-view banner-top1 bg bg2">
                                 <div class="banner-info">
                                     <div class="container">
                                         <div class="banner-info-bg">
                                             <h5>Nuestro hotel se encuentra en la principal ciudad conectando tu experiencia con la vida local.</h5>
                                             <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html">Nuestros Servicios</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </li>
                     </div>
                     <div class="item">
                         <li>
                             <div class="slider-info banner-view banner-top2 bg bg2">
                                 <div class="banner-info">
                                     <div class="container">
                                         <div class="banner-info-bg">
                                             <h5>Ideal para pasar tus vacaciones lo más relajado posible con todas las comodidades.
                                             </h5>
                                             <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html">Nuestros Servicios</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </li>
                     </div>
                     <div class="item">
                         <li>
                             <div class="slider-info banner-view banner-top3 bg bg2">
                                 <div class="banner-info">
                                     <div class="container">
                                         <div class="banner-info-bg">
                                             <h5>Nuestro estilo es urbano y ofrece las soluciones más simples, convenientes y relevantes para tu estadía.</h5>
                                             <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html">Nuestros Servicios</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </li>
                     </div>
                 </div>
             </div>
         </section>

    <!--<div class="best-rooms py-5">
        <h3 class="title-big text-center">Nuestras Habitaciones</h3>
        <div class="row row-cols-1 row-cols-md-4 mr-4 ml-4">
          <div class="col mb-4">
            <div class="card">
              <img src="assets/images/room1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Simple</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#booking" type="button" class="btn btn-success mt-3">Reservar</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <img src="assets/images/slide1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Doble</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#booking" type="button" class="btn btn-success mt-3">Reservar</a>

              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <img src="assets/images/about2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Familiar</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#booking" type="button" class="btn btn-success mt-3">Reservar</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <img src="assets/images/about3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Resort</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <a href="#booking" type="button" class="btn btn-success mt-3">Reservar</a>
              </div>
            </div>
          </div>
        </div>
    </div>-->

         
<div class="best-rooms py-5">
        <h3 class="title-big text-center">Nuestras Habitaciones</h3>
        <div class="row row-cols-1 row-cols-md-4 mr-4 ml-4">
          <div class="col mb-4">
            <div class="card">
              <img src="assets/images/room1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Simple</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="buscar_reservas.php" type="button" class="btn btn-success mt-3">Reservar</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <img src="assets/images/slide1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Doble</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#booking" type="button" class="btn btn-success mt-3">Reservar</a>

              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <img src="assets/images/about2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Familiar</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#booking" type="button" class="btn btn-success mt-3">Reservar</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <img src="assets/images/about3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Resort</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <a href="#booking" type="button" class="btn btn-success mt-3">Reservar</a>
              </div>
            </div>
          </div>
        </div>
    </div>

        <!-- //w3l-availability-form-section -->
        <!-- about -->
         <section class="w3l-about py-5">
            <div class="container py-sm-4">
                <div class="row">
                    <div class="col-lg-6 about-left mb-md-0 mb-5">
                        <h3 class="title-big">Relájate en nuestro Resort</h3>
                        <h5>Tenemos lo mejor para nuestros clientes.</h5>
                        <p class="mt-3">Nuestro hotel cuenta con piscina y gimnasio, ideal para que puedas mantener tu rutina de ejercicios y disfrutar de tus momentos de relax en ambientes placenteros.</p>
                        <a href="about.html" class="btn btn-style btn-primary mt-sm-5 mt-4">Sobre Nosotros</a>
                    </div>
                    <div class="col-lg-6 about-right position-relative mt-lg-0 mt-5">
                        <img src="assets/images/top.jpg" alt="" class="img-fluid img-border mt-4" />
                        <img src="assets/images/bottom.jpg" alt="" class="img-fluid position-absolute img-position" />
                    </div>
                </div>
            </div>
        </section>





        <!-- //about -->
        <!--<div class="best-rooms py-5">
            <div class="container py-lg-5 py-sm-4">
                <h3 class="title-big text-center">Nuestras Habitaciones</h3>
                <div class="ban-content-inf row py-lg-3">
                    <div class="maghny-gd-1 col-lg-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily">
                                <img class="img-fluid" src="assets/images/room1.jpg" alt="">
                                <figcaption class="w3set-hny">
                                    <div>
                                        <h4 class="top-text">Hotel de Lujo.
                                            <span>Un lugar tranquilo para quedarse.</span></h4>
                                        <p>Desde 150.000₲</p>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="room-info">
                                <h3 class="room-title"><a href="room-single.html">Habitaciones</a></h3>
                                <ul class="mb-3">
                                    <li><span class="fa fa-users"></span> 2 Personas</li>
                                    <li><span class="fa fa-bed"></span>Doble Cama</li>
                                </ul>
                                <p>Habitaciones de la mejor calidad para que tu estadía sea única.</p>
                                <a href="#booking" class="btn btn-style btn-primary mt-sm-4 mt-3">Reserva Ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                        <div class="row">
                            <div class="maghny-gd-1 col-6">
                                <div class="maghny-grid">
                                    <figure class="effect-lily border-radius">
                                        <img class="img-fluid" src="assets/images/room2.jpg" alt="">
                                <figcaption class="w3set-hny">
                                    <div>
                                        <h4 class="top-text">Habitaciones Simples.</h4>
                                        <p>Desde 250.000₲</p>
                                    </div>
                                </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="maghny-gd-1 col-6">
                                <div class="maghny-grid">
                                    <figure class="effect-lily border-radius">
                                        <img class="img-fluid" src="assets/images/room3.jpg" alt="">
                                <figcaption class="w3set-hny">
                                    <div>
                                        <h4 class="top-text">Habitaciones Dobles.</h4>
                                        <p>Desde 320.000₲</p>
                                    </div>
                                </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="maghny-gd-1 col-6 mt-4">
                                <div class="maghny-grid">
                                    <figure class="effect-lily border-radius">
                                        <img class="img-fluid" src="assets/images/room4.jpg" alt="">
                                <figcaption class="w3set-hny">
                                    <div>
                                        <h4 class="top-text">Habitaciones Familiares.</h4>
                                        <p>Desde 380.000₲</p>
                                    </div>
                                </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="maghny-gd-1 col-6 mt-4">
                                <div class="maghny-grid">
                                    <figure class="effect-lily border-radius">
                                        <img class="img-fluid" src="assets/images/room5.jpg" alt="">
                                <figcaption class="w3set-hny">
                                    <div>
                                        <h4 class="top-text">Habitaciones Resort.</h4>
                                        <p>Desde 450.000₲</p>
                                    </div>
                                </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <section class="w3l-footer-29-main">
          <div class="footer-29 py-5">
            <div class="container py-lg-4">
              <div class="row footer-top-29">
                <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1">
                  <h6 class="footer-title-29">Contáctanos</h6>
                  <ul>
                    <li>
                      <p><span class="fa fa-map-marker"></span> Avda. Aviadores del Chaco 3241. Asunción, Paraguay.</p>
                    </li>
                    <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +(595)-972-500-421</a></li>
                    <li><a href="mailto:hotels@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                        hotelohana@gmail.com</a></li>
                  </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-sm-0 mt-5">

                  <ul>
                    <h6 class="footer-title-29">Links</h6>
                    <li><a href="principal.php">Principal</a></li>
                    <li><a href="about.html">Sobre Nosotros</a></li>
                    <li><a href="contact.html">Contáctanos</a></li>
                  </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-5 footer-list-29 footer-3 mt-lg-0 mt-5">
                    <h6 class="footer-title-29">Términos y Políticas</h6>
                    <div class="footer-post">
                      <a href="#url">Garantía de mejor tarifa</a>
                    </div>
                    <div class="footer-post">
                      <a href="#url">Aviso de privacidad</a>
                    </div>
                    <div class="footer-post">
                      <a href="#url">Términos de Uso</a>
                    </div>
                    <div class="footer-post">
                      <a href="#url">Cookies</a>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
                  <h6 class="footer-title-29">Subscríbete</h6>
                  <p>Ingresa tu email para recibir noticas sobre nosotros.</p>

                  <form action="#" class="subscribe" method="post">
                    <input type="email" name="email" placeholder="Ingresa tu email" required="">
                    <button><span class="fa fa-envelope-o"></span></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="w3l-footer-29-main w3l-copyright">
          <div class="container">
            <div class="row bottom-copies">
              <p class="col-lg-8 copy-footer-29">© 2020 Hotel Ohana. Todos los derechos reservados.</p>

              <div class="col-lg-4 main-social-footer-29">
                <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
              </div>

            </div>
          </div>

         <!-- move top -->
         <button onclick="topFunction()" id="movetop" title="Go to top">
          &#10548;
        </button>
        <script>
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () {
            scrollFunction()
          };

          function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("movetop").style.display = "block";
            } else {
              document.getElementById("movetop").style.display = "none";
            }
          }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }
        </script>
        <!-- /move top -->
        </section>

        <!-- Template JavaScript -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>

        <script src="assets/js/owl.carousel.js"></script>
        <!-- script for banner slider-->
        <script>
          $(document).ready(function () {
            $('.owl-one').owlCarousel({
              loop: true,
              margin: 0,
              nav: false,
              responsiveClass: true,
              autoplay: false,
              autoplayTimeout: 5000,
              autoplaySpeed: 1000,
              autoplayHoverPause: false,
              responsive: {
                0: {
                  items: 1,
                  nav: false
                },
                480: {
                  items: 1,
                  nav: false
                },
                667: {
                  items: 1,
                  nav: true
                },
                1000: {
                  items: 1,
                  nav: true
                }
              }
            })
          })
        </script>
        <!-- //script -->

        <!-- script for owlcarousel -->
        <script>
          $(document).ready(function () {
            $('.owl-testimonial').owlCarousel({
              loop: true,
              margin: 0,
              nav: true,
              responsiveClass: true,
              autoplay: false,
              autoplayTimeout: 5000,
              autoplaySpeed: 1000,
              autoplayHoverPause: false,
              responsive: {
                0: {
                  items: 1,
                  nav: false
                },
                480: {
                  items: 1,
                  nav: false
                },
                667: {
                  items: 1,
                  nav: true
                },
                1000: {
                  items: 1,
                  nav: true
                }
              }
            })
          })
        </script>
        <!-- //script for owlcarousel -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script>
          $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
              type: 'inline',

              fixedContentPos: false,
              fixedBgPos: true,

              overflowY: 'auto',

              closeBtnInside: true,
              preloader: false,

              midClick: true,
              removalDelay: 300,
              mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
              type: 'inline',

              fixedContentPos: false,
              fixedBgPos: true,

              overflowY: 'auto',

              closeBtnInside: true,
              preloader: false,

              midClick: true,
              removalDelay: 300,
              mainClass: 'my-mfp-slide-bottom'
            });
          });
        </script>


        <!-- disable body scroll which navbar is in active -->
        <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
        </script>
        <!-- disable body scroll which navbar is in active -->

        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>


<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: ./principal.php');
}
?>





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
        			<a class="navbar-brand" href="principal.php">
        				<img src="assets/images/hotel.png" alt="Your logo"/>
        			</a>
        			<button class="navbar-toggler" type="button" data-toggle="collapse" 
                        data-target="#navbarSupportedContent"
        				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        				<span class="navbar-toggler-icon"></span>
        			</button>

        			<div class="collapse navbar-collapse" id="navbarSupportedContent">
        				<ul class="navbar-nav ml-auto">
        					<li class="nav-item active">
        						<a class="nav-link" href="principal.php">Principal</a>
        					</li>
        					<li class="nav-item @@about__active">
        						<a class="nav-link" href="about.html">Acerca de Nosotros</a>
        					</li>
        					<li class="nav-item @@services__active">
        						<a class="nav-link" href="services.html">Servicios</a>
        					</li>
        					<li class="nav-item @@contact__active">
        						<a class="nav-link" href="contact.html">Contáctanos</a>
        					</li>
        				</ul>
                    </div>    
                        
                    <!--Modal: Login / Register Form-->
                        <div class="text-center">
                            <a href="" class="ml-3 book btn btn-primary btn-style" data-toggle="modal" data-target="#modalLRForm">Inicia Sesión</a>
                        </div>

                    <!--Modal: Login / Register Form-->
                        <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog"aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog cascading-modal" role="document">
                            <!--Content-->
                        <div class="modal-content">

                                  <!--Modal cascading tabs-->
                        <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 justify-content-center" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-toggle="tab" href="#panel7" role="tablist"><span class="fa fa-user"></span>
                      Iniciar Sesión</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus"></i>
                      Registrarse</a>
                  </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                  <!--Panel 7-->
                  <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                    <!--Body-->
            <section class="w3l-form-36" id="login">
                <div class="form-36-mian section-gap">
                    <div class="wrapper">
                        <div class="form-inner-cont2">
                            <h3>Inicia Sesión</h3>
                            <form action="archivo_destino.php" method="POST" class="signin-form">
                                <div class="form-input2">
                                    <span class="fa fa-envelope-o" aria-hidden="true"></span> 
                                    <input id="control1_email" type="email" name="datos_introducidos_email"
                                        placeholder="Email" required />
                                </div>
                                <div class="form-input2">
                                    <span class="fa fa-key" aria-hidden="true"></span> 
                                    <input id="control1_contraseña" type="password" name="datos_introducidos_password" placeholder="Contraseña"
                                        required/>
                                </div>
                                <div class="login-remember d-grid">
                                    <label class="check-remaind">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <p class="remember">Recuérdame</p>
                                    </label>
                                    <button type="submit" class="ml-3 book btn btn-primary btn-style">Iniciar Sesión</button>
                                </div>
                                <div class="new-signup">
                                    <a href="#reload" class="signuplink">Olvidaste tu Contraseña?</a>
                                </div>
                            </form>
                            <div class="social-icons">
                                <p class="continue"><span>O</span></p>
                                <div class="social-login">
                                    <a href="#facebook">
                                        <div class="facebook">
                                            <span class="fa fa-facebook" aria-hidden="true"></span>

                                        </div>
                                    </a>
                                    <a href="#google">
                                        <div class="google">
                                            <span class="fa fa-google-plus" aria-hidden="true"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <p class="signup">No tienes una cuenta? <a href="#signup.html" class="signuplink">Regístrate</a></p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
                  <!--/.Panel 7-->

                  <!--Panel 8-->
            <div class="tab-pane fade" id="panel8" role="tabpanel">

                    <!--Body-->
                <section class="w3l-form-36">
                    <div class="form-36-mian section-gap">
                        <div class="wrapper">
                            <div class="form-inner-cont2">
                                <h3>Regístrate</h3>
                                <form action="archivo_registrar.php" method="post" class="signin-form">
                                    <div class="form-input2">
                                    <span class="fa fa-envelope-o" aria-hidden="true"></span> 
                                    <input id="control2_nombre" type="text" name="datos_registrar_nombre"
                                        placeholder="Nombre" required />
                                </div>
                                    <div class="form-input2">
                                        <span class="fa fa-envelope-o" aria-hidden="true"></span> 
                                        <input type="email" name="datos_registrar_email" id="control2_email"
                                            placeholder="Email" required />
                                    </div>
                                    <div class="form-input2">
                                        <span class="fa fa-key" aria-hidden="true"></span> 
                                        <input type="password" name="datos_registrar_contraseña" id="control2_contraseña" placeholder="Contraseña"
                                            required />
                                    </div>
                                    <div class="login-remember d-grid">
                                        <button type="submit" class="ml-3 book btn btn-primary btn-style">Registrarse</button>
                                    </div>
                                </form>
                                <div class="social-icons">
                                    <p class="continue"><span>O</span></p>
                                    <div class="social-login">
                                        <a href="#facebook">
                                            <div class="facebook">
                                                <span class="fa fa-facebook" aria-hidden="true"></span>

                                            </div>
                                        </a>
                                        <a href="#google">
                                            <div class="google">
                                                <span class="fa fa-google-plus" aria-hidden="true"></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <p class="signup">Ya tienes una cuenta? <a href="#signup.html" class="signuplink">Inicia Sesión</a></p>
                            </div>
                        </div>
                    </div>
                </section>
                        </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
        	<!--//nav-->
        </header>
        <!-- //w3l-header -->
         <!-- main-slider -->
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
        <div class="best-rooms py-5">
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
        </div>
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
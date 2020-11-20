<?php
include 'conexion.php';
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
//se muestra el contenido de la página web

$registros = "SELECT * FROM habitaciones";



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            <a class="navbar-brand" href="index.html">
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
                        <a href="home.php#booking" class="ml-3 book btn btn-primary btn-style">Reserva Ya</a>

                            <li class="dropdown ml-3 book btn btn-light btn-style">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h6>¡Bienvenido <?php print $_SESSION['name'];?>!</h6> <span class="caret"></span></a>
                                <ul class="dropdown-menu ml-3 book btn btn-style">
                                    <li><a href="mostrar_resultados.php">Reservas</a></li>
                                    <li><a href="cerrar_sesion.php">Salir</a></li>
                                </ul>
                            </li>  
                    </div>  
</header>
<!-- //w3l-header -->

<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Reservas</h2>
            <p><a href="home.php">Principal</a> &nbsp; / &nbsp; Reservas</p>
        </div>
    </div>
</section>

<?php
$resultado = mysqli_query($conexion, $registros);
        while ($row=mysqli_fetch_assoc($resultado)) {  ?>

<div class="card-deck mt-4 ml-4 mr-4 justify-content-center">
<div class="card mb-4" style="max-width: 650px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);  ?>" class="card-img mt-3 ml-2" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <a class="ml-4 mt-1 btn btn-success btn-md float-right" style="width: 10rem;">
          <p class="text-uppercase"><small class="text-light font-weight-bold">A partir de:</small></p>
        <p class="card-text text-light"><?php echo $row['precio'] ?>₲</p>
        <p class="card-text"><small class="text-light font-weight-bold">Por noche.</small></p></a>
        <h5 class="card-title"><?php echo $row['nombre'] ?></h5>
        <p class="card-text"><?php echo $row['descripcion'] ?></p>
        
      </div>
    </div>
  </div>
</div>

</div>               
                        
                           

<?php  }?>
<!-- /contact1 -->
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


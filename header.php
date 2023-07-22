<?php
session_start();
if(!isset($_SESSION["nombre"]) and !isset($_SESSION["tipo"])){
	header("Location: index.php");
}
$nombre=$_SESSION["usuario"];
require_once 'conectabd.php';

$nombreUsuario= $_SESSION["nombre"];
$tipoUsuario= $_SESSION["tipo"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SiRisQ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/baby_duck.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="lou/css/multi-select.css" media="screen" rel="stylesheet" type="text/css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="welcome.php">SiRisQ</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="welcome.php">Inicio</a></li>
          <li class="dropdown"><a href="#"><span>Recepción</span> <i class="bi bi-chevron-down"></i></a>
            <ul>             
                  <li><a href="Avisos.php">Avisos</a></li>
                  <li><a href="Llamadas.php">Llamadas</a></li>
                  <li><a href="Quejas.php">Quejas</a></li>
            </ul>
          </li>
          <?php 
          if ($tipoUsuario==2) {
            echo '<li class="dropdown"><a href="#"><span><i class="bi bi-search"></i>Buscar</span> <i class="bi bi-chevron-down"></i></a>
             <ul>             
                   <li><a href="BuscarLlamadas23.php">Llamadas, Avisos, Quejas, Covid 2023</a></li>
                   <li><a href="BuscarLlamadas22.php">Llamadas, Avisos, Quejas, Covid 2022</a></li>
                   <li><a href="BuscarLlamadas.php">Llamadas, Avisos, Quejas, Covid</a></li>
             </ul>
           </li>';
            # code...
          }
          ?>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="logout.php" class="twitter"><?php echo $nombreUsuario?><i class="bi bi-door-closed"></i></a>
      </div>

    </div>
  </header><!-- End Header -->
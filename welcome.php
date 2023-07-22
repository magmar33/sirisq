<?php 
include "header.php";
?>

<body>



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>Sistema de Registro de Informacion<br> Sugerencias y/o Quejas<span>&nbsp SiRISQ</span></h2>
          <div>
            <a href="#footer" class="btn-get-started scrollto">Contacto</a>
          </div>
        </div>

        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

 

    <!-- ======= Civar Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active"><img src="assets/img/CIVAR11.jpg" class="d-block w-50" alt=""></div>
            <div class="carousel-item"><img src="assets/img/CIVAR12.jpg" class="d-block w-50" alt=""></div>
            <div class="carousel-item"><img src="assets/img/CIVAR13.jpg" class="d-block w-50" alt=""></div>
            <div class="carousel-item"><img src="assets/img/CIVAR14.jpg" class="d-block w-50" alt=""></div>
            <div class="carousel-item"><img src="assets/img/CIVAR15.jpg" class="d-block w-50" alt=""></div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>

      </div>
    </section>
    <!-- End Civar -->

  </main><!-- End #main -->
  
<?php 
include "frases_api.php";
include "footer.php";

?>
<?php
	session_start(); //Iniciar una nueva sesión o reanudar la existente
	if(isset($_SESSION["id_usuario"])){
		header("Location: welcome.php");
	}
	require_once 'conectabd.php';
	require_once 'funcs/funcs.php';
      // Establecer la zona horaria local
    date_default_timezone_set('America/Mexico_City'); // Cambia 'America/Mexico_City' por tu zona horaria local
    $errors = array();
    // Obtener la fecha y hora local
    $fecha = date('Y-m-d H:i:s');
      
      if(!empty($_POST))
	{
    
		$usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);

    $nombre = mysqli_real_escape_string($mysqli,$_POST['nombre']);
    $apellido = mysqli_real_escape_string($mysqli,$_POST['apellido']);
		$password = mysqli_real_escape_string($mysqli,$_POST['password']);
    $password2 = mysqli_real_escape_string($mysqli,$_POST['password2']);
		
    $password == $password2 ? : $errors[] ="Las contraseñas no son iguales";
		$sha1_pass = sha1($password);
		
		$sql = "SELECT usuario FROM user WHERE usuario = '$usuario' or (nombre = '$nombre' and apellido = '$apellido')"  ;
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0) {
      $errors[] = "El usuario y/o nombre ya existe";      		
			} 
      else {
      $sql = "INSERT INTO `user` (`id`, `usuario`, `nombre`, `apellido`, `contraseña`, `fecha`, `sesion`, `tipo`) 
      VALUES (NULL, '$usuario', '$nombre', '$apellido', '$password', CURRENT_TIMESTAMP, '', '1')";
      $result=$mysqli->query($sql);
      header("location: index.php");
			
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Civar -SiRisQ-</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/login.css" rel="stylesheet">
</head>
  <!-- ======= Header ======= -->


<body>
    <div class="container-sm">
        <section class="vh-100">
            <div class="container py-5 h-100">
              <div class="row d-flex align-items-center justify-content-center h-100">
              <h1 class="logo me-auto"><a href="index.php"><i class="bi bi-arrow-left-circle"></i>SiRisQ</a></h1>
                <div class="col-md-8 col-lg-7 col-xl-6">
                  <img src="assets/img/login.svg"
                    class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                  <form class="was-validated" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if(isset($usuario)) echo $usuario;?>" required/>
                      <div class="invalid-feedback">
                        Por favor introduce un usuario
                      </div>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(isset($nombre)) echo $nombre;?>" required/>
                      <div class="invalid-feedback">
                        Por favor introduce tu Nombre
                      </div>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?php if(isset($apellido)) echo $apellido;?>" required/>
                      <div class="invalid-feedback">
                        Por favor introduce tu Apellido
                      </div>
                    </div>
          
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" class="form-control" name="password" placeholder="Contraseña" value="<?php if(isset($password)) echo $password;?>" required/>
                      <div class="invalid-feedback">
                        Por favor introduce tu contraseña
                      </div>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" class="form-control" name="password2" placeholder="Contraseña" value="<?php if(isset($password2)) echo $password2;?>" required/>
                      <div class="invalid-feedback">
                        Por favor repite tu contraseña
                      </div>
                    </div>
                  
                    
                  <center>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
                    </center>
                  </form>
                  <?php echo resultBlock($errors);?>                  
                </div>
              <center>
                  <footer>
                    <p> &copy; 2016-2023  <a href="index.php">Civar</a></p>
                  </footer></center>
            </div>
            
        
    
          </section>        
          
    </div>

            
</body>

</html>
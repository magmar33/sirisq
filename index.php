<?php
	session_start(); //Iniciar una nueva sesión o reanudar la existente
	if(isset($_SESSION["nombre"])){
		header("Location: welcome.php");
	}
	require_once 'conectabd.php';
	require_once 'funcs/funcs.php';
	
  $errors = array();

	if(!empty($_POST))
	{
		$usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
		$password = mysqli_real_escape_string($mysqli,$_POST['password']);
		
		
		$sha1_pass = sha1($password);
		
		$sql = "SELECT id, usuario, nombre, apellido, tipo FROM user WHERE usuario = '$usuario' AND contraseña = '$password'"  ;
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['nombre'] = strtoupper($row['nombre']);
            $_SESSION['tipo'] = $row['tipo'];
            $id = $row['id'];
             // Establecer la zona horaria local
            date_default_timezone_set('America/Mexico_City'); // Cambia 'America/Mexico_City' por tu zona horaria local
            
            // Obtener la fecha y hora local
            $fecha = date('Y-m-d H:i:s');
            
            $sql="UPDATE `user` SET `sesion` = '$fecha' WHERE `user`.`id` = '$id'";
            $result=$mysqli->query($sql);
			      header("location: welcome.php");

			} else {
			$errors[] = "El nombre o contraseña son incorrectos";
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
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"><link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/login.css" rel="stylesheet">
</head>


<body>
    <div class="container">
        <section class="vh-100">
            <div class="container py-5 h-100">
              <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                  <img src="assets/img/login.svg"
                    class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form1Example13" class="form-control form-control-lg" name="usuario" required/>
                      <label class="form-label" for="form1Example13">Usuario</label>
                    </div>
          
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" required/>
                      <label class="form-label" for="form1Example23">Contraseña</label>
                    </div>

                    <div class="form-outline mb-4">
                      <a href="register.php"><small>Registrar Usuario</small></a>
                    </div>
          
                    
                  <center>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-bottom: 10px;">Iniciar sesión</button>
                    </center>
                    <?php echo resultBlock($errors);?>  
                  </form>
                </div>
              <center>
                  <footer>
                    <p> &copy; 2016-2023  <a href="http://civar.dgiva-sistemas.com/">Civar</a></p>
                  </footer></center>
            </div>
            
        
    
          </section>        
          
    </div>

            
</body>

</html>
<?php

	$mysqli=new mysqli("174.136.52.214","dgivasis_bitacoras","P0k3m@n12","dgivasis_civar"); //servidor, usuario de base de datos, contrase���a del usuario, nombre de base de datos

	$mysqli->set_charset("utf8");

	if(mysqli_connect_errno()){

		echo 'Conexion Fallida : ', mysqli_connect_error();

		exit();

	}

?>
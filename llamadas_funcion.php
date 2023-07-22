<?php 
$_POST['atendio'] = $_SESSION["nombre"];

if (isset($_POST['submit'])){
  date_default_timezone_set('America/Mexico_City');
  if (empty($_POST['tipo']) || empty($_POST['tema']) || empty($_POST['atendio'])) {
echo "<h1 style='color:red'>Tiene datos vacios el Registro no se guardara</h1>";
}else {

$hoy = date("Y-m-d"); 
//$hora = date("H:m:s");
$hora = date("H:i:s");
$tip=$_POST['tipo'];
$tem=$_POST['tema'];
$ate=$_POST['atendio'];
$cen=$_POST['centro'];
$ciu=$_POST['ciudadano'];
$fec=$hoy;
$hor=$hora;
$mot=$_POST['motivo'];
$seg=$_POST['seguimiento'];
$des=$_POST['my-input'];
$ter='No';

$sql="INSERT INTO llamadas2023 (id,tipo, tema, atendio, ciudadano, centro, fecha, hora, motivo, seguimiento, Estacion, desde, termino) 
VALUES (NULL,'$tip', '$tem', '$ate', '$ciu','$cen',  '$fec', '$hor', '$mot', '$seg','Atras','$des','$ter' )";

if ($mysqli->query($sql) === TRUE) {
//echo "<h4 style='color:green'>Registro guardado exitosamente!!!</h1>";
unset($_POST['Submit']);
unset($sql);

} else {
    //echo "Error: " . $sqlin . "<br>" . $mysqli->error;
} }
	}


 ?>
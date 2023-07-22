<?php



include("conectabd.php");



date_default_timezone_set('America/Mexico_City');

$id=$_POST['id'];

$seguimiento=$_POST['seguimiento'];

$termino=$_POST['termino'];

$fecha= date("Y-m-d- H:i:s");



$sql="UPDATE llamadas2023 SET  seguimiento='$seguimiento',termino='$termino',fecha_termino='$fecha' WHERE id='$id'";

$query=mysqli_query($mysqli,$sql);



    if($query){

        Header("Location: Llamadas.php");

    }

?>
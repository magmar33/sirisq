<?php 
  
  $_POST['nickname'] = $_SESSION["nombre"];

	if (isset($_POST['submit'])){
	    if (empty($_POST['nickname']) || empty($_POST['clave']) || empty($_POST['tema'])) {
  echo "<h1 style='color:red'>Tiene datos vacios el Registro no se guardara</h1>";
}else {
  $nic=$_POST['nickname'];
  $cen=$_POST['clave'];
  $tema=$_POST['tema'];
  $tem='';
  for ($i=0 ; $i < count($tema)  ; $i++) { 
    # code...
    if (count($tema)==1) {
      # code...
      $tem = $tema[$i].'.';
    break;  
    }if (count($tema)==($i+1)) {
      $tem = $tem.$tema[$i].'.';
      break;  
    }    
    else {
      # code...
      $tem = $tema[$i].', '.$tem;
      
    
  }}

  $tema= $tem;
  //$tema= $tema[0].','.$tema[1];                   
  $des=$_POST['descripcion'];
  $desde=$_POST['my-input'];
  $ter='No';
  
     
//registra los datos del empleados
  $sqlin="INSERT INTO registrodeavisos23(id,atendio,verificentro,tema,descripcion,desde,seguimiento,termino) VALUES (null,'$nic','$cen','$tema','$des','$desde','','$ter')";
if ($mysqli->query($sqlin) === TRUE) {
  //echo "<h1 style='color:green'>Registro guardado exitosamente!!!</h1>"; 
      
} else {
    //echo "Error: " . $sqlin . "<br>" . $mysqli->error;
} }
	}


 ?>
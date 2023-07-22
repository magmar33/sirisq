<?php
 
//Configuracion de la conexion a base de datos
 $mysqli = new mysqli('174.136.52.214', 'dgivasis_bitacoras', 'P0k3m@n12', 'dgivasis_civar');
  
  if($mysqli->connect_error){
    
    die('Error en la conexion' . $mysqli->connect_error);
    
  }
  $mysqli->set_charset("utf8");
//consulta todos los empleados
$sql=$mysqli->query("SELECT * FROM llamadas2023 order by id desc limit 3");
?><p>
<form>
<div class="table-responsive small">
<table class="table align-middle table-bordered border-primary">
<thead>

  <tr >
    <td>Folio</td>
		<td>Tipo</td>
		<td>Tema</td>
		<td>Atendió</td>
    <td>Centro</td>
    <td>Ciudadano</td>
    <td>Fecha</td>
    <td>Hora</td>
    <td>Desde</td>
    <td>Motivo</td>
    <td>Seguimiento</td>
    <td>Término</td>
    <td>Fecha Termino</td>
  </tr>

</thead>
<?php
  while($row = $sql->fetch_array()){
        
    echo "<tr>";
    echo "<td>CL ".$row['id']."</td>";
  	echo "<td>".$row['tipo']."</td>";
  	echo "<td>".$row['tema']."</td>";
  	echo "<td>".$row['atendio']."</td>";
    echo "<td>".$row['centro']."</td>";
    echo "<td>".$row['ciudadano']."</td>";
    echo "<td>".$row['fecha']."</td>";
    echo "<td>".$row['hora']."</td>";
    echo "<td>".$row['desde']."</td>";
    echo "<td>".$row['motivo']."</td>";
    echo "<td>".$row['seguimiento']."</td>";   
    echo "<td>".$row['termino']."</td>";    
    $row['fecha_termino'] == '0000-00-00 00:00:00' ? $row['fecha_termino'] ='': '';
    echo "<td>".$row['fecha_termino']."</td>";
   	echo "</tr>";
  }
?> 

</table> </div></form>

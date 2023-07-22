<?php
 
//Configuracion de la conexion a base de datos
 $mysqli = new mysqli('174.136.52.214', 'dgivasis_bitacoras', 'P0k3m@n12', 'dgivasis_civar');
  
  if($mysqli->connect_error){
    
    die('Error en la conexion' . $mysqli->connect_error);
    
  }
  $mysqli->set_charset("utf8");
//consulta todos los empleados
$sql=$mysqli->query("SELECT * FROM registrodequejas23 order by id desc limit 3");
?><p>
<form>
<div class="table-responsive small">
<table class="table align-middle table-bordered border-primary">
<thead>

	<tr>
    <td>Folio</td>
		<td>Atendio</td>
		<td>Verificentro</td>
		<td>Tipo de Queja</td>
    <td>Fecha</td>
    <td>Desde</td>
    <td>Descripcion</td>
    <td>Seguimiento</td>
    <th>Termino</th>
    <th>Fecha Termino</th>
    </tr>

</thead>
<?php
  while($row = $sql->fetch_array()){
        
    echo "<tr>";
    echo "<td>CQ ".$row['id']."</td>";
  	echo "<td>".$row['atendio']."</td>";
  	echo "<td>".$row['verificentro']."</td>";
  	echo "<td>".$row['queja']."</td>";
    echo "<td>".$row['fecha']."</td>";
    echo "<td>".$row['desde']."</td>";
    echo "<td>".$row['descripcion']."</td>";
    echo "<td>".$row['seguimiento']."</td>";
    echo "<td>".$row['termino']."</td>";
    $row['fecha_termino'] == '0000-00-00 00:00:00' ? $row['fecha_termino'] ='': '';
    echo "<td>".$row['fecha_termino']."</td>";
   	echo "</tr>";
  }
?> 

</table> </div></form>

<?php 

if(isset($_POST['buscar'])){

        $nombre=$_POST['nombre'];

        $sql="SELECT *  FROM registrodequejas23 WHERE id = '$nombre' ";

        $query=mysqli_query($mysqli,$sql);

}?>
                            <center>
                            <div>
                               

                            <form action="Quejas.php" method="post">

    
                                    <div class="row g-3">
                                        <div class="col-3"></div>
                                        <div class="col-4">
                                        <input type="number" name="nombre" min="1" class="form-control" placeholder="Buscar folio">
                                        </div>
                                            
                                        <div class="col-1">
                                        <input type="submit" value="Buscar" name="buscar"  class="btn btn-info">
                                        </div>

                                    </div>
                            <br>
                            </form></center>

                            <?php

                            if(isset($_POST['buscar'])){
                                while($row=mysqli_fetch_array($query)){
                                ?>

<small>Folio: CQ<?php echo $row['id']; ?><br>

Verificentro: <?php echo $row['verificentro']; ?><br>

Atendio: <?php echo $row['atendio']; ?><br>

Queja: <?php echo $row['queja']; ?><br>

Fecha: <?php echo $row['fecha']; ?><br>

Desde: <?php echo $row['desde']; ?><br>

Descripcion: <?php echo $row['descripcion']; ?><br>

Seguimiento: <?php echo $row['seguimiento']; ?><br>

Fecha termino: <?php echo $row['fecha_termino']; ?><br>

Termino: <?php echo $row['termino']; ?>
<br>
<center>
<button type="button" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#editChildresn<?php echo $row['id']; ?>">

                                  Termino

                              </button></center>


</small>

                                                </th>

                                            </tr>

                                                <!--Ventana Modal para Actualizar--->

                                                <?php  include('quejas_modal_editar.php'); ?>

                                        

                                                <?php } }?>

          
    </div>



                    

        



                                             

    

    




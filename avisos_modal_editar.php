<!--ventana para Update--->

<div class="modal fade" id="editChildresn<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header" style="background-color: #563d7c !important;">

        <h6 class="modal-title" style="color: #fff; text-align: center;">

            Termino

        </h6>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        

        </button>

      </div>





      <form method="POST" action="avisos_modal_update.php">

        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">



            <div class="modal-body" id="cont_modal">



                

                    <small>Folio: CA<?php echo $row['id']; ?><br>

                    Verificentro: <?php echo $row['verificentro']; ?><br>

                    Atendio: <?php echo $row['atendio']; ?><br>

                    Tema: <?php echo $row['tema']; ?><br>

                    Descripcion: <?php echo $row['descripcion']; ?><br>

                    Fecha: <?php echo $row['fecha']; ?><br>

                    Desde: <?php echo $row['desde']; ?><br>

                    Seguimiento: <?php echo $row['seguimiento']; ?><br>

                    Fecha termino: <?php echo $row['fecha_termino']; ?><br>

                    Termino: <?php echo $row['termino']; ?>

                    

                    </small>

                     

                

                



                <?php

if ($row['termino'] == 'No' || $row['termino'] == '' ) {

    ?>

    <div class="form-group">

                  <label for="recipient-name" class="col-form-label">Seguimiento:</label>

                  <textarea name="seguimiento" class="form-control" value="<?php echo $row['seguimiento']; ?>" rows="4" cols="10"><?php echo $row['seguimiento']; ?></textarea>

                </div>

                

    <div class="form-group">

                  <label for="cerrar" class="col-form-label">Termino:</label>

                    <select name="termino" id="termino">

                        <option value="<?php echo $row['termino']; ?>"><?php echo $row['termino']; ?></option>

                        <option value="Sí">Sí</option>

                        <option value="No">No</option>

                    </select>

                </div>

                

                

            <div class="modal-footer">

              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

              <button type="submit" class="btn btn-primary">Guardar Cambios</button>

            </div>

    <?php 

}

?>

       </form>



    </div>

  </div>

</div>

<!---fin ventana Update --->




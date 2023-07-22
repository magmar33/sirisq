
<?php 
include "header.php";
include "llamadas_funcion.php" ;

?>
<body>
    <section id="hero" class="clearfix">
    <div class="container-sm" id="#inicio">
    
    <div class="row g-2">
        <div class="col-6">
                    <center>
                        <h3 class="text-black animated zoomIn mx-auto">Llamadas</h3>   
                    </center>

                 <?php 

                    $sql = "SELECT COUNT(*) total FROM `llamadas2023`";
                    $result = $mysqli->query($sql);
                    $fila = mysqli_fetch_assoc($result);
                    $numero = $fila['total']+1;
                    

                 ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return checkSubmit();"> 
                    <center>
                        Folio: <b style="color:black"><?php echo "CA ".$numero.''; ?> </b><br>

                    <div>
                    <input type="radio" name="my-input" id="yes" value="Verificatel" required>
                    <!--<input type="radio" name="my-input" id="yes" checked value="Verificatel">-->
                    <label for="yes">Verificatel</label>

                    <input type="radio" name="my-input" id="no" value="Particular">
                    <label for="no">Particular</label>
                    
                    <input type="radio" name="my-input" id="other" value="Civar">
                    <label for="other">Civar</label>
                    
                    <input type="radio" name="my-input" id="other2" value="Tel_Temp">
                    <label for="other2">Teléfonos Temporales </label>
                    </div>
                                     
                    </center>
                            
                    
                      <div class="row g-1"><div class="col-md-4">
                        <input type="text" class="form-control" name="atendio" value="<?php echo $nombreUsuario?>" disabled>
                      </div>
                            <?php
                            
                            $tip= $mysqli->query("SELECT tipo FROM llamtipo where tipo <> ''order by tipo");
                            echo '<div class="col-md-4"><select class="form-control" name="tipo" style="font-size:100%" required> 
                            <option value="">Tipo de Llamada</option> ';
                            while($tipo = $tip->fetch_assoc()){
                            echo "<option value=\"".$tipo['tipo']."\">".$tipo['tipo']."</option> ";  
                            }
                            echo '</select></div>';

                            $tem= $mysqli->query("SELECT tema FROM llamtipo order by tema");
                            echo ' <div class="col-md-4"><select class="form-control" name="tema" style="font-size:100%" required>
                            <option value="">Tema</option> ';
                            while($tema = $tem->fetch_assoc()){
                            echo "<option value=\"".$tema['tema']."\">".$tema['tema']."</option> ";  
                            }
                            echo '</select></div>';
                            
                            $centro= $mysqli->query("SELECT clave FROM centros ORDER BY clave asc");
                            echo ' <div class="col-md-4"><select class="form-control" name="centro" style="font-size:100%" required>
                            <option value="N/A">N/A</option>';
                            while($centros = $centro->fetch_assoc()){
                            echo "<option value=\"".$centros['clave']."\">".$centros['clave']."</option> ";  
                            }
                            echo '</select></div>';
                            ?>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="ciudadano" placeholder="Ciudadano" style="font-size:100%" required> 
                                </div>

                                <textarea class="form-control" name="motivo" required placeholder="Motivo" fontstyleid="mot" cols="40" rows="5" style="font-size:100%"></textarea>	
		
                            <textarea class="form-control" name="seguimiento" required placeholder="Seguimiento" fontstyleid="mot" cols="40" rows="5" style="font-size:100%"></textarea>
                            
                            <div style="width: 10em; text-align: center;  margin: auto; margin-top: 5px; margin-bottom: 5px;">
                            
                                    <button class="btn btn-danger w-100 py-3" type="submit" name="submit">Registrar</button></div>
                        </form></div></div>
        
        
        <div class="col-6" >
                    <center>
                        <h6 class="text-black animated zoomIn mx-auto">Busqueda</h6>   
                    </center>
                    <?php include('llamadas_termino.php'); ?>
                    
        </div>
        </section>

        
        <div class="container-sm">
    
        <div class="row" >
        
        <div class="col-12">
        <?php include('llamadas_consulta.php');?>
        </div>
        </div>
        </div>

    </div>
    
    

                        

                            
                        
        
          
        
        
        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

    <div class="container-sm bg-white p-0">
        <!--Navbar-->
        
        <!-- Contact Start -->
        
                        
                    
                
                
                
        <!-- Contact End -->



        <?php include "footer.php";?>

    </div>
    <a href="#inicio" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
     
    
    
    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>
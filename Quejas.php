
<?php 
include "header.php";
include "quejas_funcion.php" ;

?>
<body>
    <section id="hero" class="clearfix">
    <div class="container-sm" id="#inicio">
    
    <div class="row g-1">
        <div class="col-6">
                    <center>
                        <h3 class="text-black animated zoomIn mx-auto">Quejas</h3>   
                    </center>

                 <?php 

                    $sql = "SELECT COUNT(*) total FROM `registrodequejas23`";
                    $result = $mysqli->query($sql);
                    $fila = mysqli_fetch_assoc($result);
                    $numero = $fila['total']+2;
                    

                 ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return checkSubmit();"> 
                    <center>
                        Folio: <b style="color:black"><?php echo "CQ ".$numero.''; ?> </b><br>

                    <div>
                    <input type="radio" name="my-input" id="yes" value="Verificatel" required>
                    <label for="yes">Verificatel</label>

                    <input type="radio" name="my-input" id="no" value="Particular">
                    <label for="no">Particular</label>
                    
                    <input type="radio" name="my-input" id="other" value="Civar">
                    <label for="other">Civar</label>
                    
                    <input type="radio" name="my-input" id="other2" value="Tel_Temp">
                    <label for="other2">Teléfonos Temporales</label>
                    </div>                    
                    </center>
                            
                    <div class="row g-1"><div class="col-md-6">
                        <input type="text" class="form-control" name="nickname" value="<?php echo $nombreUsuario?>" disabled>
                    </div>
                            <?php
                            
                            $clave= $mysqli->query("SELECT clave FROM centros ORDER BY clave ASC");
                            echo ' <div class="col-md-6"><select class="form-control" name="clave" required>
                            <option value="N/A">N/A</option>';
                            while($claves = $clave->fetch_assoc()){
                            echo "<option value=\"".$claves['clave']."\">".$claves['clave']."</option> ";  
                            }
                            echo '</select></div></div>';
                            
                            ?>

                            <center>
                            <h6 style="color:#000000;">Tipos de quejas</h6>
                            </center>
                            
                            <?php
                            
                            $queja= $mysqli->query("SELECT TIPO_QUEJA FROM `quejas` ORDER BY tipo_queja ASC");
                            //echo ' <div class="form-group col-md-12"><select multiple size=5 class="form-control" name="tipo_queja[]" style="font-size:100%" required>
                            echo '<select id="pre-selected-options" multiple name="tipo_queja[]" required>
                            ';
                            while($quejas = $queja->fetch_assoc()){
                            echo "<option value=\"".$quejas['TIPO_QUEJA']."\">".$quejas['TIPO_QUEJA']."</option> ";  
                            }
                            echo '</select>';     
                            ?>
                            
		                        <textarea class="form-control" name="descripcion" placeholder="Descripción" fontstyleid="mot" style="margin-top: 1px;" cols="40" rows="4" style="font-size:80%" required></textarea>

                            
                            <div style="width: 10em; text-align: center;  margin: auto; margin-top: 5px; margin-bottom: 5px;">
                                    <button class="btn btn-danger w-100 py-3" type="submit" name="submit">Registrar</button>
                            </div>
                        </form>
        </div>
        
        <div class="col-6" >
                    <center>
                        <h6 class="text-black animated zoomIn mx-auto">Busqueda</h6>   
                    </center>
                    <?php include('quejas_termino.php'); ?>
                    
        </div>
        </section>

        
        <div class="container-sm">
    
        <div class="row" >
        
        <div class="col-12">
        <?php include('quejas_consulta.php');?>
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
     
    <script src="lou/js/jquery.multi-select.js"></script>
    <script type="text/javascript">
      $(function () {
		
		$('#pre-selected-options').multiSelect();
		
      })
    </script>
    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>
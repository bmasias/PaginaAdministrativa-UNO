
<?php 
include ("conexion.php");

$IDESPECIE = $_GET['especie'];
    $sql = "SELECT * FROM detalle_especies WHERE estado='Activo' AND  especie='$IDESPECIE'";
                $resultado=mysqli_query($con,$sql);
                $rs=mysqli_fetch_array($resultado,$base);


?>
<!doctype html>
<html lang="en">
   

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="images/favicon.png">
      <title>Detalle por Especie</title>
      <!-- CSS FILES START -->
      <link href="css/custom.css" rel="stylesheet">
      <link href="css/color.css" rel="stylesheet">
      <link href="css/responsive.css" rel="stylesheet">
      <link href="css/owl.carousel.min.css" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/prettyPhoto.css" rel="stylesheet">
      <link href="css/all.min.css" rel="stylesheet">
      <!-- CSS FILES End -->
   </head>
   <body>
      <div class="wrapper">
         <!--Header Start-->
         <?php include("navegacion.php")?>
         
         <?php 
            $sql_imagen = "SELECT SUBSTRING(imagen_cabezera_detalle,INSTR(imagen_cabezera_detalle,'images'),LENGTH(imagen_cabezera_detalle)) as 'IMAGEN_SETEADA'  FROM especies WHERE estado='Activo' AND  especie='$IDESPECIE'";
                $resultado_imagen=mysqli_query($con,$sql_imagen);
                $rs_imagen=mysqli_fetch_array($resultado_imagen,$base);

            $imagen=$rs_imagen["IMAGEN_SETEADA"];

         ?>
         <!--Inner Header Start-->
         <section class="wf100 p100 inner-header" 
         style="background: url(<?php echo $imagen ?>) no-repeat;">
            <div class="container">
               <h1>DETALLE ESPECIE <?php echo $rs["especie"];?></h1>
               
            </div>
         </section>
         <!--Inner Header End--> 
         <!--Causes Start-->
         <section class="wf100 p80 events">
            <div class="event-list-two">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <?PHP 
                            $sql_DETALLE = "SELECT 
                                 titulo
                                 ,descripcion
                                 ,texto_destacado
                                 ,SUBSTRING(imagen,INSTR(imagen,'images'),LENGTH(imagen)) as 'IMAGEN_SETEADA' FROM detalle_especies WHERE estado='Activo' AND  especie='$IDESPECIE'";
                            $resultado_detalle=mysqli_query($con,$sql_DETALLE);
                            while($rs_detalle=mysqli_fetch_array($resultado_detalle,$base)){
                        ?>
                        <!--Event Box Start-->
                        <div class="event-list-box">
                            <div class="event-thumb"><a href="#"></a> <img src="<?PHP echo $rs_detalle["IMAGEN_SETEADA"]; ?>" alt=""> 
                            </div>
                           <div class="event-txt">
                              <h4> <a href="#"><?php echo $rs_detalle["titulo"]; ?></a> </h4>
                              <p><?php echo $rs_detalle["descripcion"]; ?></p>
                              <a href="#" class="attbtn"><?php echo $rs_detalle["texto_destacado"]; ?></a> 
                           </div>
                        </div>
                        <?PHP }?>
                     </div>

                     <!-- PUBLICIDAD SI PUEDEN COLOCAR-->

                     <!--<div class="col-lg-3 col-md-4">
                        <div class="sidebar">
                           <div class="side-widget">
                              <h5>Search</h5>
                              <div class="side-search">
                                 <form>
                                    <input type="search" class="form-control" placeholder="Search">
                                    <button><i class="fas fa-search"></i></button>
                                 </form>
                              </div>
                           </div>

                           <div class="side-widget text-widget">
                              <h5>Text Widget</h5>
                              <p> We are Ecova: eco &amp; environmental community. We need your support and help to Stop Globar Warning. Few generations ago it to seemed like world???s resources were infinite, and the people needed only to access them to create business, Lorem ipsum dolor it amet consect adipiscing. </p>
                           </div>

                           <div class="side-widget">
                              <h5>News &amp; Articles</h5>
                              <ul class="lastest-products">
                                 <li> <img src="images/flp1.jpg" alt=""> <strong><a href="#">How you can keep alive wild animals for...</a></strong> <span class="pdate"><i class="fas fa-calendar-alt"></i> 29 September, 2018</span> </li>
                                 <li> <img src="images/flp2.jpg" alt=""> <strong><a href="#">Eliminate your plastic bottle pollution</a></strong> <span class="pdate"><i class="fas fa-calendar-alt"></i> 29 September, 2018</span> </li>
                                 <li> <img src="images/flp3.jpg" alt=""> <strong><a href="#">How you can keep alive wild animals for...</a></strong> <span class="pdate"><i class="fas fa-calendar-alt"></i> 29 September, 2018</span> </li>
                              </ul>
                           </div>

                           <div class="side-widget project-list-widget">
                              <h5>Current Projects</h5>
                              <ul>
                                 <li><a href="#">Waste Management</a></li>
                                 <li><a href="#">Solar Energy</a></li>
                                 <li><a href="#">Eco Ideas</a></li>
                                 <li><a href="#">Recycling Materials</a></li>
                                 <li><a href="#">Plant Ecology</a></li>
                                 <li><a href="#">Saving Wildlife</a></li>
                                 <li><a href="#">Water Resources</a></li>
                                 <li><a href="#">Forest &amp; Tree Planting</a></li>
                                 <li><a href="#">Wing Energy</a></li>
                              </ul>
                           </div>
                           
                        </div>
                     </div>-->

                     <!--FIN PUBLICIDAD SI PUEDEN COLOCAR-->
                  </div>
                 
               </div>
            </div>
         </section>
         <!--Causes End--> 
         <?php include("footer.php")?>
      </div>
      <!--   JS Files Start  --> 
      <script src="js/jquery-3.3.1.min.js"></script> 
      <script src="js/jquery-migrate-1.4.1.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.min.js"></script> 
      <script src="js/owl.carousel.min.js"></script> 
      <script src="js/jquery.prettyPhoto.js"></script> 
      <script src="js/isotope.min.js"></script> 
      <script src="js/custom.js"></script>
   </body>


</html>
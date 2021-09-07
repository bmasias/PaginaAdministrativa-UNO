<?php 
include ("config.php");
include ("conexion.php");
?>
<!doctype html>
<html lang="en">
   

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="images/favicon.png">
      <title>AGROFAENAS</title>
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
      <?php include("navegacion.php");?>
 
         <!--Contact Start-->
         <div class="gallery wf100 p80">
            <div class="container">
               <div class="row">
                  <?php 
                  $select_imagenes="SELECT id,SUBSTRING(imagen,INSTR(imagen,'images'),LENGTH(imagen)) as 'IMAGEN_SETEADA' FROM `galeria` WHERE estado='Activo'";
                  $ejecutar=mysqli_query($con,$select_imagenes);
                   while ($img=mysqli_fetch_array($ejecutar,$base)) {

                  ?>
                  <div class="col-md-4 col-sm-4">
                     <div class="gallery-img">
                        <a href="<?php echo $img["IMAGEN_SETEADA"]?>" data-rel="prettyPhoto[gallery1]"><i class="fas fa-search"></i></a>
                        <img src="<?php echo $img["IMAGEN_SETEADA"]?>" alt="">
                     </div>
                  </div>
                 <?php }?>
               </div>
              
            </div>
         </div>
         <!--Contact End--> 
         <!--Footer Start-->
         <?php include("footer.php");?>
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
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
      <title><?php echo $lang['title'] ?></title>
      <!-- CSS FILES START -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
      <div class="wrapper home2">
        
         <?php include("navegacion.php");?>

         <!--Header End--> 
         <!--Slider Start-->
         <section id="home-slider" class="owl-carousel owl-theme wf100">
            <?php 

            $select_slider="SELECT 
                           titulo
                           ,subtitulo
                           ,parrafo
                           ,imagen
                           ,SUBSTRING(imagen,INSTR(imagen,'images'),LENGTH(imagen)) as 'IMAGEN_SETEADA'
                           from slider  
                           WHERE estado='Activo'";
            $ejecutar_slider=mysqli_query($con,$select_slider);
            while ($ver_slider=mysqli_fetch_array($ejecutar_slider,$base)) {
               
            ?>
            <div class="item">
               <div class="slider-caption h2slider">
                  <div class="container">
                     <strong>AGROFAENAS <span><?PHP echo $ver_slider["titulo"];?></span></strong>
                     <h1><?PHP echo $ver_slider["subtitulo"];?></h1>
                     <p><?PHP echo $ver_slider["parrafo"];?></p>
                     <!--<a href="#" class="active">Find Out More</a> <a href="#">Join us Now</a> -->
                  </div>
               </div>
               
               <img src="<?php echo $ver_slider["IMAGEN_SETEADA"]; ?>" alt=""> 
            </div>
            <?php 
            
            } //CIERRA WHILE DE SLIDER
            ?>

         </section>
         <!--Slider End--> 
         <!--Service Area Start-->
         <!--<section class="services-area wf100">
            <div class="container">
               <ul>

                  <li>
                     <div class="sinfo">
                        <img src="images/sericon1.png" alt="">
                        <h6>Recycling</h6>
                        <p>Waste Management</p>
                     </div>
                  </li>

                  <li>
                     <div class="sinfo">
                        <img src="images/sericon2.png" alt="">
                        <h6>Wind Energy</h6>
                        <p>Polar, Prevailing, Tropical</p>
                     </div>
                  </li>

                  <li>
                     <div class="sinfo">
                        <img src="images/sericon3.png" alt="">
                        <h6>Pure Water</h6>
                        <p>Save Water Resources</p>
                     </div>
                  </li>

                  <li class="active">
                     <div class="sinfo">
                        <img src="images/sericon4.png" alt="">
                        <h6>Solar Panels</h6>
                        <p>Save Natural Engery</p>
                     </div>
                  </li>

                  <li>
                     <div class="sinfo">
                        <img src="images/sericon5.png" alt="">
                        <h6>Forest Planting</h6>
                        <p>Make Plants Alive for Life</p>
                     </div>
                  </li>

               </ul>
            </div>
         </section>-->
         <!--Service Area End--> 
         <!--About Section Start-->
         <section class="h3-about wf100 p80" id="NOSOTROS">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="h3-aboutxt">
                        <?php 
                        $select_nosotros="SELECT 
                           titulo
                           ,descripcion
                           ,imagen
                           ,SUBSTRING(imagen,INSTR(imagen,'images'),LENGTH(imagen)) as 'IMAGEN_SETEADA'
                           from nosotros  
                           WHERE estado='Activo' limit 1";
                        $ejecutar_nosotros=mysqli_query($con,$select_nosotros);
                        $ver_nosotros=mysqli_fetch_array($ejecutar_nosotros,$base);
                        ?>
                        <h1><span><?php echo $ver_nosotros["titulo"] ?></span></h1>

                        <p><?php echo $ver_nosotros["descripcion"]; //$lang['parrafo1'] ?></p>

                       
                       <!-- <ul class="counter">
                           <li>
                              <p class="counter-count">69000</p>
                              <p class="ctxt">Trees Planted</p>
                           </li>
                           <li>
                              <p class="counter-count">59000</p>
                              <p class="ctxt">Solar Panels in 2017</p>
                           </li>
                           <li>
                              <p class="counter-count">49000</p>
                              <p class="ctxt">Wildlife Saved</p>
                           </li>
                        </ul>-->
                     </div>
                  </div>
                  <div class="col-md-6"> <img src="<?php echo $ver_nosotros["IMAGEN_SETEADA"]?>" alt=""> </div>
               </div>
            </div>
         </section>
         <!--About Section End--> 

         <!--Urgent Causes Start-->
         <section class="urgent-causes wf100 p80" id="Servicios-Generales">
            <div class="container">
                  <div class="row">
                     <div class="col-lg-8">
                        <div class="section-title-2">
                           <h5><?php echo $lang['servicios'] ?></h5>
                           <br>
                        </div>
                        <div class="row">
                           <?php 
                           $select_servicios="SELECT * FROM servicios_generales WHERE estado='Activo'";
                           $ejecutar_Servicios=mysqli_query($con,$select_servicios);
                           while($ver_servicios=mysqli_fetch_array($ejecutar_Servicios,$base)){
                           ?>
                           <div class="col-6">
                              <div class="eco-box">
                                 
                                 <h5 > <?php echo $ver_servicios["titulo"];//$lang['servicio1_titulo'] ?> </h5>
                                 <!--<p class="text-dark"><?php echo $ver_servicios["parrafo "];//$lang['servicio1'] ?> </p>-->
                                 <p class="text-dark"><?php echo $ver_servicios["parrafo"];//$lang['servicio1'] ?></p>
                              </div>
                           </div>
                           <?php }?>
                           <!--<div class="col-6">
                              <div class="eco-box">
                                 
                                 <h5 >  <?php echo $lang['servicio2_titulo'] ?></h5>
                                 <p class="text-dark"> <?php echo $lang['servicio2'] ?> </p>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="eco-box">
                                 
                                 <h5 >  <?php echo $lang['servicio3_titulo'] ?></h5>
                                 <p class="text-dark"><?php echo $lang['servicio3'] ?></p>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="eco-box">
                                 
                                 <h5 >  <?php echo $lang['servicio4_titulo'] ?> </h5>
                                 <p class="text-dark"><?php echo $lang['servicio4'] ?></p>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="eco-box">
                                 
                                 <h5 > <?php echo $lang['servicio5_titulo'] ?>  </h5>
                                 <p class="text-dark"> <?php echo $lang['servicio5'] ?></p>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="eco-box">
                                 
                                 <h5 > <?php echo $lang['servicio6_titulo'] ?>  </h5>
                                 <p class="text-dark"> <?php echo $lang['servicio6'] ?></p>
                              </div>
                           </div>-->
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="volunteer-form">
                           <div class="section-title">
                              <h3>Join us Now</h3>
                           </div>
                           <ul>
                              <li>
                                 <input type="text" class="form-control" placeholder="Your Name" aria-label="Your Name">
                              </li>
                              <li>
                                 <input type="text" class="form-control" placeholder="Email Address" aria-label="Email Address">
                              </li>
                              <li>
                                 <input type="text" class="form-control" placeholder="Contact" aria-label="Contact">
                              </li>
                              <li>
                                 <input type="submit" class="fsubmit" value="Signup to Join us">
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
         </section>
         <!--Urgent Causes End--> 
         <!--Current Projects Start-->

         <div class="gallery wf100 p80" id="Servicios-Especies">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="section-title-2">
                        <h5>SERVICIOS POR ESPECIE</h5>
                        
                     </div>
                  </div>
                  
               </div>
               <div class="row">
                     <?php 
                     $select_especies="SELECT id , especie,
                     SUBSTRING(imagen1,INSTR(imagen1,'images'),LENGTH(imagen1)) as 'IMAGEN1',
                     SUBSTRING(imagen_cabezera_detalle,INSTR(imagen_cabezera_detalle,'images'),LENGTH(imagen_cabezera_detalle)) as 'IMAGEN_SETEADA' 
                     FROM especies
                     where estado='Activo'";
                     $ejecutar_especies=mysqli_query($con,$select_especies);
                     while($ver_especie=mysqli_fetch_array($ejecutar_especies,$base)){
                     ?>
                     <div class="col-md-4 col-sm-4">
                        <div class="gallery-img">
                           <a href="detalle-especie.php?especie=<?php echo $ver_especie["especie"];?>"><i class="fas fa-search"></i></a>
                           <img src="<?php echo $ver_especie["IMAGEN1"];?>" alt="">
                        </div>
                     </div>
                     <?php }?>
                  </div>
               </div>
            </div>

         <!--Current Projects End--> 
         <!--News & Articles Start-->
         <section class="h2-news wf100 p80" id="Servicios-Terreno">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="section-title-2">
                        <h5>SERVICIOS EN TERRENO</h5>
                        <br>
                        <br>
                        <br>
                     </div>
                  </div>
                 <!-- <div class="col-md-6"> <a href="#" class="btn btn-success">VER TODOS</a> </div>-->
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <?php 

                      $select_terreno="SELECT 
                              MAX(id) AS 'IDTerreno'
                              ,titulo 
                              ,SUBSTRING(imagen,INSTR(imagen,'images'),LENGTH(imagen)) as 'IMAGEN_SETEADA'
                              FROM servicios_terreno 
                              WHERE destacado='SI' AND estado='Activo' LIMIT 1";
                     $ejecutar_terreno=mysqli_query($con,$select_terreno);
                     $ver_terreno=mysqli_fetch_array($ejecutar_terreno,$base);
                     ?>
                     <div class="blog-post-large">
                        <div class="post-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="<?php echo $ver_terreno["IMAGEN_SETEADA"]?>" alt=""></div>
                        <div class="post-txt">
                           <!--<ul class="post-meta">
                              <li><i class="fas fa-calendar-alt"></i> 29 September, 2018</li>
                              <li><i class="fas fa-comments"></i> 134 Comments</li>
                           </ul>-->
                           <h5><a href="#"><?php echo $ver_terreno["titulo"];?></a></h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">

                     <?PHP 
                        $top_2_terreno="SELECT 
                                    id
                                    ,titulo
                                    ,parrafo
                                    ,destacado
                                    ,SUBSTRING(imagen,INSTR(imagen,'images'),LENGTH(imagen)) as 'IMAGEN_SETEADA'
                                    FROM servicios_terreno
                                    WHERE estado='Activo' AND destacado='NO'
                                    ORDER BY id DESC
                                    LIMIT 2";
                         $ejecutar_top_2=mysqli_query($con,$top_2_terreno);
                        while($ver_top2=mysqli_fetch_array($ejecutar_top_2,$base)){
                     ?>
                     <!--Blog Small Post Start-->
                     <div class="blog-small-post">
                        <div class="post-thumb"> <a href="#"></a> <img src="<?php echo $ver_top2["IMAGEN_SETEADA"]?>" alt=""> </div>
                        <div class="post-txt">
                          
                           <h5><a href="#"><?php echo $ver_top2["titulo"] ?></a></h5>
                           <p><?php echo $ver_top2["parrafo"] ?></p>
                           
                        </div>
                     </div>
                     <!--Blog Small Post End--> 
                     <?php }?>
                  </div>
               </div>
            </div>
         </section>
         

            <!--InstaGram Start-->
            <div class="partner-logos wf100">
               <div class="container">
                  <div id="partner-logos" class="owl-carousel owl-theme">
                     <?PHP 
                     $SELECT_CLIENTES="SELECT 
                                    id
                                    ,nombre
                                    ,SUBSTRING(imagen,INSTR(imagen,'images'),LENGTH(imagen)) as 'IMAGEN_SETEADA'
                                    FROM clientes
                                    WHERE estado='Activo'";
                      $ejecutar_CLIENTE=mysqli_query($con,$SELECT_CLIENTES);
                     while($ver_cliente=mysqli_fetch_array($ejecutar_CLIENTE,$base)){

                     ?>
                     <div class="item"><img src="<?php echo $ver_cliente["IMAGEN_SETEADA"]?>" alt=""></div>
                     <?PHP }?>
                     
                  </div>
               </div>
            </div>
         <!--InstaGram End--> 
         <!--Footer Start-->
         <?php include("footer.php");?>
         <!--Footer End--> 
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
<?php include ("config.php");?>

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
            $x=0;

            while ($x <=3) {
               
            
            ?>
            <div class="item">
               <div class="slider-caption h2slider">
                  <div class="container">
                     <strong>Ecova<span> IMAGEN <?PHP ECHO $x?></span></strong>
                     <h1>Eco Friendly</h1>
                     <p>Nonprofit WordPress Theme</p>
                     <!--<a href="#" class="active">Find Out More</a> <a href="#">Join us Now</a> -->
                  </div>
               </div>
               <img src="images/h2-slide1.jpg" alt=""> 
            </div>
            <?php 
               $x=$x+1;
            } //CIERRA WHILE DE SLIDER
            ?>
            <!--<div class="item">
               <div class="slider-caption h2slider">
                  <div class="container">
                     <strong><span>Please</span> IMAGEN 2 </strong>
                     <h1>Save WildLife</h1>
                     <p>of <strong>endangered animals</strong> in the world</p>
                    
                  </div>
               </div>
               <img src="images/h2-slide2.jpg" alt=""> 
            </div>
            <div class="item">
               <div class="slider-caption h2slider">
                  <div class="container">
                     <strong>Save <span> IMAGEN 3</span> partner</strong>
                     <h1>Water Resource</h1>
                     <p>Before <strong>it’s too late</strong> for us...</p>
                     
                  </div>
               </div>
               <img src="images/h2-slide3.jpg" alt=""> 
            </div>-->
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
                        <h1> <?php echo $lang['encabezado1'] ?><span><?php echo $lang['encabezado2'] ?></span></h1>

                        <p><?php echo $lang['parrafo1'] ?></p>

                        <p> <?php echo $lang['parrafo2'] ?> </p>

                        <p> <?php echo $lang['parrafo3'] ?> </p>
                        
                        <p> <?php echo $lang['parrafo4'] ?> </p>
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
                  <div class="col-md-6"> <img src="images/h3about.png" alt=""> </div>
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
                           <div class="col-6">
                              <div class="eco-box">
                                 <span class="econ-icon"><i class="far fa-handshake"></i></span>
                                 <h5 > <?php echo $lang['servicio1_titulo'] ?> </h5>
                                 <p class="text-dark"><?php echo $lang['servicio1'] ?> </p>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="eco-box">
                                 <span class="econ-icon"><i class="far fa-money-bill-alt"></i></span>
                                 <h5 >  <?php echo $lang['servicio2_titulo'] ?></h5>
                                 <p class="text-dark"> <?php echo $lang['servicio2'] ?> </p>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="eco-box">
                                 <span class="econ-icon"><i class="fas fa-heart"></i></span>
                                 <h5 >  <?php echo $lang['servicio3_titulo'] ?></h5>
                                 <p class="text-dark"><?php echo $lang['servicio3'] ?></p>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="eco-box">
                                 <span class="econ-icon"> <i class="fas fa-coffee"></i> </span>
                                 <h5 >  <?php echo $lang['servicio4_titulo'] ?> </h5>
                                 <p class="text-dark"><?php echo $lang['servicio4'] ?></p>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="eco-box">
                                 <span class="econ-icon"> <i class="fas fa-coffee"></i> </span>
                                 <h5 > <?php echo $lang['servicio5_titulo'] ?>  </h5>
                                 <p class="text-dark"> <?php echo $lang['servicio5'] ?></p>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="eco-box">
                                 <span class="econ-icon"> <i class="fas fa-coffee"></i> </span>
                                 <h5 > <?php echo $lang['servicio6_titulo'] ?>  </h5>
                                 <p class="text-dark"> <?php echo $lang['servicio6'] ?></p>
                              </div>
                           </div>
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
                     <!--Image Box Start-->
                     <div class="col-md-4 col-sm-4">
                        <div class="gallery-img">
                           <a href="detalle-especie.php"><i class="fas fa-search"></i></a>
                           <img src="images/NUEVAS/cerezas.jpg" alt="">
                        </div>
                     </div>
                     <!--Image Box End-->
                     <!--Image Box Start-->
                     <div class="col-md-4 col-sm-4">
                        <div class="gallery-img">
                           <a href="images/gallery/sgall2.jpg" data-rel="prettyPhoto[gallery1]"><i class="fas fa-search"></i></a>
                           <img src="images/gallery/sgall2.jpg" alt="">
                        </div>
                     </div>
                     <!--Image Box End--> 
                     <!--Image Box Start-->
                     <div class="col-md-4 col-sm-4">
                        <div class="gallery-img">
                           <a href="images/gallery/sgall3.jpg" data-rel="prettyPhoto[gallery1]"><i class="fas fa-search"></i></a>
                           <img src="images/gallery/sgall3.jpg" alt="">
                        </div>
                     </div>
                     <!--Image Box End-->
                     <!--Image Box Start-->
                     <div class="col-md-4 col-sm-4">
                        <div class="gallery-img">
                           <a href="images/gallery/sgall4.jpg" data-rel="prettyPhoto[gallery1]"><i class="fas fa-search"></i></a>
                           <img src="images/gallery/sgall4.jpg" alt="">
                        </div>
                     </div>
                     <!--Image Box End-->
                     <!--Image Box Start-->
                     <div class="col-md-4 col-sm-4">
                        <div class="gallery-img">
                           <a href="images/gallery/sgall5.jpg" data-rel="prettyPhoto[gallery1]"><i class="fas fa-search"></i></a>
                           <img src="images/gallery/sgall5.jpg" alt="">
                        </div>
                     </div>
                     <!--Image Box End--> 
                     <!--Image Box Start-->
                     <div class="col-md-4 col-sm-4">
                        <div class="gallery-img">
                           <a href="images/gallery/sgall6.jpg" data-rel="prettyPhoto[gallery1]"><i class="fas fa-search"></i></a>
                           <img src="images/gallery/sgall6.jpg" alt="">
                        </div>
                     </div>
                     <!--Image Box End--> 
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
                  <div class="col-md-6"> <a href="#" class="btn btn-success">VER TODOS</a> </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="blog-post-large">
                        <div class="post-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="images/h2news1.jpg" alt=""></div>
                        <div class="post-txt">
                           <ul class="post-meta">
                              <li><i class="fas fa-calendar-alt"></i> 29 September, 2018</li>
                              <li><i class="fas fa-comments"></i> 134 Comments</li>
                           </ul>
                           <h5><a href="#">Planting Trees for Better Future</a></h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <!--Blog Small Post Start-->
                     <div class="blog-small-post">
                        <div class="post-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="images/h2news2.jpg" alt=""> </div>
                        <div class="post-txt">
                           <span class="pdate"> <i class="fas fa-calendar-alt"></i> 29 September, 2018</span>
                           <h5><a href="#">How you can keep alive wildlife long.</a></h5>
                           <p>According to a survey the perceived higher cost of environmentally.</p>
                           <a href="#" class="rm">Read More</a> 
                        </div>
                     </div>
                     <!--Blog Small Post End--> 
                     <!--Blog Small Post Start-->
                     <div class="blog-small-post">
                        <div class="post-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="images/h2news3.jpg" alt=""> </div>
                        <div class="post-txt">
                           <span class="pdate"> <i class="fas fa-calendar-alt"></i> 29 September, 2018</span>
                           <h5><a href="#">The effort GoGreen has been felt across</a></h5>
                           <p>Majority have suffered alteration in some form by injected humour.</p>
                           <a href="#" class="rm">Read More</a> 
                        </div>
                     </div>
                     <!--Blog Small Post End--> 
                  </div>
               </div>
            </div>
         </section>
         

         <!--InstaGram Start-->
 <div class="partner-logos wf100">
               <div class="container">
                  <div id="partner-logos" class="owl-carousel owl-theme">
                     <div class="item"><img src="images/plogo1.png" alt=""></div>
                     <div class="item"><img src="images/plogo2.png" alt=""></div>
                     <div class="item"><img src="images/plogo3.png" alt=""></div>
                     <div class="item"><img src="images/plogo4.png" alt=""></div>
                     <div class="item"><img src="images/plogo5.png" alt=""></div>
                     <div class="item"><img src="images/plogo1.png" alt=""></div>
                     <div class="item"><img src="images/plogo2.png" alt=""></div>
                     <div class="item"><img src="images/plogo3.png" alt=""></div>
                     <div class="item"><img src="images/plogo4.png" alt=""></div>
                     <div class="item"><img src="images/plogo5.png" alt=""></div>
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
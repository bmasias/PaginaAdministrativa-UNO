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
         <section class="contact-page wf100 p80">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="contact-form">
                        <h3>CONTACTANOS</h3>
                        <ul class="cform">
                        <form action="contacto.php" method="POST">
                           <li class="half pr-15">
                              <input type="text" class="form-control" placeholder="Ingrese Nombre Completo" name="txt_nombre" required="">
                           </li>
                           <li class="half pl-15">
                              <input type="email" class="form-control" placeholder="Ingrese Correo"  name="txt_email" required="">
                           </li>
                           <li class="half pr-15">
                              <input type="number" class="form-control" placeholder="Ingrese Telefono"  name="txt_telefono" required=""  maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                           </li>
                           <li class="half pl-15">
                              <input type="text" class="form-control" placeholder="Ingrese Asunto" name="txt_asunto" required="">
                           </li>
                           <li class="full">
                              <textarea class="textarea-control" placeholder="Ingrese Mensaje" name="txt_mensaje" required=""></textarea>
                           </li>
                           <li class="full">
                              <input type="submit" value="ENVIAR" class="fsubmit" name="btn_contacto">
                           </li>
                        </form>
                        </ul>


                     </div>

                  </div>
                                                                <?php 
                                 if ($_POST["btn_contacto"]) {
                                    
                                    $nombre=$_POST["txt_nombre"];
                                    $email=$_POST["txt_email"];
                                    $telefono=$_POST["txt_telefono"];
                                    $asunto=$_POST["txt_asunto"];
                                    $msg=$_POST["txt_mensaje"];

                                    $para      = 'contacto@agrofaenas.cl';
                                    $titulo    = 'CONTACTO WEB,'.$asunto;
                                    /*$mensaje   = 'SE HAN CONTACTADO VIA WEB, NOMBRE:'.' '.$nombre.',TELEFONO:'.$telefono.', CORREO: '.$email;*/
                                   $mensaje = "SE HAN CONTACTADO VIA WEB\n".
                                              "Nombre: $nombre\n".
                                              "Correo: $email\n".
                                              "TELEFONO: +56$telefono\n".
                                              "Asunto: $asunto\n".
                                              "Mensaje: $msg\n".
                                              "";

                                    //mail($para, $titulo, $mensaje, $email);

                                    if(mail($para, $titulo, $mensaje, $email)) {
                                         echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                             <strong>Mensaje Enviado
                                             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                               <span aria-hidden='true'>&times;</span>
                                             </button>
                                           </div>";
                                        
                                    } else {

                                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                             <strong>Error, al enviar mensaje
                                             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                               <span aria-hidden='true'>&times;</span>
                                             </button>
                                           </div>";
                                       
                                    }

                                 }

                              ?>
                  <div class="col-md-6">
                     <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11418.310112375979!2d-74.00986187433132!3d40.710981182716246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2s!4v1540972202179"></iframe>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container contact-info">
               <div class="row">
                  <div class="col-md-12">
                     <h3>iNFORMACION DE CONTACTO</h3>
                  </div>
                  <!--Contact Info Start-->
                  <div class="col-md-4">
                     <div class="c-info">
                        <h6>UBICACION:</h6>
                        <?php
                        $select_ubicacion="SELECT parrafo FROM `contacto` WHERE estado='Activo'";
                        $ejecutar_ubicacion=mysqli_query($con,$select_ubicacion);
                        $ver_ubicacion=mysqli_fetch_array($ejecutar_ubicacion,$base)
                         ?>
                        <p> <?php echo $ver_ubicacion["parrafo"];?> </p>
                     </div>
                  </div>
                  <!--Contact Info End--> 
                  <!--Contact Info Start-->
                  <div class="col-md-4">
                     <div class="c-info">
                        <h6>CONTACTO:</h6>
                        <?php
                        $select_contacto="SELECT parrafo2 FROM `contacto` WHERE estado='Activo'";
                        $ejecutar_contacto=mysqli_query($con,$select_contacto);
                        $ver_contacto=mysqli_fetch_array($ejecutar_contacto,$base)
                         ?>
                        <p><?php echo $ver_contacto["parrafo2"];?> </p>
                        
                     </div>
                  </div>
                  <!--Contact Info End--> 
                  <!--Contact Info Start-->
                  <div class="col-md-4">
                     <div class="c-info">
                        <h6>MAS INFORMACION:</h6>
                        <?php
                        $select_mas="SELECT parrafo3 FROM `contacto` WHERE estado='Activo'";
                        $ejecutar_mas=mysqli_query($con,$select_mas);
                        $ver_mas=mysqli_fetch_array($ejecutar_mas,$base)
                         ?>
                        <p><?php echo $ver_mas["parrafo3"];?> </p>
                        
                     </div>
                  </div>
                  <!--Contact Info End--> 
               </div>
            </div>
         </section>
         <!--Contact End--> 

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
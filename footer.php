<footer class="footer">
            <div class="footer-top wf100">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->
                        <div class="footer-widget">
                           <h4>SOBRE LA EMPRESA</h4>
                           <p> If anything’s hot in today’s economy, it’s saving money, including a broad range of green businesses helping people save energy, water, and other resources. Definitely, you can go with this business as it is a nothing but the future. </p>
                           <a href="index.php#NOSOTROS" class="lm">NOSOTROS</a> 
                        </div>
                        <!--Footer Widget End--> 
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->
                        <div class="footer-widget">
                           <h4>Servicios-Generales</h4>
                           <?php 
                           $select_titulos_sg="SELECT titulo FROM `servicios_generales` WHERE estado='Activo' LIMIT 3";
                           $ejecutar_sg=mysqli_query($con,$select_titulos_sg);

                           ?>
                           <ul class="quick-links">
                              <?php  while ($titulos=mysqli_fetch_array($ejecutar_sg,$base)) {?>
                              <li><a href="#"><?php echo $titulos["titulo"]?></a></li>
                              <?php }?>
                           </ul>
                        </div>
                        <!--Footer Widget End--> 
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->
                        <div class="footer-widget">
                           <h4>Servicios-Especies</h4>
                           <ul class="lastest-products">
                           <?php 
                           $select_especies_fo="SELECT id , especie,
                           SUBSTRING(imagen1,INSTR(imagen1,'images'),LENGTH(imagen1)) as 'IMAGEN1',
                           SUBSTRING(imagen_cabezera_detalle,INSTR(imagen_cabezera_detalle,'images'),LENGTH(imagen_cabezera_detalle)) as 'IMAGEN_SETEADA' 
                           FROM especies
                           where estado='Activo' LIMIT 3";
                           $ejecutar_especies_fo=mysqli_query($con,$select_especies_fo);
                           while($ver_especie_fo=mysqli_fetch_array($ejecutar_especies_fo,$base)){
                           ?>
                              <li> <img src="<?php echo $ver_especie_fo["IMAGEN1"];?>" alt="" width="70"> <strong><a href="detalle-especie.php?especie=<?php echo $ver_especie_fo["especie"];?>"><?php echo $ver_especie_fo["especie"] ?></a></strong> </li>
                           <?php }?>
                           </ul>
                        </div>
                        <!--Footer Widget End--> 
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->
                     <div class="footer-widget">
                           <h4>Servicios-Terreno</h4>
                           <ul class="lastest-products">

                           <?PHP 
                              $terreno="SELECT 
                                          id
                                          ,titulo
                                          ,parrafo
                                          ,destacado
                                          ,SUBSTRING(imagen,INSTR(imagen,'images'),LENGTH(imagen)) as 'IMAGEN_SETEADA'
                                          FROM servicios_terreno
                                          WHERE estado='Activo' LIMIT 3";
                               $ejecutar_terreno=mysqli_query($con,$terreno);
                              while($ver_terreno=mysqli_fetch_array($ejecutar_terreno,$base)){
                           ?>
                             <li> <img src="<?php echo $ver_terreno["IMAGEN_SETEADA"];?>" alt="" width="70"> <strong><a href="#"><?php echo $ver_terreno["titulo"];?></a></strong> </li>
                           <?php }?>
                           </ul>
                        </div>
                        <!--Footer Widget End--> 
                        <!--Footer Widget End--> 
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-copyr wf100">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4">AGROFAENAS</div>
                     <div class="col-md-8 col-sm-8">
                        <p><a target="_blank" href="">DESARROLLADO POR BASTIAN MASIAS</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
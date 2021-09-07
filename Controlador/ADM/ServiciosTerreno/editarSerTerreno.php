<?php 
  include("../../../conexion.php");
  error_reporting(0);
  session_start();
  if ($_SESSION["estado"] == "LOGEADO"){ 

     $idNosotros = $_GET['id'];
    $sql = "SELECT * FROM servicios_terreno WHERE estado='Activo' AND  id='$idNosotros'";
                $resultado=mysqli_query($con,$sql);
                $rs=mysqli_fetch_array($resultado,$base);

                  $idNosotros=$rs['id'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AGROFAENAS</title>

  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
  <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>
<body style="background-color: #B2B2B2">
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">ACTUALIZAR SERVICIO TERRENO</h1>
              </div>
              <form class="user" method="POST" action="editarSerTerreno.php" >
                <input type="hidden" readonly="" name="txt_id" value="<?php echo $idNosotros?>">
                <div class="form-group row">
                  <div class="col-sm-8 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"  name="txt_titulo" placeholder=" Ingrese Titulo" required="" value="<?php echo $rs["titulo"];?>">
                  </div>
                   <div class="col-sm-4 mb-3 mb-sm-0">
                    <select class="form-control " name="cbo_destacado">
                      <option value="<?php echo $rs["destacado"];?>" selected><?php echo $rs["destacado"];?></option>
                      <option disabled="">SELECCIONE SI ES DESTACADO</option>
                      <option value="SI">SI</option>
                      <option value="NO">NO</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <textarea name="editor1"><?php echo $rs["parrafo"];?></textarea>
                  </div>
                </div>
                <input type="submit" name="BTN_INGRESAR" value="ACTUALIZAR SERVICIO" class="btn btn-primary btn-user btn-block">
                <hr>
                <a href="../listaServiciosTerreno.php" class="btn btn-dark btn-user btn-block">VOLVER</a>
              </form>
            </div>
          </div>
        <?php 

            if ($_POST["BTN_INGRESAR"]) {

              $idTerreno=$_POST["txt_id"];
              $titulo=$_POST["txt_titulo"];
              $destacado=$_POST["cbo_destacado"];
              $parrafo=$_POST["editor1"];
            
              $insertar="UPDATE servicios_terreno SET titulo='$titulo' , parrafo='$parrafo' , destacado='$destacado' , fecha_upd=NOW() WHERE id='$idTerreno'";
              $resultadoInsert=mysqli_query($con,$insertar);

              		if ($resultadoInsert) {
            				echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            					  <strong>SERVICIO ACTUALIZADO CORRECTAMENTE
            					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            					    <span aria-hidden='true'>&times;</span>
            					  </button>
            					</div>";

                    echo"
                      <script type=\"text/javascript\">
                        function redireccionar(){window.location='../listaServiciosTerreno.php';}
                                  setTimeout ('redireccionar()', 2000);
                    </script>";
              		}else{
            				echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            					  <strong>ERROR DE INGRESO DE DATOS
            					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            					    <span aria-hidden='true'>&times;</span>
            					  </button>
            					</div>";
              		}//cierra if de resultado
            }//cierra click del boton
        ?>
        </div>
      </div>
    </div>

    <script src="../../vendor/jquery/jquery.min.js"></script>
  	<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  	<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
	  <script src="../../js/sb-admin-2.min.js"></script>
    <script>
            CKEDITOR.replace( 'editor1' );
    </script>

</body>
</html>
<?php 

}else{
  header("location:../../login_log.php");
  } 
?>
<?php 
  include("../../../conexion.php");
  error_reporting(0);
  session_start();
  if ($_SESSION["estado"] == "LOGEADO"){ 

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
                <h1 class="h4 text-gray-900 mb-4">CREAR NUEVO DETALLE ESPECIE</h1>
              </div>
              <form class="user" method="POST" action="nuevoDetalle.php" >
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"  name="txt_titulo" placeholder=" Ingrese Titulo" required="">
                  </div>
                  
                </div>
                 <div class="form-group row">
                  
                 <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"  name="txt_destacado" placeholder=" Ingrese Texto Destacado" required="">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select  class="form-control input" name="CBO_ESPECIE" id="variedad" >
                      <option selected="" value="0" disabled="">SELECIONE ESPECIE</option>
                        <?php 
                            $listar="SELECT DISTINCT especie FROM especies WHERE estado='Activo'";
                            $ejecutalistar=mysqli_query($con,$listar);
                            while($rs=mysqli_fetch_array($ejecutalistar,$base)){
                            echo "<option value='$rs[especie]'>$rs[especie]</option>";
                                  }
                         ?>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <textarea name="editor1"></textarea>
                  </div>
                </div>
                <input type="submit" name="BTN_INGRESAR" value="REGISTRAR DETALLE" class="btn btn-primary btn-user btn-block">
                <hr>
                <a href="../listaDetallexEspecie.php" class="btn btn-dark btn-user btn-block">VOLVER</a>
              </form>
            </div>
          </div>
        <?php 

            if ($_POST["BTN_INGRESAR"]) {


              $titulo=$_POST["txt_titulo"];
              $textoDestacado=$_POST["txt_titulo"];
              $parrafo=$_POST["editor1"];
              $especie=$_POST["CBO_ESPECIE"];
            
              $insertar="INSERT INTO detalle_especies VALUES(null,'$titulo','$parrafo','$textoDestacado',null,null,null,null,'$especie',NOW(),null,null,'Activo')";
              $resultadoInsert=mysqli_query($con,$insertar);

              		if ($resultadoInsert) {
            				echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            					  <strong>DETALLE CREADO CORRECTAMENTE
            					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            					    <span aria-hidden='true'>&times;</span>
            					  </button>
            					</div>";
              		}else{
                    echo $insertar;
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
<?php 
  include("../../../conexion.php");
  error_reporting(0);
  session_start();
  if ($_SESSION["estado"] == "LOGEADO"){ 
    $idNosotros = $_GET['id'];

    $listar="SELECT * FROM contacto WHERE estado='Activo'";
    $ejecutar=mysqli_query($con,$listar);
    $ver=mysqli_fetch_array($ejecutar,$base);
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
                <h1 class="h4 text-gray-900 mb-4">ACTUALIZAR NOSOTROS</h1>
              </div>
              <form class="user" method="POST" action="editarContacto.php" enctype="multipart/form-data">
                

                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label>INGRESE DATOS DE UBICACION</label>
                    <textarea name="editor1"> <?php echo $ver["parrafo"];?></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label>INGRESE DATOS DE CONTACTO</label>
                    <textarea name="editor2"> <?php echo $ver["parrafo2"];?></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label>INGRESE DATOS DE MAS INFORMACION</label>
                    <textarea name="editor3"> <?php echo $ver["parrafo3"];?></textarea>
                  </div>
                </div>
                <input type="submit" name="BTN_INGRESAR" value="ACTUALIZAR CONTACTO" class="btn btn-primary btn-user btn-block">
                <hr>
                <a href="../listaContacto.php" class="btn btn-dark btn-user btn-block">VOLVER</a>
              </form>
            </div>
          </div>
        <?php 

            if ($_POST["BTN_INGRESAR"]) {


              $parrafo=$_POST["editor1"];
              $parrafo2=$_POST["editor2"];
              $parrafo3=$_POST["editor3"];

                $update="UPDATE contacto SET parrafo='$parrafo' , parrafo2='$parrafo2',parrafo3='$parrafo3' WHERE id='1'";
                $ejecutar_update=mysqli_query($con,$update);

                if ($ejecutar_update) {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>CONTACTO ACTUALIZADO CORRECTAMENTE
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                      </div>";
                  }else{
                    echo "$ejecutar_update";
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>ERROR DE INGRESO DE DATOS
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                      </div>";


              }


             
              		
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
            CKEDITOR.replace( 'editor2' );
            CKEDITOR.replace( 'editor3' );
    </script>

</body>
</html>
<?php 

}else{
  header("location:../../login_log.php");
  } 
?>
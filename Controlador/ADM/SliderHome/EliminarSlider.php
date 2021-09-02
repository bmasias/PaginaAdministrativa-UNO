<!DOCTYPE html>
<html>
<head>
	  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
<?php  
include("../../../conexion.php");
			$idSlider = $_GET['id'];
			$sql= "UPDATE slider SET estado='Inactivo',fecha_del=NOW() WHERE id='$idSlider'";
			$ejecuta=mysqli_query($con,$sql);
			if ($ejecuta) {
				echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
					  <strong>SLIDER ELIMINADO
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					    <span aria-hidden='true'>&times;</span>
					  </button>
					</div>";
				echo"
                <script type=\"text/javascript\">
		            function redireccionar(){window.location='../listaSlider.php';}
		                      setTimeout ('redireccionar()', 1000);
		       </script>";
			}else{
			echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
					  <strong>ERROR AL EJECUTAR SENTENCIA
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					    <span aria-hidden='true'>&times;</span>
					  </button>
					</div>";
			}
        ?>
</body>
</html>

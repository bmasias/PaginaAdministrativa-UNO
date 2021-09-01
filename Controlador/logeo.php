<?php
include("../conexion.php");
	//TOMAMOS VALORES DE LOS TEXFIELD

	$email=$_POST["txt_email"];
	$pass=$_POST["txt_clave"];

if(($_POST["btn_entrar"])  && ($email!="") && ($pass!=""))
{
	//TOMAMOS VALORES DE LOS TEXFIELD
			$email=$_POST["txt_email"];
			$pass=$_POST["txt_clave"];

		//CREAMOS CONSULTA PARA LOGIN
			$listar="SELECT * FROM usuarios_lg WHERE email='$email' AND clave='$pass' AND estado='Activo'";
	$ejecutalistar=mysqli_query($con,$listar);
	while($rs=mysqli_fetch_array($ejecutalistar,$base))
	{ 
		//RESCATA VALORES DE LA BD
		$id_usu= $rs["id"];
		$email= $rs["email"];
		$nombre_usu= $rs["nombre"];
	
		$cargo= $rs["cargo"];
	}//cierra while

	if($email !="")
	{
		//INICIA UNA SESION PARA EL USUARIO
		session_start();
		//RESCATA VALORES DE PERSONAL DE PACKING
		$_SESSION["id"] = $id_usu;
		$_SESSION["email"] = $email;
		$_SESSION["nombre"]  = $nombre_usu;
		$_SESSION["cargo"]  = $cargo;
		$_SESSION["estado"] ="LOGEADO";


			//***** ACCESOS *****//
			if($cargo=="ADMIN_CONTROLADOR"){
				header("location:ADM/listaUsuarios.php");
			}else{
				//*****REDIRECCION A INDEX DE DATOS INCORRECTOS*****//
				echo"<script type=\"text/javascript\">alert('Datos Incorrectos'); window.location='login_log.php';</script>";
			}
	}else{
		header("location:login_log.php");//SI EL RUT ES DISTINTO
	}
}else{
	header("location:login_log.php");
}//CIERRE PRESION BOTON
?>
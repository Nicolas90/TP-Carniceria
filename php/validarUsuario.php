<?php 
require_once("../clases/AccesoDatos.php");
require_once("../clases/usuario.php");

session_start();

$clave=$_POST['clave'];
$email=$_POST['email'];
$recordar=$_POST['recordarme'];

$retorno = "no registrado";


	$usuarios = usuario::TraerTodosLosUsuarios();
	foreach ($usuarios as $usuario) 
	{
		if ( ($usuario->email==$email) && ($usuario->clave==$clave) ) 
		{
			if($recordar=="true")
			{
				setcookie("emailCookie",$email,  time()+36000 , '/');
			}
			else
			{
				setcookie("emailCookie",$email,  time()-36000 , '/');	
			}
			$_SESSION['registrado']=$usuario->nombre;
			$_SESSION['identificador']=$usuario->id;
			$retorno="ingreso";
			break;
		}
	}


echo $retorno;
?>
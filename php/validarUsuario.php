<?php 
session_start();

$clave=$_POST['clave'];
$email=$_POST['email'];
$recordar=$_POST['recordarme'];


//////////////////////////////validar usuarios con $clave

	if($recordar=="true")
	{
		setcookie("emailCookie",$email,  time()+36000 , '/');
	}
	$_SESSION['registrado']=$email;
	$retorno="ingreso";


echo $retorno;
?>
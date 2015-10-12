function validarLogin()
{
	var varClave=$("#clave").val();
	var varEmail=$("#email").val();
	var recordar=$("#recordarme").is(':checked');
//$("#sidebar").html("<img src='imagenes/ajax-loader.gif' style='width: 30px;'/>");
	
	var funcionAjax=$.ajax({
		url:"php/validarUsuario.php",
		type:"post",
		data:{
			recordarme:recordar,
			clave:varClave,
			email:varEmail
		}
	});
	funcionAjax.done(function(retorno)
	{
		if(retorno.trim()=="ingreso")
		{
			Mostrar('acciones');
		}
        else
        {
			MostarLogin();
        }
	});
	funcionAjax.fail(function(retorno)
	{
		$("#principal").html("Error al validar el login");
	});
}


function deslogear()
{	
	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno)
	{
			MostarLogin();
	});	
}
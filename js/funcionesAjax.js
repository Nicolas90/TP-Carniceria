function MostarLogin()
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarLogin"}
	});
	funcionAjax.done(function(retorno)
	{
		$("#principal").html(retorno);	
	});

	funcionAjax.fail(function(retorno)
	{
		$("#principal").html("No se cargo el formulario de login");
	});
}


function Mostrar(queMostrar)
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:queMostrar}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
	});
	funcionAjax.fail(function(retorno)
	{
		$("#principal").html("ERROR en function Mostrar(queMostrar)");
	});
}
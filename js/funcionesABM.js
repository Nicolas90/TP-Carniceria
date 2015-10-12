function GuardarPedido()
{
        var id = $("#id").val();
		//var s=$('input:radio[name=s]:checked').val();

		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"POST",
		data:{
			queHacer:"GuardarPedido",
            id: id
		}
	});
	funcionAjax.done(function(retorno)
	{
		//alert(retorno);
		//deslogear();
		//$("#informe").html("cantidad de agregados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		//alert(retorno);
		//$("#informe").html(retorno.responseText);	
	});	
}

function BorrarPedido(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarPedido",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		//$("#informe").html("cantidad de eliminados "+ retorno);	
	});
	funcionAjax.fail(function(retorno){	
		//$("#informe").html(retorno.responseText);	
	});	
}

function Editarvoto(idParametro)
{
    Mostrar('MostrarFormAlta');
	//alert("Modificar");
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerPedido",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		var voto =JSON.parse(retorno);		
		$("#id").val(voto.id);
        /*
        if(v.s == "F")
             $('input:radio[name="s"][value="F"]').prop('checked', true);
        else
            $('input:radio[name="s"][value="M"]').prop('checked', true);	
        */
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html(retorno.responseText);	
	});
	
}

function VerEnMapa(prov, dire, loc, id)
{
    //alert(prov + dire +  loc);
    var punto = dire +", " +  loc  +", " +  prov +", Argentina";
    console.log(punto);
    var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"VerEnMapa"
		}
	});
    funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
        $("#punto").val(punto);
        $("#id").val(id);
	Geolocalizacion.Marcador.iniciar();
	Geolocalizacion.Marcador.verMarcador();	
	});
}
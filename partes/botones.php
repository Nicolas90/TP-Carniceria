<?php 
session_start();

	if(isset($_SESSION['registrado']))
	{
		//echo "<section class='widget'><center><h2> Bienvenido: ". $_SESSION['registrado']."</h2></center>";

?>
		
	<h4 class="widgettitle">Botones ABM</h4>
		<ul>
			<li><a onclick="Mostrar('MostrarPedidos')" class=" btn-lg MiBotonUTN" ><span class="glyphicon glyphicon-th">&nbsp;</span>Sus pedidos</a></li>
			<li><a onclick="Mostrar('AltaPedidos')" class="btn-lg MiBotonUTN" ><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Realizar pedido</a></li>	
		</ul>
	</section>

<?php 
	}
	else
	{
		echo "<section class='widget'>
			<h4 class='widgettitle'>No estas registrado</h4></section>";
	}
?>
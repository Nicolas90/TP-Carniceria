<?php 
	session_start();
	require_once("clases/AccesoDatos.php");
	require_once("clases/pedido.php");
	$arrayPedidos=pedido::TraerPedidosPorId($_SESSION['identificador']);
?>
<script type="text/javascript">
$("#content").css("width", "900px");
</script>

<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>ID_PEDIDO</th><th>Corte</th>
		</tr>
	</thead>
	<tbody>

		<?php
foreach ($arrayPedidos as $pedido) 
{
	echo"<tr>
			<td><a onclick='EditarPedido($pedido->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='BorraPedido($pedido->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>Borrar</a></td>
			<td>$pedido->id</td>
			<td>$pedido->corte</td>
        </tr>";
}
		 ?>
	</tbody>
</table>
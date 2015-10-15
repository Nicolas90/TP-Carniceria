<?php
class pedido
{
	public $id;
 	public $idcliente;
 	public $corte;

	public function InsertarPedido()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta(
		"CALL InsertarElPedido('$this->id','$this->idcliente')");
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}

	public static function TraerTodosLosPedidos()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerTodosLosPedidos()");
		$consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_CLASS, "pedido");		
	}

	public static function TraerPedidosPorId($id)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerPedidosPorId($id)");		
		$consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_CLASS, "pedido");
	}
}
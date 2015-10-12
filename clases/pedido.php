<?php
class pedido
{
	public $id;
 	public $cliente;

	public function InsertarPedido()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("
		CALL InsertarElvoto('$this->dni','$this->candidato','$this->provincia','$this->sexo', '$this->localidad', '$this->direccion')");
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}
}
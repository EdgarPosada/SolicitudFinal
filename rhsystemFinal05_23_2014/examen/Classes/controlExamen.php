<?php
include_once 'Conexion.php';

class ControlExamen
{

//Variables
	private $id;
	private $resultado;

//Setters
	function setId($val)
	{ $this->id = $val; }

	function setResultado($val)
	{ $this->resultado = $val; }


//Funciones 
	function updateResultado()
	{
		$con = new Conexion();
		$sql = "UPDATE solicitud SET resultadoExamen = '$this->resultado' WHERE id_solicitud = '$this->id' ";
		$con->sql($sql);

	}
	
}

?>
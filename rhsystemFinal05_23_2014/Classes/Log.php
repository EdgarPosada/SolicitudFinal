<?php
include_once '../Classes/Conexion.php';

class Log{

	private $idSolicitud;
	private $idEstado;
	private $comentario;
	private $fecha;
	private $idUsuario;

	function setIdSolicitud($val){
		$this->idSolicitud = $val;
	}

	function setIdEstado($val){
		$this->idEstado = $val;
	}

	function setComentario($val){
		$this->comentario = $val;
	}

	function setFecha($val){
		$this->fecha = $val;
	}

	function setIdUsuario($val){
		$this->idUsuario = $val;
	}


	function insertaLog(){

		$con = new Conexion();
		$sql = "INSERT INTO log (id_solicitud, id_estado, comentario, fecha, id_usuario) VALUES('$this->idSolicitud', '$this->idEstado', '$this->comentario', '$this->fecha', '$this->idUsuario') ";
		$con->sql($sql);

	}

	function obtieneDatos(){

		$con = new Conexion();
		$sql = "SELECT * FROM log WHERE id_solicitud = '$this->idSolicitud' order by id_log desc ";
		$result = $con->sql($sql);

		return $result;
	}


}


?>
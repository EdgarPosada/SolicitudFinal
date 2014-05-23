<?php
include_once 'Classes/Conexion.php';

	class Candidatos{

		private $id;
		private $estado;
		private $comentario;

		function setId($val)
		{$this->id = $val;}

		function setEstado($val)
		{$this->estado = $val;}

		function setComentario($val)
		{$this->comentario = $val;}


		function actualizaEstado()
		{
			$con = new Conexion();
			$sql = "UPDATE solicitud set estado_solicitud = '$this->estado' WHERE id_solicitud = '$this->id' ";
			$con->sql($sql);
		}

		function insertaFechaLog()
		{
			$date = date('Y-m-d');
			$con = new Conexion();
			$sql = "INSERT INTO log (id_solicitud, id_estado, comentario, fecha, id_usuario) values('$this->id', '$this->estado','$this->comentario', '$date', '1') ";
			$con->sql($sql);
		}
	}




?>
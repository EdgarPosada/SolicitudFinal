<?php
include 'Conexion.php';


class Control{

	private $id;

	//Seters
	function setId($val){
		$this->id = $val;
	}

	function setCampania($val){
		$this->campania = $val;
	}




	//funcion que se utiliza en Ajax para actualizar la campaña del solicitante
	function updateCampaign(){

		//se valida la campania
		if($this->campania == 2)
			{$camp = "cash advance";}
		else
			if($this->campania == 3)
				{$camp = "prestamo para negocio";}
			else
				if($this->campania == 4)
					{$camp = "compliance services office";}
				else
					if($this->campania == 1)
						{$camp = "ninguna";}
					else
						$camp = "green Light";

		$con = new Conexion();
		$sql = "UPDATE solicitud SET campania = '$camp' WHERE id_solicitud = '$this->id' ";
		$con->sql($sql); 
	}



}


?>
<?php
include_once 'Conexion.php';
class Solicitud {
 
    // variables
     private $id_solicitud;
     private $fecha;
     private $correo;
     private $paterno;
     private $materno;
     
     private $nombre;
     private $fechanac;
     private $nacionalidad;
     private $genero;
     private $civil;
     
     private $calle;
     private $numero;
     private $colonia;
     private $cp;
     private $estado;
     
     private $municipio;
     private $nombrecto1;
     private $telefonocto1;
     private $nombrecto2;
     private $telefonocto2;
     
     private $gradoEstudios;
     private $institucion;
     private $edoacademico;
     private $ingles;
     private $estudia;
     
     private $otrosestudios;
     private $habilidades;
     private $anterior1;
     private $puesto1;
     private $salario1;

     private $anterior2;
     private $puesto2;
     private $salario2;
     private $trabaja;
     private $disponibilidad;
     
     private $ultimo_id;
     private $id;

     
     

     // Get
         function getIDSolicitud()
	 { return $this->id_solicitud;}
    

         //Set
         
         	//Seters

	function setCampania($val){
		$this->campania = $val;
	}
        
          function setEstadoSol($val){
    $this->estadoSol = $val;
  }

         
         
         
         
         
         
         function setIdSolicitud($val)
	 { $this->id_solicitud=$val;}
         	
         function setId($val){
		$this->id = $val;
	}

         
          function setFecha($val)
	 { $this->fecha=$val; }
          function setCorreo($val)
	 { $this->correo=$val;}
         function setPaterno($val)
	 { $this->paterno=$val;}
         function setMaterno($val)
	 { 
           $this->materno=$val;    
         }
         //
         
        function setNombre($val)
	 { 
           $this->nombre=$val;    
         }
         function setFechaNac($val)
	 { 
           $this->fechanac=$val;    
         }
         function setNacionalidad($val)
	 { 
           $this->nacionalidad=$val;    
         }
         function setGenero($val)
	 { 
           $this->genero=$val;    
         }
         function setCivil($val)
	 { 
           $this->civil=$val;    
         }
         
         
         function setCalle($val)
	 { 
           $this->calle=$val;    
         }
         function setNumero($val)
	 { 
           $this->numero=$val;    
         }
         function setColonia($val)
	 { 
           $this->colonia=$val;    
         }
         function setCP($val)
	 { 
           $this->cp=$val;    
         }
         function setEstado($val)
	 { 
           $this->estado=$val;    
         }
         
         
         function setMunicipio($val)
	 { 
           $this->municipio=$val;    
         }
         function setNombrecto1($val)
	 { 
           $this->nombrecto1=$val;    
         }
         function setTelefonocto1($val)
	 { 
           $this->telefonocto1=$val;    
         }
         function setNombrecto2($val)
	 { 
           $this->nombrecto2=$val;    
         }
         function setTelefonocto2($val)
	 { 
           $this->telefonocto2=$val;    
         }
         
         
         function setGradoEstudios($val)
	 { 
           $this->gradoEstudios=$val;    
         }
        
         function setInstitucion($val)
	 { 
           $this->institucion=$val;    
         }
         function setEdoAcademico($val)
	 { 
           $this->edoacademico=$val;    
         }
         function setIngles($val)
	 { 
           $this->ingles=$val;    
         }
         function setEstudia($val)
	 { 
           $this->estudia=$val;    
         }
         
         
         function setOtrosEstudios($val)
	 { 
           $this->otrosestudios=$val;    
         }
         function setHabilidades($val)
	 { 
           $this->habilidades=$val;    
         }
         function setAnterior1($val)
	 { 
           $this->anterior1=$val;    
         }
         function setPuesto1($val)
	 { 
           $this->puesto1=$val;    
         }
         function setSalario1($val)
	 { 
           $this->salario1=$val;    
         }
         
         
          function setAnterior2($val)
	 { 
           $this->anterior2=$val;    
         }
         
          function setPuesto2($val)
	 { 
           $this->puesto2=$val;    
         }
         
          function setSalario2($val)
	 { 
           $this->salario2=$val;    
         }
         
          function setTrabaja($val)
	 { 
           $this->trabaja=$val;    
         }
         
          function setDisponibilidad($val)
	 { 
           $this->disponibilidad=$val;    
         }
         
                                      
        function insertSolicitud()	// inserta el cliente cargado en los atributos
	{               
                      
                        $conexion=new Conexion();    
                        $query="insert into solicitud (fecha,correo,paterno,materno,nombre,fechanac,nacionalidad,genero,civil,calle,numero,colonia,cp,estado,municipio,nombrecto1,telefonocto1,nombrecto2,telefonocto2,gradoEstudios,institucion,edoacademico,ingles,estudia,otrosestudios,habilidades,anterior1,puesto1,salario1,anterior2,puesto2,salario2,trabaja,disponibilidad,estado_solicitud)values"
                                . "('$this->fecha','$this->correo','$this->paterno','$this->materno','$this->nombre','$this->fechanac','$this->nacionalidad','$this->genero','$this->civil','$this->calle','$this->numero','$this->colonia','$this->cp','$this->estado','$this->municipio','$this->nombrecto1','$this->telefonocto1','$this->nombrecto2','$this->telefonocto2','$this->gradoEstudios','$this->institucion','$this->edoacademico','$this->ingles','$this->estudia','$this->otrosestudios','$this->habilidades','$this->anterior1','$this->puesto1','$this->salario1','$this->anterior2','$this->puesto2','$this->salario2','$this->trabaja','$this->disponibilidad','1')";
			$conexion->sql($query);
                           $ultimo_id=mysql_insert_id();

                     return $ultimo_id;
        }
        
        

        
        
                                function getSolicitudesPorEstado()	// inserta el cliente cargado en los atributos
	{
$conexion=new Conexion();    
$sql="select * from solicitud where estado_solicitud=$this->estado order by id_solicitud DESC" ;
                        
 $row=$conexion->sql($sql);
 return $row; //regresamos el arreglo con la consulta de Noticias por Campus
	}
        
        
                                        function getSolicitudes()	// inserta el cliente cargado en los atributos
	{
$conexion=new Conexion();    
$sql="select * from solicitud order by id_solicitud DESC" ;
                        
 $row=$conexion->sql($sql);
 return $row; //regresamos el arreglo con la consulta de Noticias por Campus
	}
        
        
        	function obtenerDatos(){
		$con = new Conexion();
		$sql = "SELECT *FROM solicitud WHERE id_solicitud = '$this->id_solicitud' ";
		$result = $con->sql($sql);

		return $result;
	}
        
        
                function getFechaRecienteLog()	// inserta el cliente cargado en los atributos
	{
                    
$conexion=new Conexion();    
$sql="SELECT MAX( fecha ) FROM  log WHERE id_solicitud =$this->id_solicitud ";
$row=$conexion->sql($sql);
return $row; //regresamos el arreglo con la consulta de Noticias por Campus
	}
        
        	//funcion que se utiliza en Ajax para actualizar la campaña del solicitante
	function updateCampaign(){

		//se valida la campania
//		if($this->campania == 2)
//			{$camp = "MCA";}
//		else
//			if($this->campania == 3)
//				{$camp = "Prestamo para Negocio";}
//			else
//				if($this->campania == 4)
//					{$camp = "CSO";}
//				else
//					if($this->campania == 1)
//						{$camp = "Ninguna";}
//					else
//						$camp = "GL";

		$con = new Conexion();
		$sql = "UPDATE solicitud SET campania = '$this->campania' WHERE id_solicitud = '$this->id' ";
		$con->sql($sql); 
	}
        
        
          //se actualiza el estado en la tabla solicitud
  function actualizaEstado(){
    $con = new Conexion();
    $sql = "UPDATE solicitud SET estado_solicitud = '$this->estadoSol' WHERE id_solicitud = '$this->id;' ";
    $con->sql($sql);
  }
        


              
}

?>

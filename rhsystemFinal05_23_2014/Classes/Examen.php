<?php
include_once 'Conexion.php';
class Examen {
 
    // variables
     private $id_examen;
     private $id_solicitud;
     private $resultado;
    
     
     // Get
         function getIDSolicitud()
	 { return $this->id_solicitud;}
    
         //Set
          function setIdSolicitud($val)
	 { $this->id_solicitud=$val;}
          function setResultado($val)
	 { $this->fecha=$val; }
        
       
      
              function insertExamen()	// inserta el cliente cargado en los atributos
	{               
                      
                        $conexion=new Conexion();    
                        $query="insert into examen(id_solicitud)values('$this->id_solicitud')";
			$conexion->sql($query);      
	
        } 
         
         
         

                                      
   
        
        

// Ejemplo consulta multiples Tablas        
        
        
//                function getNoticiasPublicadas()	// inserta el cliente cargado en los atributos
//	{
//$conexion=new Conexion();    
//$sql="SELECT noticia.id_noticia,noticia.balazo,noticia.url,ciudad.ciudad AS campus, unidadacademica.unidad AS unidad_academica,tema.tema,noticia.titulo,noticia.fecha
//FROM noticia,ciudad,unidadacademica,tema WHERE noticia.campus = ciudad.idciudad
//and noticia.unidad_academica = unidadacademica.idunidad
//and noticia.tema = tema.id_tema and noticia.publicado='1' order by noticia.id_noticia desc limit 0,5";
//                        
// $row=$conexion->sql($sql);
// return $row; //regresamos el arreglo con la consulta de Noticias por Campus
//	}        
//        

              
}

?>

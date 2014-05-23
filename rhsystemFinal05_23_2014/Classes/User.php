<?php
include_once 'Conexion.php';
class User {
 
    // variables
    
    private $id_user;
    private $name;
    private $email;
    private $password;
    private $type_user;
  
    function User($id=0) // declara el constructor, si trae el numero de cliente lo busca , si no, trae todos los clientes
	{
		if ($id!=0)
		{      
                        $conexion=new Conexion();        
			$sql="select * from user where id_user='$id'";
                        $row=$conexion->sql($sql);
                        $array= mysql_fetch_array($row);
			$this->id_user=$array['id_user'];
                        $this->name=$array['name'];
                        $this->email=$array['email'];
                        $this->password=$array['password'];
                        $this->type_user=$array['type_user'];
		}
	}
        
        // Get
         function getIdUser()
	 { return $this->id_user;}
         function getName()
	 { return $this->name;}
         function getEmail()
	 { return $this->email;}
         function getPassword()
	 { return $this->password;}
           
         function getTypeUser()
	 { return $this->type_user;}
         
         //Set
          function setIdUser($val)
	  { $this->id_user=$val;}
          function setName($val)
	  { $this->name=$val;}
          function setEmail($val)
	  { $this->email=$val;}
          function setPassword($val)
	  { $this->password=$val;}
           function setUsers($val)
	  { $this->users=$val;}
           function setTypeUser($val)
	  { $this->type_user=$val;}
                                   
                 function insertUser()	// inserta el cliente cargado en los atributos
	{               
                      
                        $conexion=new Conexion();    
                        $query="insert into user(name,email,password,type_user)values('$this->name','$this->email',MD5('$this->password'),'$this->type_user')";
			$conexion->sql($query);      
                      
	
         }   
        
        
      
             function deleteUser()	// inserta el cliente cargado en los atributos
	{
			$conexion=new Conexion();    
                        $query="delete from user where id_user = $this->id_user";
                        $conexion->sql($query);

	}
        
        	function updateUser()	// actualiza el cliente cargado en los atributos
	{               

			$conexion=new Conexion();    
			$query="update user set name='$this->name',email='$this->email',type_user='$this->type_user' where id_user = $this->id_user";
                        $conexion->sql($query);
                        
                        
                        
                         if($this->password!='')// Si la variable password esta vacía, significa que no se hara cambio
                         {
                        $query="update user set password=MD5('$this->password') where id_user = $this->id_user";
                        $conexion->sql($query);	
                         }
	           
	}
        

        
                function getUsers()
{
$conexion=new Conexion();    
$sql="select * from user order by name";
$result=$conexion->sql($sql);
return $result; //regresamos el arreglo con la consulta de Noticias por Campus
}



                function getIdUserLogin()
{
$conexion=new Conexion();
$password=md5($this->password); // Encrypted Password
$sql="SELECT id_user FROM user WHERE email='$this->email' and password='$password'";
$result=mysql_query($sql);
return $result;
}
                function getUserDatabyEmail($user_check)
{
$conexion=new Conexion();    
$ses_sql=mysql_query("select name,email,type_user,id_user from user where email='$user_check'");
$row=mysql_fetch_array($ses_sql);
$this->id_user=$row['id_user'];
$this->email=$row['email'];
$this->name=$row['name'];
$this->type_user=$row['type_user'];
}


        
       
        
}

?>

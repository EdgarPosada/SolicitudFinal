 <?php
     class Conexion {
         private $conexion;
         private $host='localhost';
         private $user='root';
         private $pass='';
         private $database='solicitudempleo';
     
         private $n=0;
   
        function __construct() {
            $this->conexion = mysql_connect($this->host, $this->user, $this->pass);
            mysql_select_db($this->database);
            mysql_query("SET NAMES 'utf8'");
        }
    
        function sql($sql) {
            if (is_array($sql)) {
                foreach ($sql as $s) {
                    $res = mysql_query($s);
                    if (mysql_errno()) echo mysql_error().'<br>';
                    $this->n++;
                }
            } else {
                $res = mysql_query($sql);
                if (mysql_errno()) echo mysql_error().'<br>';
                $this->n++;
            }
            return $res;
        }
    
        function __destruct() {
            if (is_resource($this->conexion) )
            mysql_close($this->conexion);
        }
    
        function getLink() {
            return $this->conexion;
        }
    
        function instalar() {
            // La instalación de esto no hace nada
        }
    }
    ?>

<?php
include_once 'candidatos.php';
$can = new Candidatos();

$id = $_GET['id'];

if(isset($_POST['actualiza']))
{
	$can->setId($id);
	$can->setEstado($_POST['estado']);
	$can->setComentario($_POST['comentario']);
	$can->actualizaEstado();
	$can->insertaFechaLog();
}

?>
<html>
<body>
	<form action="pruebaGet.php?id=<?php echo $id?>" method="POST" >
<select name="estado">
<option value="">Select a person:</option>
<option value="1" >Nuevo</option>
<option value="2" >Entrevistado</option>
<option value="3" >Entrenamiento</option>
<option value="4" >Contratado</option>
<option value="5" >Baja</option>
</select>
<br/>

<textarea name="comentario" placeholder="Comentarios de la entrevista" cols="80" rows="5"></textarea><br/>
<input type="submit" value="Guardar informacion"  name="actualiza"/>
</form>
<a href="muestraEstados.php">Regresar</a>
</body>
</html>
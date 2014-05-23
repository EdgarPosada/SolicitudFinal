<?php
include_once '../Classes/controlExamen.php';
include_once '../Classes/Log.php';

$log = new Log();
$con = new controlExamen();

session_start();
$resCorrectas = array('empty',
	'is',
	'Is',
	'watch',
	'is Leaving',
	'go',
	'Would you like',
	'turn right',
	'have you got the',
	'the tallest',
	'sneezing',
	'have been',
	'miss',
	'aren´t you',
	'who',
	'told',
	'didn´t have to',
	'take',
	'studying',
	'ask',
	'i´ll come',
	'are made',
	'called',
	'had left',
	'have built',
	'hundreds',
	'going',
	'Don´t forget',
	'If i were you l´d go',
	'off',
	'is being',
	'hadn´t seen',
	'took',
	'few',
	'no point',
	'until',
	'risky',
	'to starting',
	'can´t',
	'wouldn´t',
	'must',
	'as if',
	'invaluable',
	'had studied',
	'pleased',
	'insists',
	'advised',
	'gets on with',
	'having taken',
	'hundreds',
	'too much');


	$resUsuario = array();
	//Extraigo las respuestas ingresadas por el usuario y las guardo en un array
	for($i = 1; $i <= 50; $i++)
	{
		$resUsuario[$i] = $_POST['que'.$i];
	}
	
	//Se validan las respuestas correctas y se cuentan los aciertos
	$aciertos = 0;

	for($i = 1; $i <= 50; $i++)
	{
		if($resCorrectas[$i] == $resUsuario[$i])
		{
			$aciertos++;
		}
	}

	$porcentaje = $aciertos * 2;

	
	$id = $_SESSION['ultimo_id'];

	$con->setId($id);
	$con->setResultado($porcentaje);
	$con->updateResultado();

	//Se insertan datos en la tabla log

	$estado = 1;
	$comentario = 'Nueva Solicitud';
	$fecha = date("Y-m-d");

	$log->setIdSolicitud($id);
	$log->setIdEstado($estado);
	$log->setComentario($comentario);
	$log->setFecha($fecha);
	$log->setIdUsuario(0);

	$log->insertaLog();



	session_destroy();
	?>
	<script>
		alert('Sus datos fueron registrados, nos comunicaremos con usted lo mas pronto posible');
		window.location ='../index.php';
	</script>
	<?php

?>
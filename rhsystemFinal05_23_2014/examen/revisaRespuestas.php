<?php
	
	$respuestaCorrecta = array('edgar','posada','gutierrez','arent´t you');

	print_r($respuestaCorrecta);

	$otro = array('edgar','ramirez','gutierrez','aren´t you');

	//for($i = 0; i < )
	$cont = 0;

	$cuenta = count($respuestaCorrecta);
	echo $cuenta.'<br>';

	for($i = 0; $i < $cuenta; $i++)
	{
		if($respuestaCorrecta[$i] == $otro[$i])
		{
			$cont ++;
		}
	}

	echo $cont;



?>
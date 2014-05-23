<?php

session_start();

//Clases
include_once 'Classes/Solicitud.php';
include_once 'Classes/Examen.php';

//variables

//Objetos

$solicitud = new Solicitud();
$examen = new Examen();
        

// Datos personales
$fechaactual = date("y.m.d");    // fecha actual

// sets
$solicitud->setFecha($fechaactual);
$solicitud->setCorreo($_POST['correo']);
$solicitud->setPaterno($_POST['paterno']);
$solicitud->setMaterno($_POST['materno']);
$solicitud->setNombre($_POST['nombre']);

$solicitud->setFechaNac($_POST['fechanac']);
$solicitud->setNacionalidad($_POST['nacionalidad']);
$solicitud->setGenero($_POST['genero']);
$solicitud->setCivil($_POST['civil']);

$solicitud->setCalle($_POST['calle']);
$solicitud->setNumero($_POST['numero']);
$solicitud->setColonia($_POST['colonia']);
$solicitud->setCP($_POST['cp']);
$solicitud->setEstado($_POST['estado']);

$solicitud->setMunicipio($_POST['municipio']);
$solicitud->setNombrecto1($_POST['nombrecto1']);
$solicitud->setTelefonocto1($_POST['telefonocto1']);
$solicitud->setNombrecto2($_POST['nombrecto2']);
$solicitud->setTelefonocto2($_POST['telefonocto2']);

$solicitud->setGradoEstudios($_POST['gradoEstudios']);
$solicitud->setInstitucion($_POST['institucion']);
$solicitud->setEdoAcademico($_POST['edoacademico']);
$solicitud->setIngles($_POST['ingles']);
$solicitud->setEstudia($_POST['estudia']);

$solicitud->setOtrosEstudios($_POST['otrosestudios']);
$solicitud->setHabilidades($_POST['habilidades']);
$solicitud->setHabilidades($_POST['habilidades']);
$solicitud->setAnterior1($_POST['anterior1']);
$solicitud->setPuesto1($_POST['puesto1']);
$solicitud->setSalario1($_POST['salario1']);


$solicitud->setAnterior2($_POST['anterior2']);
$solicitud->setPuesto2($_POST['puesto2']);
$solicitud->setSalario2($_POST['salario2']);
$solicitud->setTrabaja($_POST['trabaja']);
$solicitud->setDisponibilidad($_POST['disponibilidad']);

// Guardamos los datos personales desde la solicitud
$ultimo_id=$solicitud->insertSolicitud();
$examen->setIdSolicitud($ultimo_id);
$examen->insertExamen();
$_SESSION['ultimo_id'] = $ultimo_id;
header("Location: examen/examen.php"); /* Redirect browser */


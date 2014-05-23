<?php
include '../../Classes/Solicitud.php';
$con = new Solicitud();

$id = $_GET['id'];
$campa = $_GET['camp'];

$con->setId($id);
$con->setCampania($campa);
$con->updateCampaign();

?>



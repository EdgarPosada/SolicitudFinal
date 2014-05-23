<?php
session_start();

//classes
include_once '../Classes/User.php';

//Objects
$user=new User();
$user_check=$_SESSION['login_user'];
$user->getUserDatabyEmail($user_check);

//variables
$id_usuario=$user->getIdUser();
$user_name=$user->getName();
$email=$user->getEmail();
$type_user=$user->getTypeUser();

// sesiones






if(!isset($email))
{
header("Location: login.php");
}

?>
<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'classes/dataBase.class.php';
$db = new dataBase('');

//Formateo los campos fecha
$fechaIng = explode("/",$_POST['fechaIng']);
//AAAA-MM-DD
$_POST['fechaIng'] = $fechaIng[2]."-".$fechaIng[1]."-".$fechaIng[0];

$fNac = explode("/",$_POST['fNac']);
//AAAA-MM-DD
$_POST['fNac'] = $fNac[2]."-".$fNac[1]."-".$fNac[0];

$sqlInsert = "
INSERT INTO `miembros`
(`nombre`				, `fechaIng`			 , `edad`				, `fNac`		   , `direccion`			 , `tel`				, `lider`			  , `invitador`				, `hsContacto`			, `consolidador`) VALUES 
('".$_POST['nombre']."' ,'".$_POST['fechaIng']."','".$_POST['edad']."','".$_POST['fNac']."','".$_POST['direccion']."','".$_POST['tel']."','".$_POST['lider']."','".$_POST['invitador']."','".$_POST['hsContacto']."','".$_SESSION['consolidador']."')
";
$db -> QuerySimple($sqlInsert);
die;
header('Location: index.php');
?>
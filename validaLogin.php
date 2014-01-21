<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

$consolidador = $_POST['consolidador'];
// echo "<pre>"; print_r($_POST); echo "</pre>";die;
if ($consolidador != ""){
	$_SESSION['consolidador'] = $consolidador;
	header('Location: index.php');
}else{
	header('Location: login.php?err=1');
}
?>
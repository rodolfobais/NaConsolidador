<?php 
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

if ( !isset($_SESSION['consolidador']) ) {
	header('Location: login.php');
}

require_once 'configs/default.conf.php';
require_once 'libs/misc.lib.php';
require_once 'classes/dataBase.class.php';
require_once 'classes/html.class.php';
$ht = new html('');
$db = new dataBase('');
$sql = "SELECT id, CONCAT(`id`, ' - ' , `nombre`) as valor FROM `lideres`";
$aoptions = $db -> QueryFetchArray($sql);
$comboLider = $ht -> select("lider", $aoptions)
?>
<html>
	<head>
		<title>Nuevo Amanecer - Consolidacion</title>
		<link rel="icon"  href="images/favicon.ico" />
		<style type="text/css">
			body{
				text-align:center;
				align:center;
			}
			td img {
				display: block;
			}
			#contenedor {
				border:0px solid;
				height:100%;
				margin: 0px auto;
			}
		</style>
	</head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
		<table border="1" align = "center">
			<tr>
				<td>
					<form name="loginForm" id="loginForm" method="post" action="saveData.php" >
						<table>
							<tr>
								<td colspan = 2><img src = "images/logo3.jpg" width = 400> </td>
							</tr>
							<tr>
								<td>Nombre</td>
								<td><input type = "text" name = "nombre" placeholder = "Nombre de la persona"></td>
							</tr>
							<tr>
								<td>Fecha de ingreso</td>
								<td><input type = "text" name = "fechaIng" placeholder = "DD/MM/AAAA"></td>
							</tr>
							<tr>
								<td>Fecha de nacimiento</td>
								<td><input type = "text" name = "fNac" placeholder = "DD/MM/AAAA"></td>
							</tr>
							<tr>
								<td>Edad</td>
								<td><input type = "text" name = "edad" placeholder = "Edad"></td>
							</tr>
							<tr>
								<td>Direcci&oacute;n</td>
								<td><input type = "text" name = "direccion" placeholder = "Direcci&oacute;n"></td>
							</tr>
							<tr>
								<td>Tel&eacute;fono</td>
								<td><input type = "text" name = "tel" placeholder = "Tel&eacute;fono"></td>
							</tr>
							<tr>
								<td>L&iacute;der</td>
								<td>
									<?php 
										echo $comboLider;
									?>
								</td>
							</tr>
							<tr>
								<td>Qui&eacute;n lo invit&oacute;?</td>
								<td><input type = "text" name = "invitador" placeholder = "Nombre del invitador"></td>
							</tr>
							<tr>
								<td>Hora de contacto</td>
								<td><input type = "text" name = "hsContacto" placeholder = "Horario en el que puede ser llamado"></td>
							</tr>
							<tr>
								<td colspan = 2>
									Comentario y/o pedido de oraci&oacute;n <br/>
									<?php 
										echo $ht-> textarea("comentario", "", array('cols' => '54', 'rows' => '3'));
									?>
								</td>
							</tr>
							<tr>
								<td colspan = 2 align = center><input type="submit" name="submit_login" value="Guardar"/></td>
							</tr>
						</table>
					</form>
				</td>
			</tr>
		</table>
	</body>
</html>
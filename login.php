<?php
session_start();
require_once 'configs/default.conf.php';
?>
</html>
	<body>
		<div id="page">
	    	<div id="header">
	      		<h1> <?php echo $_SESSION['_COMPANY'];?></h1>
	    	</div>
	    	<div id="content">
				<form name="loginForm" id="loginForm" method="post" action="validaLogin.php" >
					<table id="loginTable" class="minor" cellspacing="0">
						<tbody>
					          <?php 
					          if (array_key_exists('err', $_GET)) {
					          	echo "
					          		<tr>
						              	<td colspan = 2 color = red>Debe ingresar un nombre de consolidador</td>
						            </tr>
					          	";
					          }
					          ?>
				            	<tr>
				              		<td class="colLeft">Nombre</td>
				              		<td class="colRight"><input type="text" name="consolidador" value="" size="12"/></td>
				            	</tr>
						</tbody>
		        	</table>
				 	<input type="submit" name="submit_login" value="Ingresar"/>
		      	</form>
	    	</div>
  		</div>
	</body>
</html>
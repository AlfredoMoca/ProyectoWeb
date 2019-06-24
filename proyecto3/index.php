<?php 
session_destroy();
session_start();
$_SESSION["usuario_id"]="";
$_SESSION["usuario_privilegio"]="";
$_SESSION["usuario_nombre"]="";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<titel>
				LOGIN
		</titel>
	<meta charset="UTF-08">
	<style>
	.button{
		background-color:#5889DE;
		border-radius:25px;
	}
	.buttonE{
		background-color:#AD2C3D;
		border-radius:25px;
	}
	</style>
	</head>
	<body>
		<table>
			<tr>
			<td>
				login
			</td>
			<td>
				clave
			</td>
			</tr>
			<tr>
				<form action="validar.php" method="POST">
			<td>
				<input type="text" name="login">
			</td>
			<td>
				<input type="password" name="clave">
			</td>
			</tr>
			<tr>
			<td>
				<input type="submit" name="enter" value="entrar">
			</td>
			</tr>
				</form>
		</table>
	</body>
</html>
<?php 
	@session_start();
include 'conectar.php';
$privilegio=$_SESSION["usuario_privilegio"];
$usuario_nombre=$_SESSION["usuario_nombre"];
			if($privilegio!="3")
			{
				?>
			<script>
    		window.alert("Favor de iniciar sesion");
    		window.location.assign("index.php");
			</script>
			<?php
			}
		else
			{
	$nombre=$_REQUEST["nombre"];
	$nrc=$_REQUEST["nrc"];
	mysql_query("insert into materias(nombre,nrc) value ('$nombre','$nrc')");
	?>
<!DOCTYPE HTML>
<html lang "es">
<head>
	<title>GUARDADO</title>
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
<center>
<table width="900px" heigth="800px" align="center">
	<tr><td><?php include 'header.php'; ?></td></tr>
	<tr>
	<td>
	<tr><td><table width="500px" height="500px" align="center" border="1">
		<td>
			nombre:
		</td>
		<td>
			<?php
			echo "$nombre";
			?>
		</td>

		<tr>
		<td>
			nrc:
		</td>
		<td>
			<?php
			echo "$nrc";
			?>
		</td>
		</tr>
		<tr><td align="center" colspan="2"><a href="nueva_cuenta_materia.php"><button class="button">ingresar otra cuenta</button></a></td></tr>
		<tr><td align="center" colspan="2"><a href="admin.php"><button class="buttonE">regresar</button></a></td></tr>
			</form>
		</table></td></tr>
	<tr><td><?php include 'footer.php'; ?></td></tr>
</table>
</center>
</body>
</html>
<?php
	}
?>
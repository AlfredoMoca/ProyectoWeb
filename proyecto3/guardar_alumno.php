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
	$grado=$_REQUEST["grado"];
	$mail=$_REQUEST["mail"];
	$domicilio=$_REQUEST["domicilio"];
	$tel=$_REQUEST["tel"];
	mysql_query("insert into alumnos(nombre,grado,mail,domicilio,tel) value ('$nombre','$grado','$mail','$domicilio','$tel')");
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
			grado:
		</td>
		<td>
			<?php
			echo "$grado";
			?>
		</td>
		</tr>
		<tr>
		<td>
			mail:
		</td>
		<td>
			<?php
			echo "$mail";
			?>
		</td>
		</tr>
		<tr>
		<td>
			domicilio:
		</td>
		<td>
			<?php
			echo "$domicilio";
			?>
		</td>
		</tr>
				<tr>
		<td>
			tel:
		</td>
		<td>
			<?php
			echo "$tel";
			?>
		</td>
		</tr>
			<tr><td align="center" colspan="2"><a href="nueva_cuenta_alumno.php"><button class="button">ingresar otra cuenta</button></a></td></tr>
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
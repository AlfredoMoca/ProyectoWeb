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
?>
<!DOCTYPE HTML>
<html lang "es">
<head>
	<title>nueva cuenta materia</title>
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
	<?php
		$nombre=$_REQUEST["nombre"];
		$nrc=$_REQUEST["nrc"];
	?>
		<table width="900px" heigth="800px" align="center">
	<tr><td><?php include 'header.php'; ?></td></tr>
	<tr>
	<td>
	<tr><td><table width="500px" height="500px" align="center" border="1">
	<form action="guardar_materia.php" method="POST">
			<tr>
			<td>
				nombre:
			</td>
			<td>
				<input type="text" name="nombre" value="<?php echo $nombre; ?>" required>
			</td>
			</tr>
			<tr>
			<td>
			<br>
				nrc:
			</td>
			<td>
				<input type="text" name="nrc" value="<?php echo $nrc; ?>" required>
			</td>
			</tr>
			<tr><td colspan="2" align="center"><input name="boton" type="submit" value="guardar">
			</td>
			</tr>
			<tr><td align="center" colspan="2"><a href="admin.php"><button class="buttonE">Regresar al menu</button></a></td></tr>
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
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
	<title>lista de alumno</title>
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
<center>
<body>
		<table width="900px" heigth="800px" align="center">
	<tr><td><?php include 'header.php'; ?></td></tr>
	<tr>
	<td>
	<tr><td><table width="500px" height="500px" align="center" border="1">
		<tr><td aling="center" colspan="7"><a href="nueva_cuenta_alumno.php"><button class="button">nueva cuenta</button></a></td></tr>
		<td>
			nombre
		</td>
		<td>
			grado
		</td>
		<td>
			mail
		</td>
		<td>
			domicilio
		</td>
		<td>
			telefono
		</td>
		<td>
			editar
		</td>
		<td>
			eliminar
		</td>
		<tr>
			<?php
		$q=mysql_query("SELECT * FROM alumnos ORDER BY nombre");
		while($row=mysql_fetch_array($q)){

			$nombre=$row["nombre"];
			$grado=$row["grado"];
			$mail=$row["mail"];
			$domicilio=$row["domicilio"];
			$tel=$row["tel"];
			$id=$row["id"];
	?>
		<td>
			<?php echo $nombre; ?>
		</td>
		<td>
			<?php echo $grado; ?>
		</td>
		<td>
			<?php echo $mail; ?>
		</td>
		<td>
			<?php echo $domicilio; ?>
		</td>
		<td>
			<?php echo $tel; ?>
		</td>
		<td>
		<a href="editar_alumnos.php?id=<?php echo $id;?>"> editar </a>
		</td>
		<td>
		<a href="eliminar_alumno.php?id=<?php echo $id;?>"> eliminar </a>
		</td>
		</tr>
			<?php } ?>
		</form>
		<tr><td align="center" colspan="7"><a href="lista_alumnos.php"><button class="button">volver a las respuestas</button></a></td></tr>
		<tr><td align="center" colspan="7"><a href="admin.php"><button class="buttonE">regresar</button></a></td></tr>
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
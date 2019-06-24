<?php
	session_start();
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
<html>
<head>
	<title>
		EDITAR
	</title>
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
	<?php
	include 'conectar.php';
		@$nombre=$_POST["nombre"];
		@$grado=$_POST["grado"];
		@$mail=$_POST["mail"];
		@$domicilio=$_POST["domicilio"];
		@$tel=$_POST["tel"];
		@$boton=$_POST["boton"];
		@$boton2=$_POST["boton2"];
		@$id=$_REQUEST["id"];
					if($boton=="actualizar"){
			mysql_query("UPDATE alumnos SET nombre='$nombre',grado='$grado',mail='$mail',domicilio='$domicilio',tel='$tel' WHERE id='$id'");
			?><center><a href="lista_alumno.php"><button class="ButtonE">regresar</button></a></center><?php
			}
			else if($boton2=="cancelar"){
					?><center><a href="lista_alumno.php"><button class="buttonE">regresar</button></a></center><?php
				}
		$q=mysql_query("SELECT * FROM alumnos WHERE id='$id'");
			$row=mysql_fetch_array($q);
			$nombre=$row["nombre"];
			$grado=$row["grado"];
			$mail=$row["mail"];
			$domicilio=$row["domicilio"];
			$tel=$row["tel"];
			$id=$row["id"];
	?>
	<center>
	<form action="editar_alumnos.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table width="900px" heigth="800px" align="center">
	<tr><td><?php include 'header.php'; ?></td></tr>
	<tr>
	<td>
	<tr><td><table width="500px" height="500px" align="center" border="1">
		<td align="center">
			nombre
		</td>
		<td align="center">
			grado
		</td >
		<td>
			mail
		</td >
		<td align="center">
			domicilio
		</td>
		<td align="center">
			tel
		</td>
		<tr>
				<td align="center">
			<input type="text" name="nombre" value="<?php echo $nombre; ?>" >
		</td>
		<td align="center">
			<input type="text" name="grado" value="<?php echo $grado; ?>" >
		</td>
		<td align="center">
			<input type="text" name="mail" value="<?php echo $mail; ?>" >
		</td>
		<td align="center">
			<input type="text" name="domicilio" value="<?php echo $domicilio; ?>" >
		</td>
		<td align="center"> 
			<input type="text" name="tel" value="<?php echo $tel;?>">
		</td>
		<td align="center">
			<input name="boton" type="submit" value="actualizar">
		</td>
		<td aling="center">
			<input name="boton2" type="submit" value="cancelar">
		</td>
		<tr><td align="center" colspan="8"><a href="lista_alumno.php"><button class="buttonE">Regresar al menu</button></a></td></tr>
	</table></td></tr>
	<tr><td><?php include 'footer.php'; ?></td></tr>
</table>
</form>
</center>
</body>
</html>
<?php
	}
?>
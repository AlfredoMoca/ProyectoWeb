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
		@$materia=$_POST["materia"];
		@$mail=$_POST["mail"];
		@$domicilio=$_POST["domicilio"];
		@$tel=$_POST["tel"];
		@$boton=$_POST["boton"];
		@$boton2=$_POST["boton2"];
		@$id=$_REQUEST["id"];
					if($boton=="actualizar"){
			mysql_query("UPDATE profesores SET nombre='$nombre',materia='$materia',mail='$mail',domicilio='$domicilio',tel='$tel' WHERE id='$id'");
			?><center><a href="lista_profesores.php"><button class="buttonE">regresar</button></a></center><?php
			}
			else if($boton2=="cancelar"){
					?><center><a href="lista_profesores.php"><button class="buttonE">regresar</button></a></center><?php
				}
		$q=mysql_query("SELECT * FROM profesores WHERE id='$id'");
			$row=mysql_fetch_array($q);
			$nombre=$row["nombre"];
			$materia=$row["materia"];
			$mail=$row["mail"];
			$domicilio=$row["domicilio"];
			$tel=$row["tel"];
			$id=$row["id"];
	?>
	<center>
	<form action="editar_profesores.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table width="900px" heigth="800px" align="center">
	<tr><td><?php include 'header.php'; ?></td></tr>
	<td>
	<tr><td><table width="500px" height="500px" align="center" border="1">
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
			tel
		</td>
		<tr>
				<td>
			<input type="text" name="nombre" value="<?php echo $nombre; ?>" >
		</td>
		<td>
			<input type="text" name="materia" value="<?php echo $materia; ?>" >
		</td>
		<td>
			<input type="text" name="mail" value="<?php echo $mail; ?>" >
		</td>
		<td>
			<input type="text" name="domicilio" value="<?php echo $domicilio; ?>" >
		</td>
		<td>
			<input type="text" name="tel" value="<?php echo $tel;?>">
		</td>
		<td>
			<input name="boton" type="submit" value="actualizar">
		</td>
		<td>
			<input name="boton2" type="submit" value="cancelar">
		</td>
		<tr><td align="center" colspan="7"><a href="admin.php"><button class="buttonE">Regresar al menu</button></a></td></tr>
		</table></td></tr>
		<tr><td ><?php include 'footer.php'; ?></td></tr>
	</table>
</form>
</center>
</body>
</html>
<?php
	}
?>
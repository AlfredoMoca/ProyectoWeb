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
		@$nrc=$_POST["nrc"];
		@$boton=$_POST["boton"];
		@$boton2=$_POST["boton2"];
		@$id=$_REQUEST["id"];
					if($boton=="actualizar"){
			mysql_query("UPDATE materias SET nombre='$nombre',nrc='$nrc' WHERE id='$id'");
			?><center><a href="lista_materia.php"><button class="buttonE">regresar</button></a></center><?php
			}
			else if($boton2=="cancelar"){
					?><center><a href="lista_materia.php"><button class="buttonE">regresar</button></a></center><?php
				}
		$q=mysql_query("SELECT * FROM materias WHERE id='$id'");
			$row=mysql_fetch_array($q);
			$nombre=$row["nombre"];
			$nrc=$row["nrc"];
	?>
	<center>
	<form action="editar_materia.php" method="POST">
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
			nrc
		</td>
		<tr>
				<td align="center">
			<input type="text" name="nombre" value="<?php echo $nombre; ?>" >
		</td>
		<td align="center">
			<input type="text" name="nrc" value="<?php echo $nrc; ?>" >
		</td>
		<td align="center">
			<input name="boton" type="submit" value="actualizar">
		</td>
		<td align="center">
			<input name="boton2" type="submit" value="cancelar">
		</td>
			<tr><td align="center" colspan="4"><a href="lista_materia.php"><button class="buttonE">Regresar al menu</button></a></td></tr>
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
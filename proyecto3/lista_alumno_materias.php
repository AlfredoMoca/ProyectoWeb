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
$id=$_REQUEST["id"];
$nombre=$_POST["nombre"];
if($nombre!=""){
		$q=mysql_query("SELECT * FROM alumnos WHERE nombre='$nombre'");
		@$row=mysql_fetch_array($q);
		$id_alumno=$row["id"];
		mysql_query("insert into alumno_materia(id_materia_periodo,id_alumno,nombre_alumno) value ('$id','$id_alumno','$nombre')");
	}
echo $nombre_alumno=$_REQUEST["nombre_alumno"];
if($nombre_alumno!=""){
		mysql_query("DELETE FROM alumno_materia WHERE nombre_alumno='$nombre_alumno' AND id_materia_periodo='$id'");
	}
?>
<!DOCTYPE HTML>
<html lang "es">
<head>
	<title>agregar alumnos</title>
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
<center>
		<table width="900px" heigth="800px" align="center">
	<tr><td><?php include 'header.php'; ?></td></tr>
	<tr>
	<td>
	<tr><td><table width="500px" height="500px" align="center" border="1">
	<form action="lista_alumno_materias.php" method="POST" name="usuarios">
			<tr>
			<td>
				agregar alumno:
			</td>
			<td>
				<select name="nombre">
					<option> </option>
					<?php
					$q=mysql_query("SELECT * FROM alumnos ORDER BY nombre");
					while($row=mysql_fetch_array($q)){
					$nombre=$row["nombre"];
					?>
					<option><?php echo $nombre;?></option>
				<?php
					}
				?>
				</select>
			</td>
			<td>
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<input name="button" type="submit" value="Agregar alumno">
			</tr>
		</table>
	</form>
	<br>
	<table border="2">
		<td>
			alumnos
		</td>
		<td>
			eliminar
		</td>
		<tr>
			<?php
		$q=mysql_query("SELECT * FROM alumno_materia WHERE id_materia_periodo='$id' ORDER BY nombre_alumno");
		while($row=mysql_fetch_array($q)){
			$nombre_alumno=$row["nombre_alumno"];
			?>
		<td>
			<?php echo $nombre_alumno; ?>
		</td>
		<td>
		<a href="lista_alumno_materias.php?nombre_alumno=<?php echo $nombre_alumno ?>&id=<?php echo $id;?>"><button class="button">eliminar</button></a>
		</td>
		</tr>
			<?php } ?>
			<tr><td align="center" colspan="2"><a href="profesores.php"><button class="buttonE">regresar</button></a></td></tr>
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
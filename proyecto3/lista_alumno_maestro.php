<?php 
@session_start();
include 'conectar.php';
$privilegio=$_SESSION["usuario_privilegio"];
$usuario_nombre=$_SESSION["usuario_nombre"];
			if($privilegio!="1")
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
		$nombre_materia=$_GET["nombre_materia"];
		$q=mysql_query("SELECT * FROM materia_periodos WHERE nombre_materia='$nombre_materia'");
		$row=mysql_fetch_array($q);
		$id_materia_periodo=$row["id"];
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
		<td>
			alumnos
		</td>
		<td>
		ver tareas
		</td>
		<tr>
			<?php
		$q=mysql_query("SELECT * FROM alumno_materia WHERE id_materia_periodo='$id_materia_periodo' ORDER BY nombre_alumno");
		while($row=mysql_fetch_array($q)){
			$nombre_alumno=$row["nombre_alumno"];
			$id_alumno=$row["id_alumno"];
			?>
		<td>
			<?php echo $nombre_alumno; ?>
		</td>
		<td>
			<a href="tarea_profesor.php?nombre_alumno=<?php echo $nombre_alumno; ?>&id_materia_periodo=<?php echo $id_materia_periodo ?>&id_alumno=<?php echo $id_alumno; ?>"><button class="button">ver tarea</button></a>
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
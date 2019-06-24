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
				$id_materia_periodo=$_REQUEST["id_materia_periodo"];
				$id_alumno=$_REQUEST["id_alumno"];
				$nombre_alumno=$_REQUEST["nombre_alumno"]
?>
<!DOCTYPE HTML>
<html lang "es">
<head>
	<title>tarea de alumnos</title>
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
	<p align="center">Tarea del alumno <?php echo $nombre_alumno; ?></p>
	<tr><td><table width="500px" height="200px" align="center" border="1">
		<td>
			nombre
		</td>
		<td>
			fecha
		</td>
		<td>
			archivo
		</td>

		<tr>
			<?php
			$q=mysql_query("SELECT * FROM tareas WHERE id_materia_periodo='$id_materia_periodo' AND id_alumno='$id_alumno' ORDER BY tarea");
			while($row=mysql_fetch_array($q)){
			$tarea=$row["tarea"];
			$fecha=$row["fecha"];
			$archivo=$row["archivo"];
			?>
		<td>
			<?php echo $tarea; ?>
		</td>
		<td>
			<?php echo $fecha; ?>
		</td>
		<td>
			<a href="<?php echo "objetos/$archivo"; ?>"> 
			<?php echo "$archivo" ?>
			</a>
		</td>
		</tr>
		<?php } ?>
			<tr><td align="center" colspan="3"><a href="profesor.php"><button class="buttonE">Regresar al menu</button></a></td></tr>
		</table></td></tr>
	<tr><td><?php include 'footer.php'; ?></td></tr>
</table>
	</center>
</body>
</html>
<?php
	}
?>
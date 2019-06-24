
<?php 
@session_start();
include 'conectar.php';
$privilegio=$_SESSION["usuario_privilegio"];
$usuario_nombre=$_SESSION["usuario_nombre"];
			if($privilegio!="2")
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
<!DOCTYPE html>
<head>
	<title>alumno</title>
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
<table width="900px" heigth="800px" align="center">
	<tr><td height="150"><?php include 'header.php'; ?></td></tr>
		<center>
		<tr><td align="center">bienvenido <?php echo $usuario_nombre;?></td></tr>
		<tr><td><table width="500px" height="500" align="center">
			<td align="center">
			<tt>mis materias</tt>
			</td>
			<td align="center">
			<tt>tareas</tt>
			</td>
			<tr>
				<?php
					$q=mysql_query("SELECT * FROM alumno_materia WHERE nombre_alumno='$usuario_nombre'  ORDER BY nombre_materia");
					while($row=mysql_fetch_array($q)){
					$nombre_materia=$row["nombre_materia"];
					$id_materia_periodo=$row["id_materia_periodo"];
					$id_alumno=$row["id_alumno"];
				?>
			<td align="center">
				<?php echo $nombre_materia; ?>				
			</td>
			<td align="center">
				<a href="tarea.php?id_materia_periodo=<?php echo $id_materia_periodo ?>&id_alumno=<?php echo $id_alumno; ?>"><button class="button">Ver tarea</button></a>
			</td>
			</tr>
				<?php 
					}
				?>
				<tr><td colspan="2" align="center" height="150px"><a href="index.php"><button class="buttonE">salir</button></a></td></tr>
		</table></td></tr>
	</center>
	<tr><td align="center"><?php include 'footer.php'; ?></td></tr>
</table>
</body>
</html>
<?php
	}
?>
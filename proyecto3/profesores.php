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
?>
<!DOCTYPE html>
<head>
	<title>PROFESOR</title>
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
	<tr><td align="center" height="150"><?php include 'header.php'; ?></td></tr>
		<center>
	<tr><td><caption>Bienvenido profesor <?php echo $usuario_nombre; ?></span></br></caption></td></tr>
	<tr><td><table align="center" width="500px" height="500px" >
				<tr>
				<td align="center">
					<tt>materia:</tt>
				</td>
				<td align="center">
					<tt> alumnos:</tt>
				</td>
				</tr>
					<?php
						$q=mysql_query("SELECT * FROM materia_periodos WHERE nombre_profesor='$usuario_nombre'  ORDER BY nombre_materia");
						while($row=mysql_fetch_array($q)){
						$nombre_materia=$row["nombre_materia"];
					?>
				<tr>
				<td align="center">
					<?php echo $nombre_materia; ?>				
				</td>
				<td align="center">
					<a href="lista_alumno_maestro.php?nombre_materia=<?php echo $nombre_materia; ?>"><button class="button">ver alumnos</button></a>
				</td>
				</tr>
					<?php
						}
					?>
					<tr><td align="center" colspan="2">	<a href="index.php"><button class="buttonE">salir</button></a></td></tr>
			</table></td></tr>
	</center>
	<tr><td align="center" height="150px"><?php include 'footer.php'; ?></td></tr>
	</table>
	</body>
</html>
<?php
	}
?>
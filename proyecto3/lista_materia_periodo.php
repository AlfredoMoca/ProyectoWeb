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
	<title>lista de materias-perido</title>
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
	<td>
	<tr><td><table width="500px" height="500px" align="center" border="1">
	<tr><td><a href="materia_periodo.php"><button class="button">nueva materia-periodo</button></a></td></tr>
		<td>
			profesor
		</td>
		<td>
			materia
		</td>
		<td>
			periodo
		</td>
		<td>
			horario
		</td>
		<td>
			aula
		</td>
		<td>
			editar
		</td>
		<td>
			eliminar
		</td>
		<tr>
			<?php
		$query = "SELECT * FROM materia_periodos ORDER BY nombre_profesor";
		@$q=mysql_query($query);
		while($row=mysql_fetch_array($q)){

			$profesor=$row["nombre_profesor"];
			$materia=$row["nombre_materia"];
			$periodo=$row["periodo"];
			$horario=$row["horario"];
			$aula=$row["aula"];
			$id=$row["id"];
	?>
		<td>
			<?php echo $profesor; ?>
		</td>
		<td>
			<?php echo $materia; ?>
		</td>
		<td>
			<?php echo $periodo; ?>
		</td>
		<td>
			<?php echo $horario; ?>
		</td>
		<td>
			<?php echo $aula; ?>
		</td>
		<td>
		<a href="editar_materia_periodo.php?id=<?php echo $id;?>"><button class="button">editar</button> </a>
		</td>
		<td>
		<a href="eliminar_materia_periodo.php?id=<?php echo $id;?>"><button class="button">eliminar</button></a>
		</td>
		</tr>
			<?php } ?>
		<tr><td align="center" colspan="7"><a href="admin.php"><button class="buttonE">Regresar al menu</button></a></td></tr>
		</table></td></tr>
		<tr><td ><?php include 'footer.php'; ?></td></tr>
	</table>	
</center>
</body>
</html>
<?php
	}
?>
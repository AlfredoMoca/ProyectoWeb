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
		$profesor=$_POST["nombre_profesor"];	
		$materia=$_POST["nombre_materia"];
		$periodo=$_POST["periodo"];
		$horario=$_POST["horario"];
		$aula=$_POST["aula"];
		@$id=$_REQUEST["id"];
					if($boton=="actualizar"){
			mysql_query("UPDATE materia_periodos SET nombre_profesor='$profesor',nombre_materia='$materia', periodo='$periodo', horario='$horario',aula='$aula' WHERE id='$id'");
			?><center><a href="lista_materia.php"><button class="buttonE">regresar</button></a></center><?php
			}
			else if($boton2=="cancelar"){
					?><center><a href="lista_materia.php"><button class="buttonE">regresar</button></a></center><?php
				}
		$q=mysql_query("SELECT * FROM materia_periodos WHERE id='$id'");
			$row=mysql_fetch_array($q);
			$profesor=$row["nombre_profesor"];
			$materia=$row["nombre_materia"];
			$periodo=$row["periodo"];
			$horario=$row["horario"];
			$aula=$row["aula"];
			$id=$row["id"];
	?>
	<center>
	<form action="editar_materia_periodo.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table width="900px" heigth="800px" align="center">
	<tr><td><?php include 'header.php'; ?></td></tr>
	<tr>
	<td>
	<tr><td><table width="500px" height="500px" align="center" border="1">
		<td>
			nombre
		</td>
		<td>
			nrc
		</td>
		<tr>
				<td>
			<input type="text" name="nombre" value="<?php echo $nombre; ?>" >
		</td>
		<td>
			<input type="text" name="nrc" value="<?php echo $nrc; ?>" >
		</td>
		<td>
			<input name="boton" type="submit" value="actualizar">
		</td>
		<td>
			<input name="boton2" type="submit" value="cancelar">
		</td>
		</form>
			<tr><td align="center" colspan="4"><a href="lista_materia_periodo.php"><botton class="buttonE" font-color="white">Regresar al menu</botton></a></td></tr>
	</table></td></tr>
		<tr><td><?php include 'footer.php'; ?></td></tr>
	</table>
</center>
</body>
</html>
<?php
	}
?>
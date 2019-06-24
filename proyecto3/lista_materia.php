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
	<title>lista de materia</title>
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
	<tr>
	<td>
	<tr><td><table width="500px" height="500px" align="center" border="1">
	<tr><td aling="center" colspan="4"><a href="nueva_cuenta_materia.php"><button class="button">nueva cuenta</button></a></td></tr>
		<td>
			nombre:
		</td>
		<td>
			nrc:
		</td>
		<td>
			editar
		</td>
		<td>
			elimiar
		</td>
		<tr>
			<?php
		$q=mysql_query("SELECT * FROM materias ORDER BY nombre");
		while($row=mysql_fetch_array($q)){
			$nombre=$row["nombre"];
			$nrc=$row["nrc"];
			$id=$row["id"];
			?>
		<td>
			<?php echo $nombre; ?>
		</td>
		<td>
			<?php echo $nrc; ?>
		</td>
		<td>
		<a href="editar_materia.php?id=<?php echo $id;?>"> <button class="button">editar</button> </a>
		</td>
		<td>
		<a href="eliminar_materia.php?id=<?php echo $id;?>"> <button class="button">eliminar</button> </a>
		</td>
		</tr>
			<?php } ?>
			<tr><td align="center" colspan="4"><a href="profesores.php"><button class="buttonE">regresar</button></a></td></tr>
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
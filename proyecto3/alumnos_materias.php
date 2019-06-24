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
	<title>lista de alumnos materias </title>
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
		<td align="center">
			<tt>materia:</tt>
		</td>
		<td align="center">
			<tt>profesor:</tt>
		</td>
		<td>
			<tt>añadari alumnos</tt>
		</td>
		<tr>
			<?php
		$q=mysql_query("SELECT * FROM materia_periodos ORDER BY nombre_materia");
		while($row=mysql_fetch_array($q)){
			$materia=$row["nombre_materia"];
			$profesor=$row["nombre_profesor"];
			$id_materia=$row["id_materia"];
			$id=$row["id"];
			?>
		<td align="center">
			<?php echo $materia; ?>
		</td>
		<td align="center">
			<?php echo $profesor; ?>
		</td>
		<td align="center">
		<a href="lista_alumno_materias.php?id=<?php echo $id;?>"><button class="button"> agregar alumno</button> </a>
		</td>
		</tr>
			<?php } ?>
			<tr><td align="center" colspan="3"><a href="admin.php"><button class="buttonE">Regresar al menu</button></a></td></tr>
			</form>
		</table></td></tr>
	<tr><td><?php include 'footer.php'; ?></td></tr>
</table>
</table>	
</center>
</body>
</html>
<?php
	}
?>
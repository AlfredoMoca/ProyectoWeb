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
$materia=$_POST["materia"];
$profesor=$_POST["profesor"];
$periodo=$_POST["periodo"];
$h1=$_POST["h1"];
$h2=$_POST["h2"];
$min1=$_POST["min1"];
$min2=$_POST["min2"];
$aula=$_POST["aula"];
$hora=$h1.":".$min1." hasta ".$h2.":".$min2;
$q=mysql_query("SELECT*FROM profesores WHERE nombre='$profesor'");
@$row=mysql_fetch_array($q);
$id_profesor=$row["id"];
$q=mysql_query("SELECT*FROM materias WHERE nombre='$materia'");
@$row=mysql_fetch_array($q);
$id_materia=$row["id"];
$query ="insert into materia_periodos(nombre_profesor,nombre_materia,id_profesor,id_materia,horario,aula,periodo) value ('$profesor','$materia','$id_profesor','$id_materia','$hora','$aula','$periodo')";
mysql_query($query);
?>
<!DOCTYPE HTML>
<html lang "es">
<head>
	<title>materia periodo</title>
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
	<tr><td><table width="500px" height="500px" align="center" border="1">
		<td>
			materia:
		</td>
		<td>
			<?php
			echo "$materia";
			?>
		</td>

		<tr>
		<td>
			profesor:
		</td>
		<td>
			<?php
			echo "$profesor";
			?>
		</td>
		</tr>
		<tr>
		<td>
			periodo:
		</td>
		<td>
			<?php
			echo "$periodo";
			?>
		</td>
		</tr>
		<tr>
		<td>
			hora:
		</td>
		<td>
			<?php
			echo "$hora";
			?>
		</td>
		</tr>
		<tr>
		<td>
			aula:
		</td>
		<td>
			<?php
			echo "$aula";
			?>
		</td>
		</tr>
		<tr><td align="center" colspan="2"><a href="admin.php"><button class="buttonE">regresar</button></a></td></tr>
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
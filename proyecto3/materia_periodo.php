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
		<form action="guardar_materia_periodo.php" method="POST" name="usuarios">
			<tr>
			<td>
				Seleccionar materia:
			</td>
			<td>
				<select name="materia">
					<option> </option>
					<?php
						$q=mysql_query("SELECT * FROM materias ORDER BY nombre");
						while($row=mysql_fetch_array($q)){
							$materia=$row["nombre"];
					?>
					<option><?php echo $materia;?></option>
					<?php
						}
					?>
				</select>
			</td>
			</tr>
						<tr>
			<td>
				seleccionar profesor:
			</td>
			<td>
				<select name="profesor" >
					<option> </option>
				<?php
					$q=mysql_query("SELECT * FROM profesores ORDER BY nombre");
					while($row=mysql_fetch_array($q)){
						$profesor=$row["nombre"];
				?>
				<option><?php echo $profesor;?></option>
				<?php
					}
				?>
			</td>
			</tr>
			<tr>
			<td>
				periodo:
			</td>
			<td>
				<select name="periodo">
					<option>2016A</option>
					<option>2016B</option>
					<option>2017A</option>
					<option>2017B</option>
					<option>2018A</option>
					<option>2018B</option>
				</select>
			</td>
			</tr>
			<tr>
			<td>
				<br>hora de entrada:
			</td>
			<td>
				<select name="h1" required>
					<option>07</option>
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
				</select>
				:
				<select name="min1" required>
					<option>00</option>
					<option>30</option>
				</select>
			</td>
			</tr>
			<tr>
			<td>
				<br>hora de salida:
			</td>
			<td>
				<select name="h1" required>
					<option>07</option>
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
				</select>
				:
				<select name="min1" required>
					<option>00</option>
					<option>30</option>
				</select>
			</td>
			</tr>
			<tr>
			<td>
				<br>aula
			</td>
			<td>
				<input type="text" name="aula" required>
			<input name="boton" type="submit" value="guardar">
			</td>
			</tr>
			<tr><td align="center" colspan="7"><a href="admin.php"><button class="buttonE">Regresar al menu</button></a></td></tr>
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
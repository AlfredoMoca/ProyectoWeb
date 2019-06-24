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
	<title>nueva cuenta</title>
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
	<?php
		@$nombre=$_REQUEST["nombre"];
		@$privilegio=$_REQUEST["privilegio"];
		@$login=$_REQUEST["login"];
	?>
	<table width="900px" heigth="800px" align="center">
	<tr><td><?php include 'header.php'; ?></td></tr>
	<tr>
	<td>
	<tr><td><table width="500px" height="500px" align="center" border="1">	
	<form action="guardar_cuenta.php" method="POST" name="usuarios">
			<tr>
			<td>
				Profesor:
			</td>
			<td>
				<select name="profesor" onchange="Javascript:document.usuarios.alumno.value='' ; document.usuarios.administrador.value=''">
					<option> </option>
					<?php
						$q=mysql_query("SELECT * FROM profesores ORDER BY nombre");
						while($row=mysql_fetch_array($q)){
							$nombre=$row["nombre"];
							$id_profe=$row["id"];
					?>
					<option><?php echo $nombre;?></option>
					<?php
						}
					?>
				</select>
			</td>
			</tr>
						<tr>
			<td>
				alumno:
			</td>
			<td>
				<select name="alumno" onchange="Javascript:document.usuarios.profesor.value='' ; document.usuarios.administrador.value=''" >
					<option> </option>
				<?php
					$q=mysql_query("SELECT * FROM alumnos ORDER BY nombre");
					while($row=mysql_fetch_array($q)){
						$nombre=$row["nombre"];
						$id_alumno=$row["id"];
				?>
				<option><?php echo $nombre;?></option>
				<?php
					}
				?>
			</td>
			</tr>
			<tr>
			<td>
				administrador:
			</td>
			<td>
				<input type="text" name="administrador" onchange="Javascript:document.usuarios.alumno.value='' ; document.usuarios.profesor.value=''" >
			</td>
			</tr>
			<tr>
			<td>
				<br>Login:
			</td>
			<td>
				<input type="text" name="login" value="<?php echo $login; ?>" required>
			</td>
			</tr>
			<tr>
			<td>
				Password:
			</td>
			<td>
				<input type="password" name="password" required>
			</td>
			</tr>
			<tr><td colspan="2" align="center"><input name="boton" type="submit" value="guardar">
			</td>
			</tr>
			<tr><td align="center" colspan="2"><a href="admin.php"><button class="buttonE">Regresar al menu</button></a></td></tr>
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
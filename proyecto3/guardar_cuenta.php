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
	@$profesor=$_POST["profesor"];
	@$alumno=$_POST["alumno"];
	@$login=$_POST["login"];
	@$password=$_POST["password"];
	@$administrador=$_POST["administrador"];
	if($profesor!= ""){
		echo $privilegio="1";
		$q=mysql_query("SELECT * FROM profesores WHERE nombre='$profesor'");
		@$row=mysql_fetch_array($q);
		$nombre=$row["nombre"];
		$id=$row["id"];
	}
	if($alumno!=""){
		echo $privilegio="2";
		$q=mysql_query("SELECT * FROM alumnos WHERE nombre='$alumno'");
		@$row=mysql_fetch_array($q);
		$nombre=$row["nombre"];
		$id=$row["id"];
	}
	if($administrador!=""){
		echo $privilegio="3";
		$id="1";
	}
	if ($privilegio!=""){
		mysql_query("insert into accesos(nombre,id_usuario,privilegio,tipo,login,clave) value ('$nombre','$id_usuario','$privilegio','','$login','$password')");
	}
	else{
			?>
			<script>
    		window.alert("NO se encuentra privilegio");
    		window.location.assign("nueva_cuenta.php?privilegio=<?php echo $privilegio;?>&login=<?php echo $login;?>")
			</script>
        	<?php
	}
?>
<!DOCTYPE HTML>
<html lang "es">
<head>
	<title>GUARDADO</title>
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
			nombre:
		</td>
		<td>
			<?php
			echo "$nombre";
			?>
		</td>

		<tr>
		<td>
			privilegio:
		</td>
		<td>
			<?php
			echo "$privilegio";
			?>
		</td>
		</tr>
		<tr>
		<td>
			Login:
		</td>
		<td>
			<?php
			echo "$login";
			?>
		</td>
		</tr>
		<tr>
		<td>
			clave:
		</td>
		<td>
			<?php
			if (strlen($password) < 6)
				{
					?>
					<script>
    						window.alert("Constraseña muy corta , minimo 6 caracteres");
    						window.location.assign("nueva_cuenta.php?nombre=<?php echo $nombre;?>&apellido=<?php echo $apellido;?>&mail=<?php echo $mail;?>&tel=<?php echo $tel ?>&privilegio=<?php echo $privilegio;?>&login=<?php echo $login;?>")
					</script>
					        <a fontsize="h2" align="center" href="index.php">
        					regresar
        					</a> 
        			<?php
        		}
			else{
				echo "exito";
			}
			?>
		</td>
		</tr>
		<tr><td align="center" colspan="2"><a href="nueva_cuenta.php"><button class="button">ingresar otra cuenta</button></a></td></tr>
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
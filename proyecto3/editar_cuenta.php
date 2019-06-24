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
		@$nombre=$_POST["nombre"];
		@$privilegio=$_POST["privilegio"];
		@$login=$_POST["login"];
		@$password=$_POST["password"];
		@$boton=$_POST["boton"];
		@$boton2=$_POST["boton2"];
		@$id=$_REQUEST["id"];
					if($boton=="actualizar"){
			mysql_query("UPDATE accesos SET nombre='$nombre', privilegio='$privilegio' , tipo='',login='$login',clave='$password' WHERE id='$id'");
			?><center><a href="usuarios.php"><button class="buttonE"> regresar</button></a></center><?php
			}
			else if($boton2=="cancelar"){
					?><center><a href="usuarios.php"><button class="buttonE"> regresar</button></a></center><?php
				}
		$q=mysql_query("SELECT * FROM accesos WHERE id='$id'");
			$row=mysql_fetch_array($q);
			$nombre=$row["nombre"];
			$privilegio=$row["privilegio"];
			$login=$row["login"];
			$password=$row["clave"];
			$id=$row["id"];
	?>
	<center>
	<form action="editar_cuenta.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table width="900px" heigth="800px" align="center">
	<tr><td><?php include 'header.php'; ?></td></tr>
	<tr>
	<td>
	<tr><td><table width="500px" height="500px" align="center" border="1">
		<td align="center">
			nombre
		</td>
		<td align="center">
			privilegio
		</td>
		<td align="center">
			login
		</td>
		<td align="center">
			clave
		</td>
		<tr>
		<td align="center">
			<input type="text" name="nombre" value="<?php echo $nombre; ?>" >
		</td>
		<td align="center">
			<input type="text" name="privilegio" value="<?php echo $privilegio; ?>" >
		</td>
		<td align="center">
			<input type="text" name="login" value="<?php echo $login; ?>" >
		</td>
		<td align="center">
			<input type="text" name="password" value="<?php echo $password; ?>" >
		</td>
		<td align="center">
			<input name="boton" type="submit" value="actualizar">
		</td>
		<td align="center">
			<input name="boton2" type="submit" value="cancelar">
		</td>
		<tr><td align="center" colspan="6"><a href="usuarios.php"><button class="buttonE">Regresar al menu</button></a></td></tr>
	</table></td></tr>
		<tr><td><?php include 'footer.php'; ?></td></tr>
</table>
</form>
</center>
</body>
</html>
<?php 
	}
?>
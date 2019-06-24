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
	<title>impresion</title>
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
<a href="nueva_cuenta.php">
	<button type="buttom">nueva cuenta</button>
</a>
	<table border="2">
		<td>
			nombre
		</td>
		<td>
			privilegio
		</td>
		<td>
			tipo
		</td>
		<td>
			login
		</td>
		<td>
			clave
		</td>
		<td>
			editar
		</td>
		<td>
			eliminar
		</td>
		<tr>
			<?php
		$q=mysql_query("SELECT * FROM accesos ORDER BY nombre");
		while($row=mysql_fetch_array($q)){

			$nombre=$row["nombre"];
			$privilegio=$row["privilegio"];
			$login=$row["login"];
			$password=$row["clave"];
			$id=$row["id"];
	?>
		<td>
			<?php echo $nombre; ?>
		</td>
		<td>
			<?php echo $privilegio; ?>
		</td>
		<td>
		</td>
		<td>
			<?php echo $login; ?>
		</td>
		<td>
			<?php echo $password; ?>
		</td>
		<td>
		<a href="editar_cuenta.php?id=<?php echo $id;?>"><button class="button">editar</button></a>
		</td>
		<td>
		<a href="eliminar_cuenta.php?id=<?php echo $id;?>"><button class="button">eliminar</button></a>
		</td>
		</tr>
			<?php } ?>
		</form>
	</table>
	<a href="admin.php"><button class="buttonE">Regresar al menu</button></a>
</center>
</body>
</html>
<?php
	}
?>
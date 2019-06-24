
<?php
	session_start();
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
	<title>ELIMINAR
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
		@$id=$_REQUEST["id"];
		@$si=$_POST["si"];
		@$no=$_POST["no"];
	?>
		<table width="900px" heigth="800px" align="center">
	<tr><td><?php include 'header.php'; ?></td></tr>
	<td>
	<tr><td><table width="500px" height="500px" align="center" border="1">
	<tr><td align="center"> ¿Seguro que quieres borrar esto?	
	<form action="eliminar_profesores.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="submit" name="si" value="si">
		<input type="submit" name="no" value="no">
		</form>
		<br><br><br><a href="admin.php"><button class="buttonE">Regresar al menu</button></a></br></br></br>
		</td></tr>
		<?php	if($si=="si"){
			mysql_query("DELETE FROM profesores WHERE id ='$id'");
			?>			<script>
    						window.location.assign("lista_profesores.php");
						</script>
			 <?php
		}
		else if($no=="no"){
			?>			<script>
    			window.location.assign("lista_profesores.php");
			</script><?php
		}
	?>
		</table></td></tr>
		<tr><td ><?php include 'footer.php'; ?></td></tr>
	</table>
</body>
</html>
<?php
	}
?>
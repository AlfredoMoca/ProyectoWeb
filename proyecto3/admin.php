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
<!DOCTYPE html>
<head>
	<title>BIENVENIDO</title>
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
<table width="900px" heigth="800px" align="center">
	<tr><td><?php include 'header.php'; ?></td></tr>
	<tr>
	<td>
			<table cellspacing="2" cellpadding="2" align="center" width="500px" height="500px" >
				<caption><span size="2" font-weight: "bold">BIENVENIDO ADMINISTRADOR</span></br>
				<tr>
				<td align="center"><a href="usuarios.php"><button class="button">USUARIOS</button></td></a>
				<tr>
				<td align="center"><a href="lista_materia.php"><button class="button">MATERIAS</button></td></a>
				<tr>
				<td align="center"><a href="lista_profesores.php"><button class="button">PROFESORES</button></tt></a>
				<tr>
				<td align="center"><a href="lista_alumno.php"><button class="button">ALUMNOS</button></td></a>
				<tr>
				<td align="center"><a href="lista_materia_periodo.php"><button class="button">GENERAR MATERIAS PERIODOS</button></td></a>
				<tr>
				<td align="center"><a href="alumnos_materias.php"><button class="button">AÑADIR ALUMNO MATERIAS DE PERIODOS</button></td></a>
				<tr>
				<td align="center"><a href="index.php"><button class="buttonE">salir</button></td></a>
			</table></td></tr>
			
	<tr><td><?php include 'footer.php'; ?></td></tr>
</table>
</body>
</html>
<?php
	}
?>
<?php 
	session_start();
	include 'conectar.php';
		@$login=$_POST["login"];
		@$password=$_POST["clave"];	
		@$q=mysql_query("SELECT * FROM accesos WHERE login='$login' AND clave='$password'");
		@$row=mysql_fetch_array($q);
		@$id=$row["id"];
		@$login=$row["login"];
		@$password=$row["clave"];
		@$nombre=$row["nombre"];
		@$id_usuario=$row["id_usuario"];
		@$privilegio=$row["privilegio"];
		$_SESSION["usuario_id"]=$id;
		$_SESSION["usuario_privilegio"]=$privilegio;
		$_SESSION["usuario_nombre"]=$nombre;
		if($privilegio != "3" && $privilegio !="2" && $privilegio !="1"){
			?>
    			<script>
    			window.alert("datos erroneos");
    			window.location.assign("index.php");
			</script>
		<?php
		}
		else {
			if($privilegio == "3"){
				?>
				<script>
					window.location.assign("admin.php");
				</script>
					<?php
			}
			if($privilegio == "2"){
				?>
				<script>
					window.location.assign("alumno.php");
				</script>
					<?php
			}
			if($privilegio == "1"){
				?>
				<script>
					window.location.assign("profesores.php");
				</script>
					<?php
			}
		}

?>
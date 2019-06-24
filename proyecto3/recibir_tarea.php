<?php
	@session_start();
	include 'conectar.php';
	$id_materia_periodo=$_REQUEST["id_materia_periodo"];
	$id_alumno=$_REQUEST["id_alumno"];
	$nombre=$_REQUEST["nombre"];
	$fecha=$_REQUEST["fecha"];
	$destino = "tarea";
	$archivo = $_FILES["arch"]["tmp_name"]; 		
	$name = $_FILES["arch"]["name"];
	$tamanio= $_FILES["arch"]["size"];	
	$type = $_FILES["arch"]["type"];  
	move_uploaded_file($archivo,$destino.'/'.$name);
	mysql_query("insert into tareas(id_materia_periodo,id_alumno,tarea,fecha,archivo) values ('$id_materia_periodo','$id_alumno','$nombre','$fecha','$name')");
	?>
	<script>
   		 window.alert("tarea subida con exito");
   		 window.location.assign("tarea.php?id_materia_periodo=<?php echo $id_materia_periodo ?>&id_alumno=<?php echo $id_alumno; ?>");
	</script>

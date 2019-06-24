<?php

include 'inyected.php' ;

$host="localhost";

$uname="root";

$pass="";



//$host="";

//$uname="root";

//$pass="";



$coneccion = mysql_connect($host,$uname,$pass);

if (!$coneccion)

{

 die("no se conecto");

}

//$bd="grupoforestalmaderero_com_-_madera";

$bd="proyecto3";

$res=mysql_select_db($bd)

 or die("no se pudo selecionar la base de datos");

?>
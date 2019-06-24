<?PHP 
// Evitamos la inyeccion SQL 

// Modificamos las variables pasadas por URL 
foreach( $_GET as $variable => $valor ){ 
@$_GET [ $variable ] = str_replace ( "'" , "'" , $_GET [ $variable ]); 
@$_GET [ $variable ] = str_replace ( "*" , "*" , $_GET [ $variable ]); 
@$_GET [ $variable ] = str_replace ( "$" , "$" , $_GET [ $variable ]); 
@$_GET [ $variable ] = str_replace ( "¿" , "?" , $_GET [ $variable ]); 
@$_GET [ $variable ] = str_replace ( "=" , "=" , $_GET [ $variable ]);
} 
// Modificamos las variables de formularios 
foreach( $_POST as $variable => $valor ){ 
@$_POST [ $variable ] = ereg_replace("['*$?¡¿=]","", $_POST [ $variable ]); 
//$_POST [ $variable ] = str_replace ( "*" , "*" , $_POST [ $variable ]); 
//$_POST [ $variable ] = str_replace ( "$" , "$" , $_POST [ $variable ]); 
//$_POST [ $variable ] = str_replace ( "¿" , "?" , $_POST [ $variable ]); 
//$_POST [ $variable ] = str_replace ( "=" , "=" , $_POST [ $variable ]);


} 
?> 

<?php
// VARIABLES DE CONEXION
$server = "localhost";
$dbuser = "root";
$dbpassword = "tupass";
$dbname = "webfinal"; 
  $db = mysql_connect($dbhost, $dbuser, $dbpassword) or die("Connection Error: " . mysql_error());
mysql_select_db($dbname) or die("Error al conectar a la base de datos.");
  //EXRAEMOS LAS TABLAS DE LA base DE DATOS
$sql = "SHOW TABLES";
$tablas = mysql_query( $sql) or die("No se puede ejecutar la consulta: ".mysql_error());
while ($tabla = mysql_fetch_assoc($tablas))  {
	foreach ($tabla as $item => $nombre_tabla) {	
		echo $nombre_tabla.": ";
		//OPTIMIZAMOS LAS TABLAS
		mysql_query("OPTIMIZE TABLE ".$nombre_tabla) or die("No se puede ejecutar la consulta: ".mysql_error());
		// MOSTRAMOS EL RESULTADO
		if (mysql_errno()){
			echo " No ha podido ser optimizada.";
		}else{
			echo "Optimizada.";
		}
		echo "<br />";
	}
}
mysql_close($db);
?>
 <?
    //Varofonsel 2015 @Taringa
	$host_db = "localhost"; // Host de la BD
    $usuario_db = "root"; // Usuario de la BD
    $clave_db = ""; // Contraseña de la BD
    $nombre_db = "webfinal"; // Nombre de la BD
    
    //conectamos y seleccionamos db
    mysql_connect($host_db, $usuario_db, $clave_db);
    mysql_select_db($nombre_db);
	?>
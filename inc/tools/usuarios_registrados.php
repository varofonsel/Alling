<?php ob_start();
     //Varofonsel 2015 @Taringa
	session_start();
include('../../acceso_db.php'); // incluímos los datos de acceso a la BD
 // comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['usuario_nombre'])) {
ob_end_flush() ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
 <link rel="stylesheet" href="../css/Perfil_Estilos.css" type="text/css" />
	</head>
<body> 
<? include("../panel/index.php"); ?>

	<h4>Hola <?=$_SESSION['usuario_nombre']?>, estos son los usuarios registrados, estan ordenados por fecha de registro</h4>
<?php ob_start();
mysql_select_db("webfinal"); //Seleccionar base datos
$sql=" select * from usuarios"; //código MySQL
$datos=mysql_query($sql); //enviar código MySQL
while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
      $nombre=$row['usuario_nombre']; //datos del campo nombre
	  ?>
	 
	 <h4>
	 <a  href="http://localhost/alling/inc/perfil.php?nombre=<?=$nombre;?>"><?=$nombre;?></a></br></br>
	 </h4>
<?php ob_start();     
	 }
	 
			ob_end_flush() ?>
	</body>
</html>
<?php ob_start();
    }else {
        echo "Estás accediendo a una página restringida, para ver su contenido debes estar registrado.<br />
        <a href='index.php'>Ingresar O Registrarse</a>";
    }
ob_end_flush() ?>
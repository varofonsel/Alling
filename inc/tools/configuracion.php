<?php ob_start();
 //Varofonsel 2015 @Taringa   
   session_start();
    include('../../acceso_db.php'); // incluímos los datos de acceso a la BD
    // comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['usuario_nombre'])) {
$usuario_nombre = $_SESSION['usuario_nombre'];
$usuario_id = $_SESSION['usuario_id'];
	 echo"<link rel='stylesheet' href='../css/Estilos.css' type='text/css' />";
	include("../panel/index.php");
	?>
<!doctype html>
<html lang="en">
<head>
 <link rel="stylesheet" href="Css/Perfil_Estilos.css" type="text/css" />
<div id="header">
</div>
 <html>
<head>
<link rel="stylesheet" type="text/css" href="Css/Perfil_Menu.css" />
</head>
<body>
<center>
<h3> Desde esta herramienta vas a poder cambiar algunas cosas con respecto a tu cuenta </h3>
</center>

</ul>
</div>
</body>
</html>

 
 
 
 <?php ob_start();
$seccion = $_GET['opcion'];
switch ($seccion) {
    case 'cambiar_contrasena':
        include('configuracion/cambiar_contrasena.php');
        break;
    case 'borrar_cuenta':
        include('configuracion/borrar_cuenta.php');
        break;
		case 'datos_principales':
        include('configuracion/Info_Principal.php');
        break;
		case 'datos_secundarios':
        include('configuracion/completar_datos.php');
        break;
}
} else {
        echo "Estas accediendo a una pagina restringida, para ver su contenido debes estar registrado.<br />
        <a href='../index.php'>Ingresar O Registrarse</a>";
    }
?>
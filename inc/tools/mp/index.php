<?php ob_start();

 //Varofonsel 2015 @Taringa   
   session_start();
 if(isset($_SESSION['usuario_nombre'])) {
 echo"<link rel='stylesheet' href='../../css/Estilos.css' type='text/css' />";
 include("../../panel/index.php");
 # Incluimos la configuracion
$usuario_nombre = $_SESSION['usuario_nombre'];

include('../../../acceso_db.php'); 
$sql = "SELECT * FROM mensaje WHERE para='".$_SESSION['usuario_nombre']."' and leido IS NULL";
$res = mysql_query($sql) or die(mysql_error());
$tot = mysql_num_rows($res);
?>
Menu: <a href="listar.php">Ver mensajes</a> | <a href="crear.php">Crear mensajes</a> <br /><br />
Hola <?=$_SESSION['usuario_nombre']?>, Usted tiene <?=$tot?> mensajes sin leer.
<?
} else {
        echo "Estas accediendo a una pagina restringida, para ver su contenido debes estar registrado.<br />
        <a href='../index.php'>Ingresar O Registrarse</a>";
    }
	?>
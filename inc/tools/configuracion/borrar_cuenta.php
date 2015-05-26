
<?php ob_start();
 //Varofonsel 2015 @Taringa   
   session_start();
    include('../../acceso_db.php'); // incluímos los datos de acceso a la BD
    // comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['usuario_nombre'])) {
$usuario_nombre = $_SESSION['usuario_nombre'];
$usuario_id = $_SESSION['usuario_id'];
	?>
<!doctype html>
<html lang="en">
<head>
 <link rel="stylesheet" href="Css/Perfil_Estilos.css" type="text/css" />
 <center>
<h3>Borrar tu cuenta</h3>
<h4>Estas seguro de borrar tu cuenta <strong> PERMANENTEMENTE</strong>?. No hay vuelta atras</h4>
 <form action="?opcion=borrar_cuenta" method="post">
   <input type="submit" value="Borrar Cuenta" name="enviar" />
</form>
 
 <?php ob_start();
            if(isset($_POST['enviar'])) {
$consulta = mysql_query("DELETE FROM usuarios WHERE usuario_nombre='$usuario_nombre'");
$consulta2 = mysql_query("DELETE FROM datos WHERE d_usuario_nombre='$usuario_nombre'");
$consulta3 = mysql_query("DELETE FROM fotos WHERE u_no_f='$usuario_nombre'");
$consulta4 = mysql_query("DELETE FROM fotoperfil WHERE u_no_fp='$usuario_nombre'");
  if($consulta) {
include("0f4d63d12c93b841c0fbce008f739fd0.php");	                 
					 header("Location: salir.php");;
	                }else {
	                    echo "Ha ocurrido un error y no se pudo borrar tu cuenta.";
	                }
 } else {
 }
 ?>
 <?php ob_start();
 } else {
        echo "Estas accediendo a una pagina restringida, para ver su contenido debes estar registrado.<br />
        <a href='../index.php'>Ingresar O Registrarse</a>";
    }
?>
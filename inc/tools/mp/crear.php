<?php ob_start();
 //Varofonsel 2015 @Taringa   
   session_start();
 if(isset($_SESSION['usuario_nombre'])) {
# Incluimos la configuracion
$usuario_nombre = $_SESSION['usuario_nombre'];

$urli2= $_GET['para'];
include('../../../acceso_db.php'); 
 echo"<link rel='stylesheet' href='../../css/Estilos.css' type='text/css' />";
 include("../../panel/index.php");
if($_POST['enviar']){
	if(!empty($_POST['para']) && !empty($_POST['asunto']) && !empty($_POST['texto']))
	{
		$para = $_POST['para'];
		$asunto = $_POST['asunto'];
		$texto = $_POST['texto'];
		$fecha = date("j/m/Y, g:i a");
		$sql = "INSERT INTO mensaje (para,de,fecha,asunto,texto) VALUES ('".$para."','".$usuario_nombre."','".$fecha."','".$asunto."','".$texto."')";
		mysql_query($sql);
		echo "Mensaje enviado correctamente.";
	}
}
?>
Menu: <a href="listar.php">Ver mensajes</a> | <a href="crear.php">Crear mensajes</a> | <br /><br />
<form method="post" action="" >
<center></center></<br /><br />
Para:<br />
<input type="text" name="para" value="<? echo $urli2; ?>" /><br />
Asunto:<br />
<input type="text" name="asunto" /><br />
Mensaje:<br />
<textarea name="texto"> </textarea>
<br /><br />
<input type="submit" name="enviar" value="Enviar" />
</form>
<?
} else {
        echo "Estas accediendo a una pagina restringida, para ver su contenido debes estar registrado.<br />
        <a href='../index.php'>Ingresar O Registrarse</a>";
    }
	?>
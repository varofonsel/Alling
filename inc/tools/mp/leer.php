<?php ob_start();
 //Varofonsel 2015 @Taringa   
   session_start();
 if(isset($_SESSION['usuario_nombre'])) {
include("../../../acceso_db.php");
  echo"<link rel='stylesheet' href='../../css/Estilos.css' type='text/css' />";
 include("../../panel/index.php");
 # Incluimos la configuracion
$usuario_nombre = $_SESSION['usuario_nombre'];

$id = $_GET['id'];
$sql = "SELECT * FROM mensaje WHERE para='".$_SESSION['usuario_nombre']."' and ID='".$id."'";
$res = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_assoc($res);
?>
Menu: <a href="listar.php">Ver mensajes</a> | <a href="crear.php">Crear mensajes</a> | <br /><br />
<strong>De:</strong> <?=$row['de']?><br />
<strong>Fecha:</strong> <?=$row['fecha']?><br />
<strong>Asunto:</strong> <?=$row['asunto']?><br /><br />
<strong>Mensaje:</strong><br />
<?=$row['texto']?></br>
<a href="crear.php?para=<?=$row['de'];?>">Responder</a>

<?php 
# Avisamos que ya lo leimos
if($row['leido'] != "si")
{
	mysql_query("UPDATE mensaje SET leido='si' WHERE ID='".$id."'") or die(mysql_error());
}
} else {
        echo "Estas accediendo a una pagina restringida, para ver su contenido debes estar registrado.<br />
        <a href='../index.php'>Ingresar O Registrarse</a>";
    }
?>
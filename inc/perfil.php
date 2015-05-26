<?php ob_start();
 //Varofonsel 2015 @Taringa   
   session_start();
    include('../acceso_db.php'); // incluímos los datos de acceso a la BD
    // comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['usuario_nombre'])) {
$usuario_nombre = $_SESSION['usuario_nombre'];
$usuario_id = $_GET['usuario_id'];
$usuario_get= $_GET['nombre'];
include("panel/index.php");
	?>
<!doctype html>
<html lang="en">
<head>
 <link rel="stylesheet" href="css/Perfil_Estilos.css" type="text/css" />
	<meta charset="UTF-8">
	<title>Document</title>
	</head>	

	<?php
if($usuario_id == $usuario_get){
?>
 <?php
 } else {
 };
 ?>
 </div>		
		<center>
<body>
			
<?php ob_start();
	  $photo = mysql_query("SELECT * FROM fotoperfil WHERE u_no_fp='".$_GET['nombre']."'") or die(mysql_error());
	    if(mysql_num_rows($photo))  // Comprobamos que exista el registro con la ID ingresada
	        $row3 = mysql_fetch_array($photo);
	        $u_no_fp= $row3["u_no_fp"];
			
	ob_end_flush()  ?>    
<?php ob_start();
	  $photo2 = mysql_query("SELECT * FROM fotoperfil WHERE u_no_fp='".$_GET['nombre']."'") or die(mysql_error());
	    if(mysql_num_rows($photo2))  // Comprobamos que exista el registro con la ID ingresada
	        $row4 = mysql_fetch_array($photo2);
	        $u_id_fp= $row4["u_no_fp"];
			
	ob_end_flush()  ?>          

	</div>

	<div id="info">
<br></br>
	<iframe src="data.php?nombre=<?=$usuario_get;?>" width="340" height="400"> </iframe></br>
	</div> 	</br></br></br>
<div id="fotoperfil">
	<iframe src="tools/fotoperfil/ver.php?usid=<? echo $u_no_fp;?>" width="340" height="400"> </iframe></br>
	<? if($usuario_get == $usuario_nombre) {
	echo "<a href='tools/fotoperfil/subir.php'>Editar o subir tu foto de perfil</a></br>";
	
	} else {
};
if ($usuario_get == $usuario_nombre) {
} else {
	echo "<a href='tools/mp/crear.php?para=$usuario_get'> Enviarle un mensaje a este usuario</a></br>";
}
	?>
	</div>
	<center>
	<div id="space">
</div>
<div id="sp2">
<h3>Publicaciones hechas por <? echo"$usuario_get" ?>	
</div>
<? include("internas/p_nombre.php"); ?>
	<?php ob_start();
	}else {
	
?>
    

	</body>
</html>
<?php ob_start();
        echo "Estas accediendo a una pagina restringida, para ver su contenido debes estar registrado.<br />
        <a href='../index.php'>Ingresar O Registrarse</a>";
	}
ob_end_flush() ?>
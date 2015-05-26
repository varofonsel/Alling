<?php ob_start();
session_start();
    include('../../../acceso_db.php'); // incluímos los datos de acceso a la BD
	include("../../panel/index.php");
	// comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['usuario_nombre'])) {
$usuario_nombre = $_SESSION['usuario_nombre'];
$usuario_id = $_SESSION['usuario_id'];
mysql_select_db("webfinal"); //Seleccionar base datos
$sql=" SELECT * FROM fotos WHERE id='".$_GET['id']."'";
$datos=mysql_query($sql); //enviar código MySQL
while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
$nombre= $row['descripcion_f']; //datos del campo nombre
$name= $row['u_no_f']; //datos del campo nombre
	  $id_p= $row['id']; //datos del campo nombre
	  $us_id= $row['u_id_f']; //datos del campo nombre
      $ruta= $row['Foto1'];

if($name == $usuario_nombre) {
?>
<link rel="stylesheet" href="../Css/Perfil_Estilos.css" type="text/css" />
<link rel="stylesheet" href="../../css/Estilos.css" type="text/css" />
<center>

<div id="paneled">
<h2>Editar publicacion</h2></br>
			 <form action="?id=<?=$id_p?>" method="post">
			<b>Edita esta publicacion</b><br/>
         <textarea name="p_cuerpo" type="text" rows=7 cols=40  size="41"><? echo $nombre; ?>
</textarea>
	<input type="submit" name="enviar" value="Editar"/>
		</form>
<img src="http://localhost/alling/<?=$ruta;?>" width="100" height="100">
<h2>O borrar la publicacion</h2>
	<form action="?id=<?=$id_p?>" method="post">
   <input type="submit" value="Borrar Cuenta" name="borrar" />
</form>
		</div>
		</center>
<?php ob_start();
 if(isset($_POST['enviar'])){
   if(empty($_POST['p_cuerpo'])) { 
	            echo "No haz ingresado tu edicion.";
				}else{
			$p_cuerpo= $_POST['p_cuerpo'];
$sql = mysql_query("UPDATE fotos SET descripcion_f='".$p_cuerpo."' WHERE id='".$_GET['id']."'");
if($sql) {
echo"Editado correctamente";
} else  {
echo "No se pudo editar";
};
            if(isset($_POST['borrar'])) {
$consulta = mysql_query("DELETE FROM fotos WHERE id='$id_p'");
if($consulta){
echo "Borrado correctamente";
} else {
echo "No se pudo borrar";
};
};
};
} else {
};
} else {
echo "No tienes permiso sobre esta publicacion";
};
};
} else {
echo "No estas logueado";
};

ob_end_flush() ?>

<?php ob_start();
     //Varofonsel 2015 @Taringa
	session_start();
    include('../acceso_db.php'); // incluímos los datos de acceso a la BD
    // comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['usuario_nombre'])) {
ob_end_flush() ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<style type="text/css">
<div id="space">
</div>
	</style>
	
	<p>
	</p>
	<h4>
<?php	 
mysql_select_db("webfinal"); //Seleccionar base datos
$sql=" SELECT * FROM fotos WHERE u_no_f='".$_GET['nombre']."' ";
$datos=mysql_query($sql); //enviar código MySQL
while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
      $ruta=$row['Foto1']; //datos del campo nombre
      $name=$row['u_no_f']; //datos del campo nombre
	  $nombre2=$row['descripcion_f']; //datos del campo nombre
	  $id_de=$row['id']; //datos del campo nombre
	  ?><strong>
	 <div id="publicaciones">
	 <strong><div style="border: 2px double;  black; padding: 1.9em;"></br><?echo "$nombre2 </br>"?>  <a href="inc/perfil.php?nombre=<?=$name?>"><?=$name?></a>.<br/> 
<center>	
	<? if ($ruta == ""){
	 
	 } else {?>
<img src="../<? echo "$ruta"; ?>" width="100" height="100" /></br>
		</center>
		<?};?>
		<a href="tools/publicaciones/publicaciones.php?id=<?=$id_de?>">Ir a la publicacion</a></br>
		
		<? if ($name == $usuario_nombre){
	?>	
		<a href="tools/publicaciones/editar_publicaciones.php?id=<?=$id_de?>">Editar Publicacion</a></br>
		
		 <? ob_start();
		} else {
		};
		
			ob_end_flush() ?>
		
		</div>
      </div>
	  </br></br></br>
	  <?
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
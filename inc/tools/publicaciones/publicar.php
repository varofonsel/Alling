<?php ob_start();
session_start();
    include('acceso_db.php'); // inclu�mos los datos de acceso a la BD
  
  $d=rand(1,100);
  $e=rand(1,50);
  $f=rand(1,30);


	// comprobamos que se haya iniciado la sesi�n
    if(isset($_SESSION['usuario_nombre'])) {
				
	 $usuario_nombre= $_SESSION['usuario_nombre'];
	  $usuario_id= $_SESSION['usuario_id'];
      $total= fotoid.$usuario_nombre.$d.$e.$f;
	  $nombrefoto1=$_FILES['foto1']['name'];
$ruta1=$_FILES['foto1']['tmp_name'];
if(is_uploaded_file($ruta1))
{ 
if($_FILES['foto1']['type'] == 'image/png' OR $_FILES['foto1']['type'] == 'image/gif' OR $_FILES['foto1']['type'] == 'image/jpeg')
		{
$tips = 'jpg';
$type = array('image/jpeg' => 'jpg');
$name = $id. $total.'.'.$tips;
$destino1 =  "inc/tools/publicaciones/imagenes/".$name;
copy($ruta1,$destino1);

$ruta_imagen = $destino1;

$miniatura_ancho_maximo = 700;
$miniatura_alto_maximo = 500;

$info_imagen = getimagesize($ruta_imagen);
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( $ruta_imagen );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( $ruta_imagen );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( $ruta_imagen );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, $destino1, 80);
}
}

ob_end_flush() ?>
<div id="pu">
<center>
<form action="<?php ob_start(); echo $_SERVER['PHP_SELF']; ob_end_flush() ?>" method="post" enctype="multipart/form-data">


<b>Publica algo...</b><br />
   <textarea cols="50" rows="3" name="p_cuerpo"></textarea><br />
 <b>Manda una foto que describa tu publicacion</b></br>
<input name="foto1" type="file">  </br>
<input name="guardar" type="submit" class="submit" value="Ingresar " />

</form>
</div>
</center>
<?php ob_start();	  			  			  
if($_POST['guardar']){
if(empty($_POST['p_cuerpo'])) { 
	            echo "No haz ingresado tu publicacion.";
				}else{
$p_cuerpo= $_POST['p_cuerpo'];
$reg = mysql_query("INSERT INTO fotos (Foto1, u_no_f, u_id_f, descripcion_f) VALUES ('".$destino1."', '".$usuario_nombre."', '".$usuario_id."', '".$p_cuerpo."')");
	                if($reg) { ob_end_flush() ?>
					<? ob_start();
	                     header("Location: index.php?r=true");
ob_end_flush()?>
<? ob_start();	               
				   }else {
	                    echo "Ha ocurrido un error.";
	                }
}
}
} else {
echo "No estas logueado";
};
ob_end_flush() ?>

<?php ob_start();
     //Varofonsel 2015 @Taringa
	session_start();
include('../../../acceso_db.php'); // incluímos los datos de acceso a la BD
include('../../panel/index.php'); // incluímos los datos de acceso a la BD
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

	</style>
	
	<p>
	</p>
	<h4>

<?php ob_start();
mysql_select_db("webfinal"); //Seleccionar base datos
$sql=" SELECT * FROM fotos WHERE id='".$_GET['id']."'";
$datos=mysql_query($sql); //enviar código MySQL
while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
      $ruta=$row['Foto1']; //datos del campo nombre
	  $u_nombre=$row['u_no_f']; //datos del campo nombre
	  $id=$row['u_id_f']; //datos del campo nombre
	  $publicacion=$row['descripcion_f']; //datos del campo nombre	  

	  $ruta2= substr("$ruta", 24);
	 
?>
<center>
</br></br></br></Br></br></br>	
	<img src="<? echo "$ruta2"; ?>" width="100" height="100" /></br>
	  <h3>Usuario: <? echo "$u_nombre";?>
	  <h3>Descripcion: <? echo "$publicacion";?>
      </center>

	  <?
      }
			ob_end_flush() ?>
			</div>
			</div>
	</div>
	</div>
	</body>
</html>
<?php ob_start();
    }else {
        echo "Estás accediendo a una página restringida, para ver su contenido debes estar registrado.<br />
        <a href='index.php'>Ingresar O Registrarse</a>";
    }
ob_end_flush() ?>
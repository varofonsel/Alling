<?php ob_start();
       include('../../../acceso_db.php'); // incluímos los datos de acceso a la BD
	 //Varofonsel 2015 @Taringa
	session_start();
	// comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['usuario_nombre'])) {
	$phu= $_SESSION['usuario_nombre'];
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
   $foto = mysql_query("SELECT * FROM fotoperfil WHERE u_no_fp='".$_GET['usid']."'") or die(mysql_error());
	    if(mysql_num_rows($foto)) { // Comprobamos que exista el registro con la ID ingresada
	        $foto2 = mysql_fetch_array($foto);
	        $ruta = $foto2["fotoperfil"];
	        $nick = $foto2["u_no_fp"];
	   
?>		
          
<center>
</br></br></br></Br></br></br>	
	<img src="<? echo "$ruta";?>" width="240" height="240" /></br>
	
	 </center>

	  <?
    } else {
	echo "El usuario no subio su foto de perfil" ;
	}
	?>
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
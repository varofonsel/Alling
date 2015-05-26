<?php ob_start();
     //Varofonsel 2015 @Taringa
	session_start();
    include('../../acceso_db.php'); // incluímos los datos de acceso a la BD
    // comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['usuario_nombre'])) {
	$nick= $_SESSION['usuario_nombre'];
ob_end_flush() ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<link rel="stylesheet" href="Css/Perfil_Estilos.css" type="text/css" />
<div id="header">
</div>	
	<p>
	</p>
	<h4>
<?php	 
mysql_select_db("webfinal"); //Seleccionar base datos
$sql=" SELECT * FROM datos WHERE d_usuario_nombre='".$_GET['nombre']."' ";
$datos=mysql_query($sql); //enviar código MySQL
while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
                $fisico_peso = $row["fisico_peso"];
				$fisico_estatura = $row["fisico_estatura"];
				$deportes = $row["deportes"];
				$vicios1 = $row["vicios1"];
			    $television =$row["television"];
				$musica_bandas = $row["musica_bandas"];
				$musica_temas = $row["musica_temas"];
				$libros = $row["libros"];
				$autores_libros = $row["autores_libros"];
			    $estado_civil = $row["estado_civil"];
				$hijos = $row["hijos"];
	 
	 ?>		<h3>Informacion secundaria de <?echo "$nick";?></br></h3>
	 <h4><a href='../data.php?nombre=<?=$nick?>'>Volver a la informacion basica de <?=$nick;?></a></h4></br>
<h4> Pesa: <? echo "$fisico_peso KG"; ?></br>
<h4> Su estatura es: <? echo "$fisico_estatura CM"; ?></br>
<h4> Practica: <? echo "$deportes";?></br>
<h4> Sus programas de tv favoritos son: <? echo "$television";?></br>
<h4> Su apellido es: <? echo "$apellido";?><br>
<h4> Sus bandas preferidas son: <? echo "$musica_bandas";?></br>
<h4> Sus canciones favoritas son: <? echo "$musica_temas";?></br>
<h4> Sus libros favorita son: <? echo "$libros";?></br>
<h4> Sus escritores favoritos son: <? echo "$autores_libros";?></br>
<h4> Es: <? echo "$estado_civil";?></br>
<h4> Hijos: <? echo "$hijos";?></br>
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
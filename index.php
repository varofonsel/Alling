<? ob_start();
 //Varofonsel 2015 @Taringa 
 session_start();
echo"<link rel='stylesheet' href='inc/css/Estilos.css' type='text/css' />";
 include('acceso_db.php');
 $usuario_nombre = $_SESSION['usuario_nombre'];	
 ob_start();
	    if(isset($_SESSION['usuario_nombre'])) {
include("inc/panel/index.php");		
echo"<br></br></br></br></br><br></br></br></br></br><br></br></br></br></br><br></br></br></br></br><br></br></br></br></br><br></br></br></br><br></br></br></br><br></br></br></br><br>";
echo"<center>";
echo"<div id='pu'>";

include("inc/tools/publicaciones/publicar.php") ;
echo "<div id='space'>";
echo "</div>";	
	ob_end_flush() ?>
	 </div>
	 <? ob_start();
	 
mysql_select_db("webfinal"); //Seleccionar base datos
$sql=" SELECT * FROM fotos ";
$datos=mysql_query($sql); //enviar código MySQL
while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
      $nombre=$row['descripcion_f']; //datos del campo nombre
      $name=$row['u_no_f']; //datos del campo nombre
	  $id_p=$row['id']; //datos del campo nombre
	  $us_id=$row['u_id_f']; //datos del campo nombre
	  $ruta=$row['Foto1']; //datos del campo nombre
	
ob_end_flush() ?>  
<div id="publicaciones">
	
<?//======================================================================================================================================================================================?>

	<strong><div style="border: 2px double;  black; padding: 1.9em;"></br> <div id="user"><div style="border: 1px double;  black; padding: 1.9em;"> <a href="inc/perfil.php?nombre=<?=$name?>"><?=$name ?></div></a></br></div></br></br></br>
	<div id="pub">          <? 
	echo "$nombre </br>"?></div><br/></br></br>
<center>	
	<? if ($ruta == ""){
	 
	 } else {?>
<div id="img">
	 <img src="<? echo "$ruta"; ?>" width="404" height="444" /></br>
		</div>
		
		</center>
		<?};?>
		<a href="inc/tools/publicaciones/publicaciones.php?id=<?=$id_p?>">Ir a la publicacion</a></br>
		</div>
		
		<? if ($name == $usuario_nombre){
	?>	
		<a href="inc/tools/publicaciones/editar_publicaciones.php?id=<?=$id_p?>">Editar Publicacion</a></br>
		</div>
		
		</div>
		<? ob_start();
		} else {
		};
		
		ob_end_flush() ?>
		<div id="color">
		</br></br>
		</div>
<?//==========================================================================================================================================================================================?>
		</div>
		 <? ob_start();
	  


      }
	
	
	
	  } else {
		ob_end_flush() ?>
			 <? ob_start();
			include("Home.php");
			?>
	 <? ob_start();
	    }
		ob_end_flush() ?>

  <style type="text/css">
</center>
  </style>
	</body>
</html>
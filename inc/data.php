<?php ob_start();
       include('../acceso_db.php'); // incluímos los datos de acceso a la BD
	 //Varofonsel 2015 @Taringa
	session_start();
	// comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['usuario_nombre'])) {
	    $perfil = mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$_GET['nombre']."'") or die(mysql_error());
	    if(mysql_num_rows($perfil)) { // Comprobamos que exista el registro con la ID ingresada
	        $row2 = mysql_fetch_array($perfil);
	        $id = $row2["usuario_id"];
	        $nick = $row2["usuario_nombre"];
	        $email = $row2["usuario_email"];
            $fecha = $row2["fecha"];
			$mes = $row2["mes"];
			$dia = $row2["dia"];
			$nombre = $row2["nombre"];
			$apellido = $row2["apellido"];
			$sexo = $row2["sexo"];
			$pais= $row2["pais"];
            $status_privacidad= $row2["status_privacidad"];
			?>
			<div id="info">
	<h4> Su usuario es: <? echo "$nick"; ?></br>
<h4> Su email es: <? echo "$email"; ?></br>
<h4> Nacio el: <? echo "$dia de $mes de $fecha";?></br>
<h4> Su nombre es: <? echo "$nombre";?></br>
<h4> Su apellido es: <? echo "$apellido";?><br>
<h4> Es: <? echo "$sexo";?></br>
<h4> Es de: <? echo "$pais";?></br>
	<h3>Informacion secundaria</h3></br>
	<a href='tools/informacion_secundaria.php?nombre=<?=$nick?>'>Para su informacion secundaria acá</a>
	</div> 	
	<?
		} else {
echo "Estos datos no pertenecen a ningun usuario";
}	
} else {
echo"Logueate";
};	
	ob_end_flush()  ?>  
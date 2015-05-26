<?php ob_start();
 //Varofonsel 2015 @Taringa   
   session_start();
    include('../../acceso_db.php'); // incluímos los datos de acceso a la BD
    // comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['usuario_nombre'])) {
$d_usuario_nombre = $_SESSION['usuario_nombre'];
$d_us_id = $_SESSION['usuario_id'];
	?>
<!doctype html>
<html lang="en">
<head>
 <link rel="stylesheet" href="../Css/Perfil_Estilos.css" type="text/css" />
	<meta charset="UTF-8">
	<title>Document</title>
	</head>


<body>
	<?//Formulario?>
	<center>
	<div id="formulariodata">
	
	<h2>Completar datos</h2></br>
			<form action="" method="post">
			<label>Introduce tu peso (Kg):</label><br />
		    <input type="text" name="fisico_peso" maxlength="3" /><br />
		    <label>Introduce tu estatura (Cm):</label><br />
		    <input type="text" name="fisico_estatura" maxlength="3" /><br /></br>
		   <label>Practicas algun deporte?.. Si es asi enumeralos!</label><br />
        <textarea cols="50" rows="3" name="deportes"></textarea><br />
		    <label>Tienes algun vicio?</label><br/></br>
		   <select name="vicios1" required>
           <option value=""></option>
	       <option>Tomar alcohol</option>
           <option>Fumar</option>
           <option>Otro</option>
		   <option>No tengo </option>
		   
	       </select> </br>
        <label>Que canales de television sueles mirar?</label><br />
        <textarea cols="50" rows="3" name="television"></textarea><br/>
         <label>Que bandas de musica son las que mas te gustan?</label><br />
        <textarea cols="50" rows="3" name="musica_bandas"></textarea><br />	
        <label>Que canciones son las que mas te gustan?</label><br />
        <textarea cols="50" rows="3" name="musica_temas"></textarea><br />
 <label>Que libros haz leido o lees?</label><br />
        <textarea cols="50" rows="3" name="libros"></textarea><br />
 <label>Que autores de libros son los que mas te gustaron?</label><br />
        <textarea cols="50" rows="3" name="autores_libros"></textarea><br />	
<label>Tu estado civil:</label><br/>
		   <select name="estado_civil" required>
           <option value=""></option>
	       <option>Soltero</option>
           <option>En una relacion...</option>
           <option>Casado</option>
		   <option>Divorciado</option>
		   <option>Viudo</option>
	       </select> </br>		
		   <label>Tienes hijos:</label><br/>
		   <select name="hijos" required>
           <option value=""></option>
	       <option>No</option>
           <option>Pienso tenerlos</option>
           <option>Tengo 1</option>
		   <option>Tengo 2</option>
		   <option>Tengo 3</option>
		   <option>Tengo 4</option>
          <option>Tengo mas de 4</option>	      
		  </select> </br>		
			<p>
</p>
			<input type="submit" name="enviar" value="Enviar datos" />
		</form>
	
	
	<?php ob_start();
	
	if(isset($_POST['enviar'])) {
	
	            $fisico_peso = $_POST['fisico_peso'];
				$fisico_estatura = $_POST['fisico_estatura'];
				$deportes = $_POST['deportes'];
				$vicios1 = $_POST['vicios1'];
			    $television = $_POST['television'];
				$musica_bandas = $_POST['musica_bandas'];
				$musica_temas = $_POST['musica_temas'];
				$libros = $_POST['libros'];
				$autores_libros = $_POST['autores_libros'];
			    $estado_civil = $_POST['estado_civil'];
				$hijos = $_POST['hijos'];
	            $d_usuario_nombre = $_SESSION['usuario_nombre'];
                $d_us_id = $_SESSION['usuario_id'];
		
$reg = mysql_query("INSERT INTO datos (fisico_peso, fisico_estatura, deportes, vicios1, television, musica_bandas, musica_temas, libros, autores_libros, estado_civil, hijos, d_usuario_nombre, d_us_id) VALUES ('".$fisico_peso."', '".$fisico_estatura."', '".$deportes."', '".$vicios1."', '".$television."', '".$musica_bandas."', '".$musica_temas."', '".$libros."', '".$autores_libros."', '".$estado_civil."', '".$hijos."', '".$d_usuario_nombre."', '".$d_us_id."')");
	                if($reg) {
	                    echo "Datos ingresados correctamente
        <a href='../../index.php'>Volver a inicio</a>";
	                }else {
	                    echo "ha ocurrido un error y no se registraron los datos.";
	                }
					} else {

ob_end_flush() ?>

	</body>
</html>
<?php ob_start();
}  
  }  else {
        echo "Estas accediendo a una pagina restringida, para ver su contenido debes estar registrado.<br />
        <a href='../index.php'>Ingresar O Registrarse</a>";
    }
	
ob_end_flush() ?>
<?php
     //Varofonsel 2015 @Taringa
	include('../../acceso_db.php'); // incluímos los datos de acceso a la BD
if(isset($_SESSION['usuario_nombre'])) {
header("Location: ../../index.php");
} else {
	?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<link rel="stylesheet" href="../css/Estilos.css" type="text/css" />
	</head>
<body>
<? include ("../../pn_home.php"); ?>
    <?php
        if(isset($_POST['enviar'])) { // comprobamos que se han enviado los datos del formulario
            if(empty($_POST['usuario_nombre'])) {
                echo "No ha ingresado el usuario. <a href='javascript:history.back();'>Reintentar</a>";
            }else {
                $usuario_nombre = mysql_real_escape_string($_POST['usuario_nombre']);
                $usuario_nombre = trim($usuario_nombre);
                $sql = mysql_query("SELECT usuario_nombre, usuario_clave, usuario_email FROM usuarios WHERE usuario_nombre='".$usuario_nombre."'");
                if(mysql_num_rows($sql)) {
                    $row = mysql_fetch_assoc($sql);
                    $num_caracteres = "10"; // asignamos el número de caracteres que va a tener la nueva contraseña
                    $nueva_clave = substr(md5(rand()),0,$num_caracteres); // generamos una nueva contraseña de forma aleatoria
                    $usuario_nombre = $row['usuario_nombre'];
                    $usuario_clave = $nueva_clave; // la nueva contraseña que se enviará por correo al usuario
                    $usuario_clave2 = md5($usuario_clave); // encriptamos la nueva contraseña para guardarla en la BD
                    $usuario_email = $row['usuario_email'];
                    // actualizamos los datos (contraseña) del usuario que solicitó su contraseña
                    mysql_query("UPDATE usuarios SET usuario_clave='".$usuario_clave2."' WHERE usuario_nombre='".$usuario_nombre."'");
                    // Enviamos por email la nueva contraseña
                    $remite_nombre = "alling"; // Tu nombre o el de tu página
                    $remite_email = "tutos1859@gmail.com"; // tu correo
                    $asunto = "Recuperación de contraseña"; // Asunto (se puede cambiar)
                    $mensaje = "Se ha generado una nueva contraseña para el usuario <strong>".$usuario_nombre."</strong>. La nueva contraseña es: <strong>".$usuario_clave."</strong>.";
                    $cabeceras = "From: ".$remite_nombre." <".$remite_email.">\r\n";
                    $cabeceras = $cabeceras."Mime-Version: 1.0\n";
                    $cabeceras = $cabeceras."Content-Type: text/html";
                    $enviar_email = mail($usuario_email,$asunto,$mensaje,$cabeceras);
                    if($enviar_email) {
                        echo "La nueva contraseña ha sido enviada al email asociado al usuario ".$usuario_nombre.".";
                    }else {
                        echo "No se ha podido enviar el email. <a href='javascript:history.back();'>Reintentar</a>";
                    }
                }else {
                    echo "El usuario <strong>".$usuario_nombre."</strong> no está registrado. <a href='javascript:history.back();'>Reintentar</a>";
                }
            }
        }else {
    ?>
<br> </br></br></br>
	<div id="formulario">      
	  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label>Usuario:</label><br />
            <input type="text" name="usuario_nombre" /><br />
            <input type="submit" name="enviar" value="Enviar" />
        </form>
    </div>
	<?php
        }
		};
    ?> 
</body>
</html>
<?php ob_start();
     //Varofonsel 2015 @Taringa
	session_start();
    include('../../acceso_db.php');
    if(isset($_POST['enviar'])) { // comprobamos que se hayan enviado los datos del formulario
        // comprobamos que los campos usuarios_nombre y usuario_clave no estén vacíos
        if(empty($_POST['usuario_nombre']) || empty($_POST['usuario_clave'])) {
            echo "El usuario o la contraseña no han sido ingresados. <a href='javascript:history.back();'>Reintentar</a>";
        }else {
            // "limpiamos" los campos del formulario de posibles códigos maliciosos
          $usuario_nombre = mysql_real_escape_string($_POST['usuario_nombre']); 
		  $usuario_clave = mysql_real_escape_string($_POST['usuario_clave']);
		  $usuario_clave = md5($usuario_clave);
            // comprobamos que los datos ingresados en el formulario coincidan con los de la BD
            $sql = mysql_query("SELECT usuario_id, usuario_nombre, usuario_clave FROM usuarios WHERE usuario_nombre='".$usuario_nombre."' AND usuario_clave='".$usuario_clave."'");
            if($row = mysql_fetch_array($sql)) {
                $_SESSION['usuario_id'] = $row['usuario_id']; // creamos la sesion "usuario_id" y le asignamos como valor el campo usuario_id
                $_SESSION['usuario_nombre'] = $row["usuario_nombre"]; // creamos la sesion "usuario_nombre" y le asignamos como valor el campo usuario_nombre
                header("Location: ../../index.php");
            }else {
?>
                Error, <a href="login.php">Reintentar</a>
<?php
            }
        }
    }else {
        header("Location: ../../Home.php");
    }
ob_end_flush() ?>
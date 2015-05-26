<?php ob_start();
	 //Varofonsel 2015 @Taringa
	include('../../acceso_db.php'); // incluimos el archivo de conexión a la Base de Datos

	    if(isset($_POST['enviar'])) { // comprobamos que se han enviado los datos desde el formulario
	        // creamos una función que nos parmita validar el email
	        function valida_email($correo) {
	            if (preg_match('/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/', $correo)) return true;
	            else return false;
	        }
	             // Procedemos a comprobar que los campos del formulario no estén vacíos
	        $sin_espacios = count_chars($_POST['usuario_nombre'], 1);
	        if(!empty($sin_espacios[32])) { // comprobamos que el campo usuario_nombre no tenga espacios en blanco
	            echo "El campo <em>usuario_nombre</em> no debe contener espacios en blanco. <a href='javascript:history.back();'>Reintentar</a>";
	        }elseif(empty($_POST['usuario_nombre'])) { // comprobamos que el campo usuario_nombre no esté vacío
	            echo "No haz ingresado tu usuario. <a href='javascript:history.back();'>Reintentar</a>";
	        }elseif(empty($_POST['usuario_clave'])) { // comprobamos que el campo usuario_clave no esté vacío
	            echo "No haz ingresado contraseña. <a href='javascript:history.back();'>Reintentar</a>";
				}elseif(empty($_POST['fecha'])) { // comprobamos que el campo usuario_clave no esté vacío
	            echo "No haz ingresado tu año de nacimiento. <a href='javascript:history.back();'>Reintentar</a>";
				}elseif(empty($_POST['mes'])) { // comprobamos que el campo usuario_clave no esté vacío
	            echo "No haz ingresado tu mes de nacimiento. <a href='javascript:history.back();'>Reintentar</a>";
				}elseif(empty($_POST['dia'])) { // comprobamos que el campo usuario_clave no esté vacío
	            echo "No haz ingresado tu dia de nacimiento. <a href='javascript:history.back();'>Reintentar</a>";
				}elseif(empty($_POST['nombre'])) { // comprobamos que el campo usuario_clave no esté vacío
	            echo "No haz ingresado tu nombre. <a href='javascript:history.back();'>Reintentar</a>";
				}elseif(empty($_POST['apellido'])) { // comprobamos que el campo usuario_clave no esté vacío
	            echo "No haz ingresado tu apellido. <a href='javascript:history.back();'>Reintentar</a>";
				}elseif(empty($_POST['sexo'])) { // comprobamos que el campo usuario_clave no esté vacío
	            echo "No haz ingresado tu sexo. <a href='javascript:history.back();'>Reintentar</a>";
				}elseif(empty($_POST['pais'])) { // comprobamos que el campo usuario_clave no esté vacío
	            echo "No haz ingresado tu pais <a href='javascript:history.back();'>Reintentar</a>";
				}elseif($_POST['usuario_clave'] != $_POST['usuario_clave_conf']) { // comprobamos que las contraseñas ingresadas coincidan
	            echo "Las contraseñas ingresadas no coinciden. <a href='javascript:history.back();'>Reintentar</a>";
	        }elseif(!valida_email($_POST['usuario_email'])) { // validamos que el email ingresado sea correcto
	            echo "El email ingresado no es válido. <a href='javascript:history.back();'>Reintentar</a>";
	        }else {
	            // "limpiamos" los campos del formulario de posibles códigos maliciosos
	            $usuario_nombre = mysql_real_escape_string($_POST['usuario_nombre']);
	            $usuario_clave = mysql_real_escape_string($_POST['usuario_clave']);
	            $usuario_email = mysql_real_escape_string($_POST['usuario_email']);
	            $fecha = $_POST['fecha'];
				$mes = $_POST['mes'];
				$dia = $_POST['dia'];
				$nombre = $_POST['nombre'];
			    $apellido = $_POST['apellido'];
				$sexo = $_POST['sexo'];
				$pais = $_POST['pais'];
				$privacidad= Desactivar;
	            // comprobamos que el usuario ingresado no haya sido registrado antes
	            $sql = mysql_query("SELECT usuario_nombre FROM usuarios WHERE usuario_nombre='".$usuario_nombre."'");
	            if(mysql_num_rows($sql) > 0) {
	                echo "El nombre usuario elegido ya ha sido registrado anteriormente. <a href='javascript:history.back();'>Reintentar</a>";
	            }else {
	                $usuario_clave = md5($usuario_clave); // encriptamos la contraseña ingresada con md5
	                // ingresamos los datos a la BD
	                $reg= mysql_query("INSERT INTO usuarios (usuario_nombre, usuario_clave, usuario_email, fecha, mes, dia, nombre, apellido, sexo, pais) VALUES ('".$usuario_nombre."', '".$usuario_clave."', '".$usuario_email."', '".$fecha."', '".$mes."', '".$dia."', '".$nombre."', '".$apellido."', '".$sexo."', '".$pais."')");
	                if($reg) {

    		  echo"Datos ingresados correctamente,  <a href='login.php'>Entra</a>";
				
	                }else {
	                    echo "ha ocurrido un error y no se registraron los datos.";
	                }
	            }
	        }
	    }else {
	    }
ob_end_flush() ?>

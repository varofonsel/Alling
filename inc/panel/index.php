<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
	<link rel="stylesheet" href="http://localhost/alling/inc/panel/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="http://localhost/alling/inc/panel/font-awesome/css/font-awesome.css" >
	
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
    <![endif]-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript" ></script>
    <script src="http://localhost/alling/inc/panel/js/menu.js" type="text/javascript"></script> 

</head>
  
 <body>
 
 <div class="mainWrap">
 

 	
    <nav>
    <ul class="menu">
   <li><a href="http://localhost/alling/?=home&ref=menu"><i class="icon-home"></i>HOME</a>
   <ul class="sub-menu">
   <li><a href="http://localhost/alling/inc/tools/usuarios_registrados.php">Usuarios registrados</a></li>
   </ul>
   </li>
  <li><a  href="http://localhost/alling/inc/perfil.php?nombre=<?=$usuario_nombre;?>"><i class="icon-user"></i>TU PERFIL</a></li>
  <li><a  href="http://localhost/alling/inc/tools/fotoperfil/subir.php"><i class="icon-camera"></i>SUBIR FOTO DE PERFIL</a></li>
 
  <li><a  href="http://localhost/alling/inc/tools/configuracion.php"><i class="icon-bullhorn"></i>CONFIGURACION</a>
  <ul class="sub-menu">
   <li><a href="http://localhost/alling/inc/tools/configuracion.php?opcion=cambiar_contrasena">Cambiar contrasena</a></li>
      <li><a href="http://localhost/alling/inc/tools/configuracion.php?opcion=datos_secundarios">Agregar datos secundarios</a></li>
	   <li><a href="http://localhost/alling/inc/tools/configuracion.php?opcion=borrar_cuenta">Borrar tu cuenta</a></li>
   </ul>
   </li>
  <li><a  href="http://localhost/alling/inc/tools/mp/index.php"><i class="icon-envelope-alt"></i>MENSAJES</a></li>
  <li><a  href="http://localhost/alling/inc/tools/salir.php"></i>CERRAR SESION</a></li>
  </ul>
  </nav>
  
        
 </div><!--end mainWrap-->
 
</body>
</html>
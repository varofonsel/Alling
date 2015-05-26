<?  //Varofonsel 2015 @Taringa
if(isset($_SESSION['usuario_nombre'])) {
header("Location: ../../index.php");
} else {
?>
 <link rel="stylesheet" href="../css/Estilos.css" type="text/css" />
<body style="background:lightblue">
<div id="header">
</div>
<p>
</p>
<div id="formulario">
	<center>
	<div style="border: 1px double;  #000; padding: 1.2em;"> 
	<center>
	<h2> Login </h2>
	<form class="contact_form" action="login_alfa.php" method="post">
	            <label>Usuario:</label><br />
	            <input type="text" name="usuario_nombre" /><br />
	            <label>Contrasena:</label><br />
	            <input type="password" name="usuario_clave" /><br />
	            <a href="recuperar_contrasena.php">Recuperar contrasena</a><br />
	            <input type="submit" name="enviar" value="Ingresar" />
	        </form>   
		</form>
	<p>
 </div>
	</center>
  </div>
  </div>
 
  
  <p>
    <p>
  </p>
    </div>
	<?
	};
	?>
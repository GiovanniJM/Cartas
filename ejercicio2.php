<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Familiar 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20091206

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Examen de PHP</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="logo">
		<h1><a href="#">IMW - inform&aacute;tica</a></h1>
		<p><em>examen de PHP</em></p>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
				<li><a href="index.php" class="first">Inicio</a></li>
				<li><a href="ejercicio1.php">Ejercicio 1</a></li>
				<li class="current_page_item"><a href="ejercicio2.php">Ejercicio 2</a></li>
			</ul>
		</div>
		<!-- end #menu -->
		<div id="search">
			<form method="get" action="">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
				<input type="submit" id="search-submit" value="Buscar" />
				</fieldset>
			</form>
		</div>
		<!-- end #search -->
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">
		<div id="content">
		  <div class="post">
				<h2 class="title"><a href="#">Ejercicio 2 - Juega a contar las cartas</a></h2>
				<div class="entry">
				<form method="get" action="/jugar.php">
					<table align=center>
						<tr><td><b>Genera una cantidad de cartas</b>:</td><td><input type="text" name="cantidad"/> </td>
						</tr>
						<tr><td><center><b>Elige una paridad de cartas (par o impar)</b>:
						<td><input type="radio" name="cartas" value="1"/>Par 
						<input type="radio" name="cartas" value="2"/>Impar </td>
						</tr>
						<tr><td align=right></td><td><input type="submit" value="Jugar" id="search-submit"></td></tr>
					</table>
				</form>
					</p><br>
			</div>
		  </div>
			<div class="post">
				<h2 class="title"><a href="#">Instrucciones</a></h2>
				
				<div class="entry">
					<p>Modifica el c&oacute;digo de esta p&aacute;gina y de la p&aacute;gina <span class="azul">jugar.php</span> de manera que al pulsar el bot&oacute;n <strong><span class=azul>Jugar</span></strong>
					se redirijan los datos a <span class="azul">jugar.php</span> donde se realicen las siguientes validaciones 
					y en el orden que se especifica a continuaci&oacute;n: (5 puntos)</p>
					<ol>
						<li>Todos los datos de entrada son obligatorios.</li>
						<li>Se debe seleccionar una cantidad de cartas, que debe ser num&eacute;rica y positiva.</li>
						<li>Se debe seleccionar una paridad (par o impar).</li>
						<li>Realiza las validaciones con Javascript y en PHP (1,5 ptos)</li>
					</ol>
					<p>Adem&aacute;s tendremos en cuenta que:</p>
					<ul><li>En el caso de que no cumpla las validaciones se mostrar&aacute; un mensaje indicando al usuario TODOS los errores detallados.</li>
					<li>Si se introducen valores correctos se realizar&aacute; lo siguiente:
					<br/>
						<ol>
							<li>Presenta en pantalla la cantidad cartas indicado por el usuario</li>
							<li>Las im&aacute;genes de las cartas de tr&eacute;boles del 1 al 10, al azar. Se ecuentran en el directorio images (t1.svg, t2.svg, ..., t10.svg). (1,5 ptos)</li>
							<li>La cantidad de cartas de la paridad seleccionada por el usuario.</li>
							<li>Las cartas con dicha paridad de entre las mostradas anteriormente. (2 ptos)</li>
							</li>
						</ol>
					</li>
					<li>Ejemplo de resultado:<br/>
						<!--img src="images/t1.svg" alt="resultado" width="100"/-->
						<img src="images/resultado.png" alt="resultado" width="150%"/>
					</li>
					</ul>
					<p>NOTA: Para superar este ejercicio se debe validar correctamente, al menos en PHP, y se debe seguir el enunciado haciendo correctamente al menos el 50%. No uses funciones para arrays</p>
				</div>
				
			</div>
		</div><!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>Examen PHP</h2>
					
				</li>
				<li>
					<h2>Men&uacute; principal</h2>
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="ejercicio1.php">Ejercicio 1</a></li>
						<li><a href="ejercicio2.php">Ejercicio 2</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
	<div id="footer">
		<p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
	<!-- end #footer -->
</body>
</html>
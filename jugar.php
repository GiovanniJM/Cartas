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
				<li><a href="ejercicio2.php">Ejercicio 2</a></li>
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
				<h2 class="title"><a href="#">Registrar</a></h2>
				
				<div class="entry">
					<p>Resultado del ejercicio 2:<br/>
					<?php
					$errores=0;
					$msjError="";
					if( !isset($_GET["cantidad"]) || !is_numeric($_GET["cantidad"]) || $_GET["cantidad"] < 0){
						$errores ++;
						$msjError .= "ERROR: Debe seleccionar una cantidad de cartas positiva.<br/>";
					}
					if( !isset($_GET["cartas"]) || $_GET["cartas"] == ""){
						$errores ++;
						$msjError .= "ERROR: Debe seleccionar un tipo de cartas.<br/>";
					}
					if($errores == 0){
						$cantidad=$_GET["cantidad"];
						$cartas=$_GET["cartas"];
						$array1 = array();
						$array2 = array();
						$p=0;
						$ip=0;
						echo "Se han introducido $cantidad cartas.<br/>\n";
						for($i=0;$i<$cantidad;$i++){
							$a=mt_rand(1,10);
							if($a==1){
								echo "<img src='images/t1.svg' alt='1' height='100px'/>";
								$array2[$ip] = $a;
								$ip++;
							}
							else if($a==2){
								echo "<img src='images/t2.svg' alt='2' height='100px'/>";
								$array1[$p] = $a;
								$p++;
							}
							else if($a==3){
								echo "<img src='images/t3.svg' alt='3' height='100px'/>";
								$array2[$ip] = $a;
								$ip++;
							}
							else if($a==4){
								echo "<img src='images/t4.svg' alt='4' height='100px'/>";
								$array1[$p] = $a;
								$p++;
							}
							else if($a==5){
								echo "<img src='images/t5.svg' alt='5' height='100px'/>";
								$array2[$ip] = $a;
								$ip++;
							}
							else if($a==6){
								echo "<img src='images/t6.svg' alt='6' height='100px'/>";
								$array1[$p] = $a;
								$p++;
							}
							else if($a==7){
								echo "<img src='images/t7.svg' alt='7' height='100px'/>";
								$array2[$ip] = $a;
								$ip++;
							}
							else if($a==8){
								echo "<img src='images/t8.svg' alt='8' height='100px'/>";
								$array1[$p] = $a;
								$p++;
							}
							else if($a==9){
								echo "<img src='images/t9.svg' alt='9' height='100px'/>";
								$array2[$ip] = $a;
								$ip++;
							}else{
								echo "<img src='images/t10.svg' alt='10' height='100px'/>";
								$array1[$p] = $a;
								$p++;
							}
						}
						echo "<br/>\n";
						if($cartas==1){
						echo "Hay $p pares:<br/>\n";
						for($i=0;$i<$p;$i++){
							if($array1[$i]==2){
								echo "<img src='images/t2.svg' alt='2' height='100px'/>";
							}
							else if($array1[$i]==4){
								echo "<img src='images/t4.svg' alt='4' height='100px'/>";
							}
							else if($array1[$i]==6){
								echo "<img src='images/t6.svg' alt='6' height='100px'/>";
							}
							else if($array1[$i]==8){
								echo "<img src='images/t8.svg' alt='8' height='100px'/>";
							}
							else{
								echo "<img src='images/t10.svg' alt='10' height='100px'/>";
							}
						}
					}else{
						echo "Hay $ip impares:<br/>\n";
						for($i=0;$i<$ip;$i++){
							if($array2[$i]==1){
								echo "<img src='images/t1.svg' alt='1' height='100px'/>";
							}
							else if($array2[$i]==3){
								echo "<img src='images/t3.svg' alt='3' height='100px'/>";
							}
							else if($array2[$i]==5){
								echo "<img src='images/t5.svg' alt='5' height='100px'/>";
							}
							else if($array2[$i]==7){
								echo "<img src='images/t7.svg' alt='7' height='100px'/>";
							}
							else{
								echo "<img src='images/t9.svg' alt='9' height='100px'/>";
							}
						}
					}
					}else{
						echo "$msjError\n";
					}
					?>
				</p><p><a href="ejercicio2.php">Volver al enunciado del ejercicio 2</a></p>
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
						<li><a href="ejercicio1_ejemplo.php">&nbsp;&nbsp;&nbsp; * Ejercicio 1 - ejemplo</a></li>
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

				<div class="entry">
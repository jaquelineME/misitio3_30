<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 1 de Mel&eacute;ndez Jaqueline</h3>
				<article class="articulos">	
				<figure>
					<img src="imagenes/cod1.PNG" alt="">
				</figure>
					<h4>P1 Resultado del codigo</h4>
					<?php
						include "p6_melendez_30_php/ejercicio1.php";
					?>
					<h4>P1 Explicacion del codigo</h4>
					<p style="font-size: 13pt">
					En este codigo primero se declararon unas variables despues dentro de los if se evalua con la funcion is_numeric si dicha variable es de tipo numerico o no entonces ya dependiendo lo que salga se muestra un mensaje, si se evalua como verdadera se muestra el mensaje "contiene un número o cadena numérica" de lo contrario, siendo evaluada como falsa, muestra "NO contiene un número o cadena numérica".
					</p>
					<figure>
						<img src="imagenes/ejercicio1.PNG" alt="">
					</figure>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>
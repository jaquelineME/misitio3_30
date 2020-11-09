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
				<h3>Problema 3 de Mel&eacute;ndez Jaqueline</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/cod3.PNG" alt="">
					</figure>
					<h4>P3 Resultado del codigo</h4>
					<?php
						include "p6_melendez_30_php/ejercicio3.php";
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p style="font-size: 13pt">
					Lo que aqui se hace primero es en una variable metemos varios datos, en este caso de tipo texto, despues con un echo mostramos en pantalla "La cadena contiene...palabras" y es aqui donde se usa la funcion .str_word_count y hacemos que cuente las palabras que hay en la variable $nombres, la variable contiene 7 palabras/nombres por lo que en el echo nos muestra que "La cadena contiene [7] palabras".
					</p>
					<figure>
						<img src="imagenes/ejercicio3.PNG" alt="">
					</figure>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>
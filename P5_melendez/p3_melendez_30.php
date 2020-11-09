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
						include "p5_melendez_30_php/ejercicio3.php";
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p style="font-size: 13pt">
						En este codigo lo primero que hacemos es crear una funcion, dentro de la funcion creamos una variable pero esta tiene que ser estatica para que se pueda ir modificando el valor cuando se devuelve, dicha variable incrementara de uno en uno y luego con la instruccion echo se mostrara su valor en pantalla. Para que lo mostrara varias veces se llamo a la funcion varias veces, en este caso 4 por lo que en pantalla te muestra 4 numeros que son el valor de la variable. 
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
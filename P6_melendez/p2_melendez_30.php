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
				<h3>Problema 2 de Mel&eacute;ndez Jaqueline</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/cod2.PNG" alt="">
					</figure>
					<h4>P2 Resultado del codigo</h4>
					<?php
						include "p6_melendez_30_php/ejercicio2.php";
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p style="font-size: 13pt">
						En este codigo se crean dos arrays con varios datos dentro, despues Mediante la funcion array_merge() los unimos, el array resultante tendrá en primer lugar los elementos del primer array. El orden de los arrays se marca cuando se pasan como parámetros, y por ultimo con print_r se muestra en pantalla los datos introducidos a los dos primeros arrays pero solo llamando el array_merge.
					</p>
					<figure>
						<img src="imagenes/ejercicio2.PNG" alt="">
					</figure>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>
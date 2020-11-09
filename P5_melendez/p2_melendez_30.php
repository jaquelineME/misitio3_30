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
						include "p5_melendez_30_php/ejercicio2.php";
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p style="font-size: 13pt">
						Este codigo lo primero que hace es declarar una varibale y asignarle un valor en este caso su valor es "Miguel", despues con la instruccion echo imprime en la pantalla dos textos, en el primer echo nos muestra tambien el valor de la variable y en el segundo echo nos imprime un texto de despedida.
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
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
						include "p5_melendez_30_php/ejercicio1.php";
					?>
					<h4>P1 Explicacion del codigo</h4>
					<p style="font-size: 13pt">
					En la sentencia for lo que hace es imprimir los numeros del 0 al 4 ya que hasta ahi se cumple la condicion, el for de este codigo se puede explicar como: la variable i inicia con un valor 0 e incrementa de uno en uno hasta que valga 5, cuando i sea mayor que 5 se dejara de mostrar o imprimir numeros
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
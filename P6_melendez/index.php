<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ConstruWeb</title>
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
			<h3>Mis tres Ejercicios de PHP</h3>
			<article class="serv1">
				<h4>P1 preguntas y Respuestas</h4>
				<b>¿Cómo usar la función Is_Numeric()?</b>
				<p>La función is_numeric() en el lenguaje de programación PHP se utiliza para evaluar si un valor es un número o una cadena numérica.
				</p><br>
				<h4>Conclusiones </h4>
				<p>
				La funcion is_numerico() revisa si una cadena de texto es de tipo numerica o no. Por lo tanto, +234.5e6 es una cadena numérica válida. No se permiten las notaciones binarias y hexadecimales. Esta funcion se puede usar en un if para evaluar cierto si es de tipo numerico o falso si no es de tipo numerico.
				</p>
				<figure>
					<img src="imagenes/isnumeric.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P2 preguntas y Respuestas</h4>
				<b>¿Que hace la funcion array_merge()?</b>
				<p>Combina los elementos de uno o más arrays juntándolos de modo que los valores de uno se anexan al final del anterior. Retorna el array resultante.
				</p>
				<h4>Conclusiones </h4>
				<p>
				Esta funcion nos permite juntar varios arrays porque puede que nosotros hayamos creado varios arrays por diferentes razones, pues bueno una solucion para que a la hora de mostrarlos en pantalla no tengas que estar llamando cada uno de los arrays puedes unirlos con la funcion array_merge y solo llamar esa para mostrar entonces asi se mortara todos los datos.
				</p>
				<figure>
					<img src="imagenes/arraym.jpg" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P3 preguntas y Respuestas</h4>
				<b>¿Que hace la funcion .str_word_count?</b>
				<p>Devuelve el número de palabras en un string.Si no se especifica el valor formato la función devolverá un entero con el número de palabras, en caso contrario delvoverá un array asociativo dependiendo del formato elegido.  
				</p>
				<h4>Conclusiones </h4>
				<p>
				Esta funcion es interesante, no tiene mucha complicacion, la mandas llamar con una variable y te cuenta las palabras dentro de esta pero es importante aclarar que solo reconoce caracteres alfabéticos y no alfanuméricos, entonces si la palabra es an4re, lo contará como an y re, 2 palabras en vez de una.
				</p>
				<figure>
					<img src="imagenes/contar.jpg" alt="">
				</figure>
			</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>
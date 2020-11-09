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
				
				<p>
				¿Qué es lo que hace la instrucion echo()?
				Muestra mensajes o activa o desactiva la característica de repetición de comandos. Si se usa sin parámetros, echo muestra el valor de eco actual. 
				</p>
				<h4>Conclusiones </h4>
				<p>
				El echo imprime un texto en la pantalla, este se usa en el lenguaje PHP. Este pude imprimir tambien variables y varios textos a la vez. Echo imprimirá valores numéricos y variables sin necesidad de ninguna comilla, pero si hay más de un valor numérico o algo más aparte de la variable, tendremos una cadena, por lo que necesitaremos comillas.
				</p>
				<figure>
					<img src="imagenes/hola1.jpg" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P2 preguntas y Respuestas</h4>
				<p>¿Que es un SCRIPT?
				script en programación es un documento de texto donde colocamos instrucciones u órdenes que luego seran ejecutadas por un dispositivo inteligente.
				</p>
				<h4>Conclusiones </h4>
				<p>
				Los Scripts en programación son instrucciones que despues seran ejecutadas por un dispositivo inteligente, sea un ordenador, un móvil, etcétera El campo de aplicación de la programación es muy extenso. Dependiendo de lo que queramos hacer vamos a tener distintas herramientas para escribir Scripts y estos estarán en distintos formatos.
				</p>
				<figure>
					<img src="imagenes/script.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P3 preguntas y Respuestas</h4>
				<p>
				Variable estatica: 
				Una variable estática existe sólo en el ámbito local de la función, pero no pierde su valor cuando la ejecución del programa abandona este ámbito.  
				</p>
				<h4>Conclusiones </h4>
				<p>
				Las variables estáticas, a diferencia de las globales (aquellas que se pueden usar desde cualquier funcion), su ámbito está limitado a la función, es decir solo se podra usar en dicha funcion. Sin embargo, el valor de dichas variables se conserva entre distintas invocaciones a la función. 
				</p>
				<figure>
					<img src="imagenes/variable.png" alt="">
				</figure>
			</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>
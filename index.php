<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Bienvenidos! al Cbtis No 128</h1>
			</div>

			<div class="articulo">
				<article>
					<b>Descripcion de problema 1</b>
					<p> Arreglo indexado – Informe de notas: Se tenia que implementar una aplicación web con PHP que permita generar un informe de notas.<br>
					Teniamos que tomar en cuenta que al presionar el boton "Mostrar resumen" se debia mostrar el Total de alumnos registrados, Total de alumnos aprobados, Total de alumnos desaprobados, nombre del alumno con mayor promedio y nombre del alumno con menor promedio, y para poder llegar a ese resultado utilizamos varias funciones.<br>
					Un array es una variable en la que podemos guardar varios datos o variables agrupados a la vez. Una diferencia con javascript es que en PHP los arrays pueden ser indexados o asociativos, mientras que en javascript todos son indexados.<br></p>
					<br/>
					<img src="imagenes/arreglo.png" weight="200px" height="200px">
					<br/>
					<br/>
					<br/>
					<b>Descripcion de problema 2</b>
					<p>La funcion sqrt: La función sqrt(), se emplea par obtener la raíz cuadrada  del valor que recibe como argumento. La sintaxis general es la siguiente:<br>$raiz = sqrt($valor);<br></p>
					<br/>
					<img src="imagenes/raiz.jpg" weight="150px" height="150px">
					<br/>
					<br/>
					<br/>
					<b>Descripcion de problema 3</b>
					<p>Animdamiento de bucle while: Se le llama así cuando dentro de la estructura while se implementa otro while, de tal manera que trabajan en comunión para la muestra de sus resultados<br>
					Un bucle anidado es un bucle que se encuentra incluido en el bloque de sentencias de otro bloque. Los bucles pueden tener cualquier nivel de anidamiento (un bucle dentro de otro bucle dentro de un tercero, etc.).<br>
					Al bucle que se encuentra dentro del otro se le puede denominar bucle interior o bucle interno. El otro bucle sería el bucle exterior o bucle externo.<br>
					En los bucles anidados es importante utilizar variables de control distintas, para no obtener resultados inesperados.</p>
					<br/>
					<img src="imagenes/anidado.png" weight="500px" height="500px">

				</article>
			</div>
		<!-- {El archivo siderbar.php dentro de miplantilla} -->
		<?php include('miplantilla/sidebar.php');?> 

		</div>
	</section>
	<!-- {El archivo footer.php dentro de miplantilla} -->
	<?php include('miplantilla/footer.php');?> 
</body>
</html>
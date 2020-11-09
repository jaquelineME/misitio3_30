<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Problema 2</h1>
			</div>

			<div class="articulo">
				<article>
                <form action="problema2.php" method="POST">
				<p>Ingresa un numero: <input type="number" id="num" name="num" placeholders="Inserta un numero"/>
				<input type="submit" value="Enviar"/></p>
				</form>
				
				<?php
				if (isset ($_POST["num"])){

				$CampoTexto = $_POST['num'];
				echo 'La raíz cuadrada de '.$CampoTexto .' es: '.sqrt($CampoTexto);

				}
				else{
					$CampoTexto= NULL;
				}
				?>
                                    
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
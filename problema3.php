<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Problema 3</h1>
			</div>

			<div class="articulo">
				<article>
                <?php
                    $n=10;
                    $i=1;
                    while($i <= $n){
                        $j=1;
                        while($j <= $i){
                            echo $i.' ';
                            $j++;
                        }
                        echo '<br>';
                        $i++;
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
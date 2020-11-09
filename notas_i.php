<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->

<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Problema 1</h1>
			</div>

			<div class="articulo">
				<article>
                <?php
 //Defi nición de los arreglos
 $alumnos = getAlumnos();
 $promedios = getPromedios();
 ?>
 <header>
 <h2 id="centrado">Informe de Notas - Indexado</h2>
 </header>
 <section>
 <form action="notas_i.php" method="POST">
 <table border="0" width="700" cellspacing="0" cellpadding="5">
 <tr>
 <th width="10">N° Orden</th>
 <th>Alumno</th>
 <th>Promedio</th>
 </tr>
 <?php
 //Imprimir
 for($i=0;$i<getTotal();$i++){
 ?>
 <tr>
 <td id="centrado"><?php echo $i+1; ?></td>
 <td><?php echo $alumnos[$i]; ?></td>
 <td id="centrado"><?php echo $promedios[$i]; ?></td>
 </tr>
 <?php } ?>
 <tr>
 <td><input type="submit" value="MOSTRAR RESUMEN"
 name="btnMostrar"/>
 </td>
 <td></td>
 <td></td>
 </tr>
 </table>
 </form>
 <?php
 //Total de aprobados y desaprobados
 list($tAprobados,$tDesaprobados)=totalAprobados_Desaprobados();
 //Condicionar la muestra de los resultados
 if(isset($_POST["btnMostrar"])){
 ?>
 <table border="1" width="700" cellspacing="0" cellpadding="5">
 <tr>
 <th>Total de alumnos</th>
 <th>Total de aprobados</th>
 <th>Total de desaprobados</th>
 </tr>
 <tr>
 <td id="centrado"><?php echo getTotal(); ?></td>
 <td id="centrado"><?php echo $tAprobados; ?></td>

 <td id="centrado"><?php echo $tDesaprobados; ?></td>
 </tr>
 </table>
 <?php
 //Obtener el mayor y menor elemento
 list($maximo,$minimo) = valor_maximo_minimo();
 //Obtener el índice del mayor y menor elemento
 list($maIndice,$miIndice) = indice_maximo_minimo();
 ?>
 <br />
 <table border="1" width="700" cellspacing="0" cellpadding="5">
 <tr>
 <th>Alumno con mayor promedio</th>
 <th>Alumno con menor promedio</th>
 </tr>
 <tr>
 <td id="centrado"><?php echo getAlumnos()[$maIndice].
 '('.$maximo.')'; ?></td>
 <td id="centrado"><?php echo getAlumnos()[$miIndice].
 '('.$minimo.')'; ?></td>
 </tr>
 </table>
 <?php } ?>
 </section>
 </body>
</html>
<?php
 //Función de implementación para el arreglo indexado de alumnos
 function getAlumnos() {
 return array('Luz Lázaro','Ángela Torres',
 'Fernanda Lázaro','Manuel Torres',
 'Lucero Mendoza','Alejandra Menor',
 'Victoria Bautista','Francisco Malaver');
 }

 //Función de implementación para el arreglo de notas
 function getPromedios() {
 return array(17,18,20,19,14,16,12,11);
 }

 //Función que determina el total de alumnos
 function getTotal(){
 return count(getAlumnos());
 }

 //Función que determina el total de aprobados y desaprobados
 function totalAprobados_Desaprobados(){
 $tAprobados = 0;
 $tDesaprobados = 0;
 for($i=0;$i<getTotal();$i++){
 if (getPromedios()[$i]<13)
 $tDesaprobados++;
 else
 $tAprobados++;
 }
 return array($tAprobados,$tDesaprobados);
 }

  //Determinar el maximo y menor promedio
  function valor_maximo_minimo(){
    $maximo = max(getPromedios());
    $minimo = min(getPromedios());
    return array($maximo,$minimo);
    }
   
    //Determinar el índice del mayor y menor promedio
    function indice_maximo_minimo(){
    list($maximo,$minimo)= valor_maximo_minimo();
    $maIndice = array_search($maximo, getPromedios());
    $miIndice = array_search($minimo, getPromedios());
    return array($maIndice,$miIndice);
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
<!-- Manual de PHP -->  
<html>  
<head>     
<title>Ejemplo de PHP</title>  
</head>  
<body>  
<?php
     printf("El numero dos con diferentes formatos: %d %f %.2f <br>",2,2,2);  
?>
<?php
     $var="texto";
     $num=3;     
     printf("Puede fácilmente intercalar <b>%s</b> con números <b>%d</b> <br>",$var,$num);     
     printf("<TABLE BORDER=1 CELLPADDING=20>");     
     for ($i=0;$i<5;$i++)     
     {        
         printf("<tr><td>%10.d</td></tr>",$i);     
     }     
     printf("</table>");  
?>
</body> 
<h2>Mel&eacute;ndez Escobedo Jaqueline 5-J</h2>  
</html>
<?php
    $var1  = 33;
    $var2  = "33";
    $var3  = "33 44";
    $var4  = "33.44";
    $var5  = "33,44";
    $var6  = 33.44;
    if( is_numeric($var1) == true )
        echo "'var1' contiene un número o cadena numérica<br/>";
    else
        echo "'var1' NO contiene un número o cadena numérica<br/>";
    if( is_numeric($var2) == true )
        echo "'var2' contiene un número o cadena numérica<br/>";
    else
        echo "'var2' NO contiene un número o cadena numérica<br/>";
    if( is_numeric($var3) == true )
        echo "'var3' contiene un número o cadena numérica<br/>";
    else
        echo "'var3' NO contiene un número o cadena numérica<br/>";
    if( is_numeric($var4) == true )
        echo "'var4' contiene un número o cadena numérica<br/>";
    else
        echo "'var4' NO contiene un número o cadena numérica<br/>";
    if( is_numeric($var5) == true )
        echo "'var5' contiene un número o cadena numérica<br/>";
    else
        echo "'var5' NO contiene un número o cadena numérica<br/>";
    if( is_numeric($var6) == true )
        echo "'var6' contiene un número o cadena numérica<br/>";
    else
        echo "'var6' NO contiene un número o cadena numérica<br/>";
    echo "----------------<br/>";
    echo "Fin del ejemplo.";
     
?>

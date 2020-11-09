<?php
    $aDias1 = array("Lunes", "Martes", "Miércoles");
    $aDias2 = array("Jueves", "Viernes", "Sábado", "Domingo");
     $aDias = array_merge( $aDias1, $aDias2 );
    /* El array queda: "Lunes", "Martes", "Miércoles", 
    "Jueves", "Viernes", "Sábado", "Domingo" */
    print_r( $aDias );
?>
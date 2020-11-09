<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    function incrementaVariable(){
        static $contador=0;
        $contador++;
        echo $contador . "<br>";
    }
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    ?>
</body>
<h2>Mel&eacute;ndez Escobedo Jaqueline 5-J</h2> 
</html>
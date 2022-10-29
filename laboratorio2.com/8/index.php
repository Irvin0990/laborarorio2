<?php
/* Tres personas deciden invertir su dinero para fundar una empresa. Cada una de ellas 
invierte una cantidad distinta. Obtener el porcentaje que cada quien invierte con respecto a 
la cantidad total invertida */

$persona1 = $_GET["persona1"];
$persona2 = $_GET["persona2"];
$persona3 = $_GET["persona3"];
$cantidadinvertida = $persona1 + $persona2 + $persona3;
$porp1 = ($persona1 / $cantidadinvertida)* 100;
$porp2 = ($persona2 / $cantidadinvertida)* 100;
$porp3 = ($persona3 / $cantidadinvertida)* 100;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    La cantidad invertida es: <?php echo $cantidadinvertida?><br>
    La cantidad invertida por la primera persona: <?php echo $persona1?> dolares<br>
    El porcentaje invertido de l primera persona es: <?php echo $porp1?> %<br>
    La cantidad invertida por la segunda persona: <?php echo $persona2?> dolares<br>
    El porcentaje invertido de la segunda persona es: <?php echo $porp2?> %<br>
    La cantidad invertida por la tercera persona: <?php echo $persona3?> dolares<br>
    El porcentaje invertido de la tercera persona es: <?php echo $porp3?> %<br>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
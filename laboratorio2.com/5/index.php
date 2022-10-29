<?php
/* Dado el nombre y 5 calificaciones de un alumno; construya un programa en PHP + HTML
que imprima el nombre del alumno y el promedio de sus calificaciones. */
$nombre = $_GET['nombre'];
$c1 = $_GET["c1"];
$c2 = $_GET["c2"];
$c3 = $_GET["c3"];
$c4 = $_GET["c4"];
$c5 = $_GET["c5"];
$prom = ($c1 + $c2 + $c3 + $c4 + $c5) /5;

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
    Su nombre es: <?php echo $nombre?><br>
    Sus calificaciones son<br>
    Calificacion 1: <?php echo $c1?><br>
    Calificacion 2: <?php echo $c2?><br>
    Calificacion 3: <?php echo $c3?><br>
    Calificacion 4: <?php echo $c4?><br>
    Calificacion 5: <?php echo $c5?><br>
    El promedio de sus calificaciones es: <?php echo round($prom,1)?><br>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
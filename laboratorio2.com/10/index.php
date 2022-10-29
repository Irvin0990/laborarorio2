<?php
/* Escriba un programa donde se ingrese el tiempo necesario para un cierto proceso en 
horas, minutos y segundos. Se calcule el costo total del proceso sabiendo que el costo por 
segundo es B/.0.25. */

$hr = $_GET["hr"];
$mn = $_GET["mn"];
$sg = $_GET["sg"];
$th = $hr * 3600;
$tm = $mn * 60;
$ts = $sg * 1;
$tt = ($th + $tm + $ts) * .25;

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
    El Costo es: <?php echo $tt?><br>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
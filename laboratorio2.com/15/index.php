<?php
/* El banco “Pueblo desconocido” ha decidido aumentar el límite de crédito de las tarjetas de 
crédito de sus clientes, para esto considera que si su cliente tiene tarjeta tipo 1, el aumento 
será de 25 %; si tiene tipo 2, será de 35 %; si tiene tipo 3, de 40 %, y para cualquier otro 
tipo, de 50 %. Realice un Programa en PHP + HTML para determinar el nuevo límite de 
crédito que tendrá una persona en su tarjeta.*/

$c = $_GET["c"];
                switch ($c) {
                    case 1:
                        echo "<h3>Aumento de 25%</h3>";
                        break;
                    case 2:
                        echo "<h3>Aumento de 35%</h3>";
                        break;
                    case 3:
                        echo "<h3>Aumento de 40%</h3>";
                        break;
                    default:
                        echo "<h3>Aumento de 50%</h3>";
                        break;
                }
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>               
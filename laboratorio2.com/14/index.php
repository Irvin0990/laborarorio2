<?php
/* Se les dará un bono por antigüedad a los empleados de una tienda. Si tienen un año, se les 
dará $100; si tienen 2 años, $200, y así sucesivamente hasta los 5 años. Para los que 
tengan más de 5, el bono será de $1000. Realice un Programa en PHP + HTML que 
permita determinar el bono que recibirá un trabajador */

$an = $_GET["an"];
                if ($anios == 1) {
                    echo "<h3>El bono de 100$</h3>";
                } else if ($an == 2) {
                    echo "<h3>El bono de 200$</h3>";
                } else if ($an == 3) {
                    echo "<h3>El bono de 300$</h3>";
                } else if ($an == 4) {
                    echo "<h3>El bono de 400$</h3>";
                } else if ($an == 5) {
                    echo "<h3>El bono de 500$</h3>";
                } else {
                    echo "<h3>El bono de 1000$</h3>";
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
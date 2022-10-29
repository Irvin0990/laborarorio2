<?php
/* Un alumno desea saber cuál será su calificación final en la materia de Algoritmos. Dicha 
calificación se compone de los siguientes porcentajes:
55% del promedio de sus tres calificaciones parciales.
30% de la calificación del examen final.
15% de la calificación de un trabajo final.
Generar una tabla html con los resultados */
$c1 = $_GET["c1"];
$c2 = $_GET["c2"];
$c3 = $_GET["c3"];
$examfin = $_GET["examfin"];
$trabfin = $_GET["trabfin"];
$prompar = ($c1 + $c2 + $c3 /3) * 0.55;
$promefinal = $examfin * 0.3;
$promtfinal = $trabfin * 0.15;
$notafinal = $prompar + $promefinal +$promtfinal;
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
    <div class="container-sm">
        <table class="table table-dark table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Nota 1</th>
                    <th scope="col">Nota 2</th>
                    <th scope="col">Nota 3</th>
                    <th scope="col">Examen final</th>
                    <th scope="col">Trabajo final</th>
                    <th scope="col">Nota final</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $c1?></th>
                    <td><?php echo $c2?></td>
                    <td><?php echo $c3?></td>
                    <td><?php echo $examfin?></td>
                    <td><?php echo $trabfin?></td>
                    <td><?php echo $notafinal?></td>
                    
                </tr>
               
            </tbody>
        </table>
        
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
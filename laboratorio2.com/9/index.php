<?php
/*Se pide crear un algoritmo que calcule el porcentaje de alumnos y alumnas de un salón de 
clase.
Por ejemplo, si hay 25 alumnos y 20 alumnas la salida debe ser:
Porcentaje de alumnos: (25/45)*100 = 55.55555%
Porcentaje de alumnas: (20/45)*100 = 44.44444%
Generar una tabla html con los resultados
 */
$eh = $_GET["eh"];
$em = $_GET["em"];



$et = $eh + $em;
$ph = ($eh/$et)*100;
$pm = ($em/$et)*100;

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
                    <th scope="col">Estudiantes totales</th>
                    <th scope="col">Total de hombres</th>
                    <th scope="col">Total de mujeres</th>
                    <th scope="col">Porcentaje de hombres</th>
                    <th scope="col">Porcentaje de mujeres</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $et?></th>
                    <td><?php echo $eh?></td>
                    <td><?php echo $em?></td>
                    <td><?php echo $ph?></td>
                    <td><?php echo $pm?></td>
                </tr>
               
            </tbody>
        </table>
        
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
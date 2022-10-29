<?php
/* En un hospital existen tres áreas: Ginecología, Pediatría, Traumatologia. El presupuesto 
anual del hospital se reparte conforme a la sig. tabla:
Área Porcentaje del presupuesto
Ginecología 40%
Traumatología 30%
Pediatría 30%
Generar una tabla html con los resultados
Obtener la cantidad de dinero que recibirá cada área, para cualquier monto presupuestal. */
$presupuestofinal = $_GET["presupuestofinal"];



$ginecologia = $presupuestofinal * 0.4;
$traumatologia = $presupuestofinal * 0.3;
$pediatria = $presupuestofinal * 0.3;

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
                    <th scope="col">Presupuesto total</th>
                    <th scope="col">Presupuesto para Ginecología</th>
                    <th scope="col">Presupuesto para Traumatología</th>
                    <th scope="col">Presupuesto para Pediatría</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $presupuestofinal?></th>
                    <td><?php echo $ginecologia?></td>
                    <td><?php echo $traumatologia?></td>
                    <td><?php echo $pediatria?></td>
                   
                    
                </tr>
               
            </tbody>
        </table>
        
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
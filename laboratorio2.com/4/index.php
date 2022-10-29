<?php
/* Elaborar un programa en PHP + HTML que permita calcular el salario neto de un 
trabajador en función del número de horas trabajadas, pago por hora de trabajo y un 
descuento fijo al sueldo bruto del 20% (este valor es una constante). Los cálculos a 
efectuar para obtener el salario neto de un trabajador se muestran a continuación: 
SalarioBruto = HorasTrabajadas * PagoPorHora
Descuento = 0.2 * SalarioBruto 
SalarioNeto = SalarioBruto – Descuento */
$horastrabajadas = $_GET["horastrabajadas"];
$pagoporhora = $_GET["pagoporhora"];
$salariobruto = $horastrabajadas * $pagoporhora;
$descuento = 0.2 * $salariobruto;
$salarioneto = $salariobruto - $descuento;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema4</title>
</head>
<body>
    El salario bruto es: <?php echo round($salariobruto,2)?><br>
    El descuento que se ejecuta es: <?php echo round($descuento,2)?><br>
    El salario neto es: <?php echo round($salarioneto,2)?><br>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
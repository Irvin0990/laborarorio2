<?php
/* Crear un archivo que con valores generados al azar con 10 filas por la función rand() de php. 
Los gráficos se deben mostrar con progress bar de html5
 */
if (isset($_GET["num"])) {
    $num = $_GET["num"];
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
<div class="login-box2">
        <h2>Problema 19</h2>
        <table class="table table-dark table-striped">
            <tr>
                <th style="text-align: center;">Numero</th>
                <th style="text-align: center;">Porcentaje</th>
                <th style="text-align: center;">Encriptado</th>
                <th style="text-align: center;">Ver</th>
                <th style="text-align: center;">Modal</th>
            </tr>
            <?php
            for ($i = 1; $i <= 100; $i++) {
                $aleatorio = rand (0,100);
                $color = "";
                if($aleatorio < 61)
                    $color = "secondary";
                elseif($aleatorio <=70)
                    $color = "danger";
                elseif($aleatorio <=80)
                    $color = "warning";
                elseif($aleatorio <=90)
                    $color = "info";
                else
                    $color = "success";     
                echo "<tr>
            <th><h3 style='text-align: center;'>$i</h3></th>"; ?>
            <th>
                    <div class="progress">
                        <div class="progress-bar bg-<?php echo $color?> progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $aleatorio?>%;" aria-valuenow="<?php echo $aleatorio?>" aria-valuemin="0" aria-valuemax="100"><?php echo $aleatorio?>%</div>
                    </div>
                </th>
            <?php
              ECHO "
            <th><h3 style='text-align: center;'>" . md5($i) . "</h3></th>
            <th><h3 style='text-align: center;'><a href='cifrado.php?num=" . $i . "' style='text-decoration:none'><button type='button' class='btn btn-light'>Ver</button></a></h3></th>";
            ?>
                <th>
                    <h3 style="text-align: center;">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $i ?>">
                            Ver
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog        ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">El cifrado de <?php echo $i ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>
                                            <?php
                                                echo md5($i);
                                            ?>
                                            </h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </h3>
                </th>
            <?php echo "</tr>";
            }
            ?>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
        <label for="segundos">Qual total de segundos?</label>
        <input type="number" name="segundos" id="segundos">
        <input type="submit" value="Calcular">

            <?php 
                $segundosTotal = $_REQUEST['segundos'] ?? 1;

                function calcSegundosTot($segundosTotal) {
                    $segundos = $segundosTotal % 60;
                    $minutos = ($segundosTotal / 60) % 60;
                    $horas = ($segundosTotal / 3600) % 24;
                    $dias = ($segundosTotal / 86400) % 7;
                    $semana = ($segundosTotal / 604800) % 4;
                    $mes = floor(($segundosTotal / 86400) / 30);

                    return[
                        'segundos' => $segundos,
                        'minutos' => $minutos,
                        'horas' => $horas,
                        'dias' => $dias,
                        'semana' => $semana,
                        'mes' => $mes
                    ];
                    
                }
                $resultado = calcSegundosTot($segundosTotal);
                //var_dump($resultado);

                echo "<ul>". 
                    "<li> Quantidade de segundos é de <strong>".$resultado['segundos']."</strong></li>".
                    "<li> Quantidade de minutos é de <strong>".$resultado['minutos']."</strong></li>".
                    "<li> Quantidade de horas é de <strong>".$resultado['horas']."</strong></li>".
                    "<li> Quantidade de dias é de <strong>".$resultado['dias']."</strong></li>".
                    "<li> Quantidade de semanas é de <strong>".$resultado['semana']."</strong></li>".
                    "<li> Quantidade de meses é de <strong>".$resultado['mes']."</strong></li>".
                    "</ul>";


            ?>

        </form>
    </main>
    
</body>
</html>
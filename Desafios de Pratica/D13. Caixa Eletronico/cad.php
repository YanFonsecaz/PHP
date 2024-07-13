<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletronico</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main>
        <h1>Caixa Eletronico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="valor">Qual valor voce deseja Sacar?(R$)</label>
            <input type="number" name="valor" id="valor">
            <input type="submit" value="Sacar">

            <?php

            function calcularNotas($valor)
            {

                $notas100 = 0;
                $notas50 = 0;
                $notas10 = 0;
                $notas5 = 0;


                if ($valor >= 100) {
                    $notas100 = floor($valor / 100);
                    $valor = $valor % 100;
                }


                if ($valor >= 50) {
                    $notas50 = floor($valor / 50);
                    $valor = $valor % 50;
                }


                if ($valor >= 10) {
                    $notas10 = floor($valor / 10);
                    $valor = $valor % 10;
                }


                if ($valor >= 5) {
                    $notas5 = floor($valor / 5);
                    $valor = $valor % 5;
                }


                return [
                    'notas100' => $notas100,
                    'notas50' => $notas50,
                    'notas10' => $notas10,
                    'notas5' => $notas5,
                ];
            }


            $resultado = calcularNotas($_REQUEST['valor'] ?? 1);

            echo "Para sacar R$" . ($_REQUEST['valor'] ?? 1) . ", são necessárias:<br>";
            echo "{$resultado['notas100']} notas de 100 reais<br>";
            echo "{$resultado['notas50']} notas de 50 reais<br>";
            echo "{$resultado['notas10']} notas de 10 reais<br>";
            echo "{$resultado['notas5']} notas de 5 reais<br>";
            ?>

        </form>
    </main>
</body>

</html>
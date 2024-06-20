<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Quadrada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valorRaiz = $_REQUEST["numero"] ?? 0;
    ?>
    <main>
        <h1>Descubra a Raiz Quadrada</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <label for="Numero">Digite um número:</label>
        <input type="number" name="numero" id="idnumero">
        <button type="submit" nome="calcular">Calcular</button>
        </form>
        <?php
                $raizQuadrada = sqrt($valorRaiz);
                $raizCubica = $valorRaiz ** (1/3);
                if($valorRaiz > 0){ 
                echo "Analisando o Valor <strong>$valorRaiz</strong>";
                echo "<br>A sua Raiz Quadrada é <strong>". number_format($raizQuadrada,4,".",",") . "</strong>";
                echo "<br>A sua Raiz Cubica é <strong>". number_format($raizCubica,4,".",",") . "</strong>";
                }
            ?>
    </main>

</body>
</html>
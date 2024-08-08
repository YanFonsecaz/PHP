<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        
        $valor1 = $_REQUEST['v1'] ?? 0;
        $valor2 = $_REQUEST['v2'] ?? 0;
        
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="idv1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="idv2" value="<?$valor2?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="Resultado">
        <h2>Resultado da soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "A soma dos valores <strong>$valor1</strong>  e <strong>$valor2</strong> é: <strong>$soma</strong>";
        ?>

    </section>
</body>
</html>
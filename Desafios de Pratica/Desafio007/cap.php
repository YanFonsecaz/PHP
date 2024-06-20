<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converso de salario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salarioValor = $_REQUEST['salario'] ?? 00;
    ?>
    <main>
        <h1>Informe seu salario</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="salario">Salario</label>
            <input type="number" name="salario" id="idsalario" step="0.001">
            <button type="submit" name="Calcular">Calcular</button>
            <?php 
                $padraoSalario = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                $salarioMinimo = 1412;
                $salarioQtd = (int)($salarioValor / $salarioMinimo);
                $salarioResto = abs(($salarioMinimo * $salarioQtd) - $salarioValor);
                
                
                echo "Quem recebe um salario de ". numfmt_format_currency($padraoSalario,$salarioValor,"BRL") . "<strong> ganha $salarioQtd salarios minimos + </strong>" .  numfmt_format_currency($padraoSalario,$salarioResto,"BRL");
            ?>
        </form>
    </main>
</body>
</html>
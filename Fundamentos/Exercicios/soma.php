<?php 
    $valor1 = filter_input(INPUT_GET, 'valor1', FILTER_VALIDATE_INT);
    $valor1 = (int) ($valor1 ?? 0);
    $valor2 = filter_input(INPUT_GET, 'valor2', FILTER_VALIDATE_INT);
    $valor2 = (int) ($valor2 ?? 0);
    $resultado = $valor1 + $valor2;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Calculadora de Soma</title>
</head>
<body>
    <header>
        <h1>Mini Calculadora de Soma</h1>
    </header>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
            <label for="valor1">Digite o primeiro valor</label>
            <input type="number" name="valor1" id="valor1">
            <label for="valor2">Digite o segundo valor</label>
            <input type="number" name="valor2" id="valor2">
            <input type="submit" value="soma" name="somar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            if($resultado != 0){
                echo "A soma de <strong>$valor1</strong> e <strong>$valor2</strong> é igual a <strong>$resultado</strong>.";
            }
        ?>
    </section>
</body>
</html>
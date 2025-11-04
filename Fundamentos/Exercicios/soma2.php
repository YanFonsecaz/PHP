<?php 
    $valor1 = 0;
    $valor2 = 0;
    $resultado = 0;
    $clickButton = false;

    if(isset($_GET['somar'])){

        $clickButton = true;
        $valor1 = filter_input(INPUT_GET, 'valor1', FILTER_VALIDATE_INT) ?? 0;
        $valor2 = filter_input(INPUT_GET, 'valor2', FILTER_VALIDATE_INT) ?? 0;
        $resultado = $valor1 + $valor2;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Calculadora de Soma</title>
</head>
<body>
    <h1>Mini Calculadora de Somar</h1>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
            <label for="valor1">Digite o primeiro valor</label>
            <input type="number" name="valor1" id="valor1">
            <label for="valor2">Digite o segundos valor</label>
            <input type="number" name="valor2" id="valor2">
            <input type="submit" value="somar" name="somar">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            if ($clickButton) {
                echo "A soma de <strong>". htmlspecialchars($valor1, ENT_QUOTES, 'UTF-8'). "</strong> e <strong>". htmlspecialchars($valor2, ENT_QUOTES, 'UTF-8') . "</strong> é igual a <strong>". htmlspecialchars($resultado, ENT_QUOTES, 'UTF-8')."</strong>";
            }
        ?>
    </section>
</body>
</html>
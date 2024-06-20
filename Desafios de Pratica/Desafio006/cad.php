<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_REQUEST['dividendo'] ?? 0;
        $divisor = $_REQUEST['divisor'] ?? 0;
    ?>
    <main>
        <h1>Divisao</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get"> 
        <label for="Dividendo">Dividendo</label>
        <input type="number" name="dividendo" id="iddividendo">
        <label for="Divisor">Divisor</label>
        <input type="number" name="divisor" id="iddivisor">
        <input type="submit" value="Calcular">
        </form>
        
    </main>
        <section id="Resultado">
            <?php
            if($dividendo >= 1 || $divisor >= 1){
            $resultado = (int)($dividendo / $divisor);
            $resto = $dividendo % $divisor;
            echo "O resultado da divisao entre $dividendo e $divisor é: $resultado e o seu resto é: $resto";
            }
            ?>
        </section>
</body>
</html>
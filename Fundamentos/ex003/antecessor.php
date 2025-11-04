<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descobrindo Antecessor</title>
</head>

<body>
    <?php
    $valor = filter_input(INPUT_GET, "valor", FILTER_SANITIZE_NUMBER_INT);
    $valor = (int)($valor ?? 0);
    ?>
    <h1>Descobrindo Antecessor</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="valor">Valor</label>
        <input type="number" name="valor" id="idvalor">
        <input type="submit" value="Descobrir Antecessor">
    </form>
    <section>
        <?php 
            if ($valor == 0) {
                echo "digite um valor maior que 0";
            } else {
                echo "O Antecessor é " . ($valor - 1) . " e o Sucessor é " . ($valor + 1);
            }
        ?>
    </section>
</body>

</html>
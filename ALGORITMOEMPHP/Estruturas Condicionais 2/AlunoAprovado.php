<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media de Aluno</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="nota1">Primeira Nota</label>
        <input type="number" name="nota1" id="nota1" step="0.10">
        <label for="nota2">Segunda Nota</label>
        <input type="number" name="nota2" id="nota2" step="0.10">
        <button type="submit">Calcular Nota</button>

        <?php
        $nota1 = $_REQUEST['nota1'] ?? 0;
        $nota2 = $_REQUEST['nota2'] ?? 0;
        $media = ($nota1 + $nota2) / 2;

        if ($media >= 7) {
            echo "Sua nota foi $media, Voce esta Aprovado";
        } else {
            if (($media >= 5) && ($media < 7)) {
                echo "Sua nota foi $media, Voce esta de recuperacao";
            } else {
                echo "Sua nota foi $media, Voce esta Reprovado ";
            }
        }
        ?>
    </form>
</body>

</html>
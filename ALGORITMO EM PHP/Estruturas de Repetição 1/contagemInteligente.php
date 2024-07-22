<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem Inteligente</title>
</head>

<body>
    <h1>Comece sua contagem</h1>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="inicio">Ìnicio</label>
            <br><input type="number" name="inicio" id="inicio">
            <br><label for="fim">Fim</label>
            <br> <input type="number" name="fim" id="fim">
            <button type="submit">GO</button>

            <?php
            $inicio = $_REQUEST['inicio'] ?? 0;
            $fim = $_REQUEST['fim'] ?? 0;

            if ($inicio < $fim) {
                for ($contagem = $inicio; $contagem <= $fim; $contagem++) {
                    echo "<br>Iniciando contagem " . $contagem;
                }
            } elseif ($inicio > $fim) {
                for ($contagem = $inicio; $contagem >= $fim; $contagem--) {
                    echo "<br>Iniciando contagem " . $contagem;
                }
            };
            ?>
        </form>
    </main>
</body>

</html>
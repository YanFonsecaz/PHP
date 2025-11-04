<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de futebol</title>
</head>
<body>
    <main>
        <h1>Descubra o Status do jogo</h1>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="timeA">TIME A</label>
            <input type="number" name="timeA" id="timeA">
            <br>
            <label for="timeB">TIME B</label>
            <input type="number" name="timeB" id="timeB">
            <br>
            <button type="submit">Calcular Gols</button>
        </form>

        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $timeA = isset($_POST['timeA']) ? (int)$_POST['timeA'] : 0;
            $timeB = isset($_POST['timeB']) ? (int)$_POST['timeB'] : 0;
            $gols = $timeA - $timeB;

            switch ($gols) {
                case 0:
                    echo "<p>Jogo terminou em $gols e foi EMPATE</p>";
                    break;
                case 1:
                case 2:
                case 3:
                case 4:
                    echo "<p>Jogo terminou com a diferença de $gols e foi um jogo Normal</p>";
                    break;
                default:
                    echo "<p>Jogo terminou em $gols e foi goleada</p>";
                    break;
            }
        }
        ?>
    </main>
</body>
</html>

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
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="timeA"><br>TIME A</label>
            <input type="number" name="timeA" id="timeA">
            <label for="timeB"><br>TIME B</br></label>
            <input type="number" name="timeB" id="timeB">
            <button type="submit">Calcular Gols</button>
        </form>
        
            <?php 
            
                $timeA = $_REQUEST['timeA'] ?? null;
                $timeB = $_REQUEST['timeB'] ?? null;
                $gols = ($timeA - $timeB);

                switch ($gols) {
                    case 0:
                        echo "Jogo terminou em $gols e foi EMPATE";
                        break;
                    case 1:
                    case 2:
                    case 3:
                    case 4:    
                        echo "Jogo terminou com a diferenca $gols e foi um jogo Normal";
                        break;
                    default:
                        echo "Jogo terminou em $gols e foi goleada";
                        break;
                }
            
            ?>
        
    </main>
</body>
</html>
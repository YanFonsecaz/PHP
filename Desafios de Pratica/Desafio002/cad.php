<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado do Numero Gerado</h1>
            <?php
                $min = 0;
                $max = 100;
                $num = mt_rand($min, $max);
                echo "<p>O numero gerado entre $min e $max é: <br><strong>$num</strong></p>"; 
            ?>
            <button onclick="javascript:document.location.reload()"> Gerar outro </button>
    </main>
</body>
</html>
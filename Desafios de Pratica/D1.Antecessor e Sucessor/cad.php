<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>  
        <h1>Resultado do calculo</h1>
        <p>
            <?php 
                $numero = $_GET["numero"] ?? "numero desconhecido";
                echo "<p>O seu numero escolhido foi <strong>$numero</strong>";
                echo "<p>O seu antecessor e " . $numero - 1 . "\n";
                echo "<p> O seu sucessor e ". $numero + 1 . "\n";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>
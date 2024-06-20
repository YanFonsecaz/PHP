<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Nome desconhecido";
            $sobrenome = $_GET["sobrenome"]?? "Sobrenome inexistente";
            echo "<p> É um prazer te conhecer, <strong>$nome $sobrenome!!</strong> Este é o meu site!";

        ?>
    </main>
</body>
</html>
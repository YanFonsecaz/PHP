<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php 
            echo "Olá Mundo";
            // Variavel
            $nome = "Yan";
            // Constante
            const PAIS = "Brasil";
            echo "Muito prazer meu nome é $nome!! Voce mora no " . PAIS;
            // Para força tipagem você pode usar o (int) ou (string)
            $idade = 25;
            echo "Minha idade é " . (int)$idade;
            // Verifica o tipo da variavel
            var_dump($idade);
            // Array
            $vetor = [1, 2, "Yan", true , 4, 5];
            // Sequencia de escape para usar as aspas duplas em aspas duplas
            echo "$nome \"Minotauro\" $idade";
            ?>
    </h1>
</body>
</html>
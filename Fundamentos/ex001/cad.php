<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <?php 
        $nome = $_REQUEST["name"] ?? "Nome não informado";
        $sobrenome = $_REQUEST["sobrenome"] ?? "Sobrenome não informado";
        echo "Seu nome é <strong>$nome $sobrenome</strong>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</body>
</html>
<?php 
    $nome = "";
    $sobrenome = "";
    $mensagem = "";
    $clickButton = false;

    if (isset($_GET['enviar'])) {
        $clickButton = true;
        $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $sobrenome = filter_input(INPUT_GET, 'sobrenome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if (!empty($nome) && !empty($sobrenome)) {
            $mensagem = "Seja bem-vindo, ". htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') ." ". htmlspecialchars($sobrenome, ENT_QUOTES,'UTF-8') ."!";
        } else {
            $mensagem = "Por favor, preencha todos os campos.";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Saudação</title>
</head>
<body>
    <h1>Formulario de Saudação</h1>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome">
            <input type="submit" value="Enviar" name="enviar" id="enviar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            echo $mensagem;
        ?>
    </section>
</body>
</html>
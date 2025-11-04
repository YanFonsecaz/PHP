<?php
    // --- ÁREA DE PROCESSAMENTO PHP ---
    // Inicializa a variável que guardará o resultado.
    $valorGerado = null;

    // Verifica se o formulário foi enviado através do botão com name="gerar".
    if (isset($_GET['gerar'])) {
        // Se foi, gera um número aleatório e o armazena na variável.
        $valorGerado = random_int(1, 100);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de número aleatório</title>
</head>
<body>
    <h1>Gerador de número aleatório</h1>
    
    <!-- O action envia os dados do formulário para esta mesma página de forma segura -->
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
        <label for="gerar">Clique no botão para gerar um número entre 1 e 100:</label>
        <input type="submit" value="Gerar" name="gerar" id="gerar">
    </form>

    <section>
        <h2>Resultado</h2>
        <p>
            <?php
                // --- ÁREA DE EXIBIÇÃO ---
                // Se a variável $valorGerado não for nula (ou seja, se um número foi gerado),
                // exibe a mensagem.
                if ($valorGerado !== null) {
                    echo "O valor gerado foi: <strong>$valorGerado</strong>";
                }
            ?>
        </p>
    </section>
</body>
</html>
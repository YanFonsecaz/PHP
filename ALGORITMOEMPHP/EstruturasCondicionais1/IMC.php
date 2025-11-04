<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descobrindo IMC</title>
</head>
<body>
    <main>
        <!-- O formulário envia os dados para esta mesma página -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="Altura">Altura (m):</label>
            <input type="number" name="Altura" id="Altura" step="0.01" value="<?= $_GET['Altura'] ?? '' ?>" required>
            
            <label for="Peso">Peso (kg):</label>
            <input type="number" name="Peso" id="Peso" step="0.1" value="<?= $_GET['Peso'] ?? '' ?>" required>
            
            <button type="submit">Calcular IMC</button>
        </form>

        <!-- Seção de Resultado que só aparece após o cálculo -->
        <section>
            <h2>Resultado</h2>

            <?php
                // PASSO 1: Verificar se o formulário foi enviado e os campos não estão vazios
                if (!empty($_GET['Altura']) && !empty($_GET['Peso'])) {
              
                    $altura = (float)$_GET['Altura'];
                    $peso = (float)$_GET['Peso'];
                    
                    // PASSO 2: Proteção Essencial contra Divisão por Zero
                    if ($altura > 0) {
                        $IMC = $peso / ($altura ** 2);
                        
                        echo "O seu IMC é <strong>" . number_format($IMC, 2, ",", ".") . "</strong>.";
                        echo "<br>"; // Quebra de linha
                        
                        if ($IMC < 18.5) {
                            echo "Classificação: <strong>Abaixo do peso</strong>";
                        } elseif ($IMC < 25) {
                            echo "Classificação: <strong>Peso ideal (parabéns!)</strong>";
                        } elseif ($IMC < 30) {
                            echo "Classificação: <strong>Sobrepeso</strong>";
                        } else {
                            echo "Classificação: <strong>Obesidade</strong>";
                        }
                    } else {
                        // Mensagem de erro se a altura for 0
                        echo "<p style='color: red;'>Altura inválida. Por favor, insira um valor maior que zero.</p>";
                    }
                } else {
                     // Mensagem inicial antes do primeiro cálculo
                    echo "<p>Preencha sua altura e peso para calcular seu IMC.</p>";
                }
            ?>
        </section>
    </main>
</body>
</html>
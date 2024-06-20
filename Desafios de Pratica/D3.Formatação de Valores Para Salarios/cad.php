<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Valor convertido</h1>
        <p>
            <?php
                $valor = $_REQUEST["valor"] ?? 0;
                $cotacao = 5.25;
                $resultado = ($valor/$cotacao);

                //FORMA 1
                /*echo "<p>A conversao do seu valor <strong>R\$</strong>".number_format($valor,2, ".",","). " e o valor convertido é <strong>\$</strong>". number_format($resultado, 2, ".", ","). "\n";
                echo "<p>O valor da cotacao é <strong>\$</strong>" . number_format($cotacao, 2,".",",");*/

                //FORMA 2
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo " <p>Seus ". numfmt_format_currency($padrao, $valor, "BRL"). " Equivalem a <strong>" . numfmt_format_currency($padrao,$resultado, "USD") . "</strong></p>";
                
            ?>
                <button onclick="javascript:history.go(-1)"> Voltar </button>
        </p>    
    </main>
</body>
</html>
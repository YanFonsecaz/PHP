<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>

        <form action="<?= $_SERVER ['PHP_SELF']?>" method="get">
            <label for="quantidade">Quantidade que quer converter</label>
            <input type="number" name="quantidade" id="quantidade">
            <button type="submit">Iniciar</button>
        </form>
        <?php 
            /*$quant = $_REQUEST['quantidade'] ?? 0;
            $valor = $_REQUEST['valor']??0;
            $dinheiro = $valor/2.20;
            
            /for ($contagem=0; $contagem < $quant; $contagem++) {
                echo "<form action=\"" . $_SERVER['PHP_SELF'] . "\" method=\"get\">"; 
                echo "<label for=\"dinheiro\">Valor desejado</label> ";
                echo "<input type=\"number\" name=\"valor\" id=\"valor\" step=\"0.10\">";
                
            }
            echo "<input type=\"hidden\" name=\"quantidade\" >";
            echo "<button type=\"submit\">Converter</button>";
            echo "</form>";
            echo "$dinheiro";*/
            
            $quant = $_REQUEST['quantidade'] ?? 0;
            $valores = $_REQUEST['valores'] ?? [];

            if ($quant > 0) {
                echo "<form action=\"" . $_SERVER['PHP_SELF'] . "\" method=\"get\">";
                echo "<input type=\"hidden\" name=\"quantidade\" value=\"$quant\">";
                
                for ($contagem = 0; $contagem < $quant; $contagem++) {
                    $valor = $valores[$contagem] ?? 0;
                    echo "<label for=\"valor$contagem\">Valor desejado</label>";
                    echo "<input type=\"number\" name=\"valores[]\" id=\"valor$contagem\" step=\"0.10\" value=\"$valor\">";
                }
                
                echo "<button type=\"submit\">Converter</button>";
                echo "</form>";

                foreach ($valores as $valor) {
                    $dinheiro = $valor / 2.20;
                    echo "<p>Valor convertido: $dinheiro</p>";
                }
            }
        ?>
    </main>
</body>
</html>
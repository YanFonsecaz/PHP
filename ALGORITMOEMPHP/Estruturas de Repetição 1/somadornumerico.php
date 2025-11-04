<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somador numerico</title>
</head>
<body>
    <main>
        <h1>Somador Numerico</h1>

        <?php

            for ($contagem=0; $contagem <5 ; $contagem++) { 
                ?>
                <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="valor"><br>Adicione um valor</br></label>
                <input type="number" name="valor" id="valor">
                
        <?php 
                echo "Digite o " . $contagem + 1 ."o valor";
                $valor = (int)$_REQUEST['valor'] ?? 0;
                $soma = 0;
                $soma = $soma + $valor;
                $maiorVal = 0;
                if ($maiorVal<$valor) {
                    $maiorVal = $valor;
                    
                };        
            }
            echo "<br><strong>Maior numero digitado foi $maiorVal</strong></br>";
            echo "<br>Valor total da soma <strong>$soma</strong> \n</br>";
        ?>
                <br><button type="submit">Adicionar valor</button></br>
                </form>
    </main>
</body>
</html>
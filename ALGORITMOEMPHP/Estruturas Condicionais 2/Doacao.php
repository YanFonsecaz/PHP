<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doacao</title>
</head>

<body>
    <h1>Faça sua Doaçao</h1>
    <main>
        <?php 
            echo "<strong>[1]</strong> para doar R$10 \n";
            echo "<strong>[2]</strong> para doar R$25 \n";
            echo "<strong>[3]</strong> para doar R$50 \n";
            echo "<strong>[4]</strong> para doar outros valores \n";
            echo "<strong>[5]</strong> para cancelar \n";
        ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero"><strong>Digite um numero</strong></label>
            <input type="number" name="numero" id="numero" step="0.10">
            <button type="submit"> Doar </button>

            <?php 
                $numero = $_REQUEST['numero'] ?? 0;
                $valor;
                $padrao = numfmt_create("pt_BR", NumberFormatter :: CURRENCY); 

                switch ($numero) {
                    case 1:
                        $valor = 10;
                        echo "Voce doou <strong>".numfmt_format_currency($padrao,$valor,"BRL")  ." reais</strong>";
                        break;
                    case 2:
                        $valor = 25;
                        echo "Voce doou <strong>".numfmt_format_currency($padrao,$valor,"BRL")  ." reais</strong>";
                        break;
                    case 3:
                        $valor = 50;
                        echo "Voce doou<strong>".numfmt_format_currency($padrao,$valor,"BRL")  ." reais</strong>";
                        break;
                    case 4:
                        ?>
                        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                        <label for="valor"><strong>Digite o valor Desejado</strong></label>
                        <input type="number" name="valor" id="valor" step="0.10">
                        <button type="submit">Doar Valor</button>
                        </form>
                        <?php
                            $valor = $_REQUEST['valor'] ?? 0;
                            echo "Voce doou <strong>".numfmt_format_currency($padrao,$valor,"BRL")  ." reais</strong>";
                        break;   
                    case 5:
                        echo "Doacao cancelada";
                        break;         
                    default:
                        echo "Numero Invalido ";
                        break;
                }
            ?>
        </form>
    </main>
</body>

</html>
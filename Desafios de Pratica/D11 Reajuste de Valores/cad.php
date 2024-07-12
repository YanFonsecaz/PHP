<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preço</title>
    <link rel= "stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Reajuste o Valor</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
        <label for="preco"> Valor </label>
        <input type="number" name="preco" id="preco">
        <label for="porcent"> Acrescimo em % </label>
        <input type="number" name="porcent" id="porcent">
        <input type="submit" value="Calcular">

            <?php 
                $preco = $_REQUEST['preco'] ?? 0 ;
                $porcent = $_REQUEST['porcent'] ?? 0;
                $valor1 = $preco + ($preco * ($porcent / 100));
                $padrao = numfmt_create("pt_BR", NumberFormatter :: CURRENCY);

                echo " O Valor atualizado de <strong>" . numfmt_format_currency($padrao, $preco, "BRL") . "</strong> com acrescimo de <strong>$porcent% </strong>é <strong>" . numfmt_format_currency($padrao, $valor1, "BRL") . "</strong>";

            ?>



        </form>
    </main>
    
</body>
</html>
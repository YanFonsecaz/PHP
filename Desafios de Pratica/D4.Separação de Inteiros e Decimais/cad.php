<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Separacao de inteiro e decimais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Separacao</h1>
        <?php 
            $valor = $_REQUEST["valor"] ?? 0;
           
            echo "o Valor inteiro é <strong>" .number_format($valor,3, "," ) . "</strong></p>";

            $int = (int) $valor;
            $fra = $valor - $int;
            
            echo "<ul><li> A parte inteira do numero é <strong>".number_format($int,0,",",".") . "</strong></li>";
            echo "<li> A parte fracionaria do numero é <strong>".number_format($fra, 3 ,",",".")."</strong></li></ul>";
        

        ?>
        <button onclick="javascript:history.ho(-1)">voltar</button>
    </main>
    
</body>
</html>
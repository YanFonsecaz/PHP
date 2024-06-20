<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Aritmetica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculando Media Aritmetica</h1>
    <Main>
        <p>Digite os valores abaixo para calcular a media aritmetica</p>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n1">Nota 1</label>
            <input type="number" name="n1" id="n1">
            <label for="peso1">Peso da nota 1</label>
            <input type="number" name="peso1" id="peso1">
            <label for="n2">Nota 2</label>
            <input type="number" name="n2" id="n2">
            <label for="peso2">Peso da nota 2</label>
            <input type="number" name="peso2" id="peso2">
            <input type="submit" value="Calcular">

            <?php 
                $nota1 = $_REQUEST['n1'] ?? 0;
                $nota2 = $_REQUEST['n2'] ?? 0;
                $peso1 = $_REQUEST['peso1']?? 1;
                $peso2 = $_REQUEST['peso2']?? 1;
                $resultadoMedia = ($nota1 + $nota2)/2;
                $resultadoMediaP = ($nota1 * $peso1) + ($nota2 * $peso2)/($peso1 + $peso2);

                echo "<h1>Calculo Das Medias</h1>";
                echo "<p>Analisando os valores $nota1 e $nota2</p>". "\n";
                echo "<p><strong>A Media Aritmetica Simples</strong> entre os valores é igual a ". number_format($resultadoMedia, 2, ",",".");
                echo "<p><strong>A Media Aritmetica Ponderada é</strong>: ". number_format($resultadoMediaP,2,",",".");
                if($resultadoMediaP == 0){
                    echo "<p>Não é possivel calcular a media ponderada pois os pesos são iguais a zero";
                }
            ?>

        </form>
    </Main>
</body>
</html>
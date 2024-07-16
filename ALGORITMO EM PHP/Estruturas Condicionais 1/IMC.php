<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descobrindo IMC</title>
</head>
<body>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="Altura">Altura em (M)</label>
            <input type="number" name="Altura" id="Altura" step="0.010">
            <label for="Peso">Peso (KG)</label>
            <input type="number" name="Peso" id="Peso" step="0.010">
            <button type="submit">Calcular</button>

            <?php 
                $altura = $_REQUEST['Altura'] ?? 0;
                $peso = $_REQUEST['Peso'] ?? 0;
                $IMC = $peso / ($altura ** 2);
                
                echo" O IMC é " . number_format($IMC,2,",",".") . "\n";
                if (($IMC >= 18.5) && ($IMC < 25)){
                    echo "Parabens voce esta no seu peso ideal";
                }else{
                    echo "Voce nao esta no seu peso ideal";
                }
            ?>
        </form>
    </main>
</body>
</html>
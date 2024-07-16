<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra Impar ou Par</title>
</head>
<body>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="Dividendo">Qual o Dividendo</label>
            <input type="number" name="Dividendo" id="Dividendo">
            <button type="submit">Calcular</button>

            <?php 
                $dividendo = $_REQUEST['Dividendo'] ?? 0;
                
                if ($dividendo % 2 == 0){
                    echo "O numero $dividendo é PAR";
                } else{
                    echo "O numero $dividendo é IMPAR";
                }
            ?>
        </form>
    </main>
    
</body>
</html>
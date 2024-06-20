<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquina do Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Calculando sua Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
        <label for="ano">Em que ano voce nasceu</label>
        <input type="number" name="ano" id="ano">
        <p><label for="number">Quer saber sua idade em que ano? atualmente estamos em <strong><datatime><?php echo date("Y");?></datetime></strong> </label>
        <input type="number" name="ano2" id="ano2">
        <input type="submit" value="Calcular" id="idcalcular">
        </form>
        <h1>Resultado</h1>
        <?php 
        $ano1=$_REQUEST['ano'] ?? 0;
        $ano2=$_REQUEST['ano2'] ?? 0;
        $idade=$ano2-$ano1;
        
            
        if(date("Y")<$ano2){
            echo "Você nasceu em $ano1 vai ter <strong>$idade anos</strong> em <strong>". "$ano2</strong>";
        }else{
            echo "Você nasceu em $ano1 vai ter <strong>$idade anos</strong> em <strong>". date("Y"). "</strong>";
        }
        ?>
    </main>

</body>
</html>
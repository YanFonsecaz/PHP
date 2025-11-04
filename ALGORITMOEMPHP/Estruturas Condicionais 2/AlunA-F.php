<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra a media</title>
</head>
<body>
    <main>
        <h1>Nota de A-F</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="nota1"><br>Primeira Nota</label>
            <input type="number" name="nota1" id="nota1" step="0.10">
            <label for="nota2"><br>Segunda Nota</br></label>
            <input type="number" name="nota2" id="nota2" step="0.10">
            <button type="submit">Calcular Nota</button>

            <?php 
                $nota1 = $_REQUEST['nota1']?? null;
                $nota2 = $_REQUEST['nota2']?? null;
                $media = ($nota1 + $nota2)/2;

                if(($media == 10) && ($media >= 9)){
                    echo "Sua Media foi <strong>$media - A</strong>";
                }elseif(($media<=8.9) && ($media>=8)){
                    echo "Sua Media foi <strong>$media - B</strong>";
                }elseif (($media<=7.9) && ($media>=7)){
                    echo "Sua Media foi <strong>$media - C</strong>";
                }elseif (($media<=6.9) && ($media>=6)){
                    echo "Sua Media foi <strong>$media - D</strong>";
                }elseif (($media<=5.9) && ($media>=5)){
                    echo "Sua Media foi <strong>$media - E</strong>";
                }else{
                    echo "Sua Media foi <strong>$media - F</strong>";
                };
            ?>
        </form>
    </main>
</body>
</html>
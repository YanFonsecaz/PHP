<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <main>
        <h1>Contagem de 1 a 10</h1>
        <form action="<?=$_SERVER ['PHP_SELF'] ?>" method="get">
            <?php 

               for ($contador=0; $contador <= 10 ; $contador++) { 
                    echo "<br>Contagem $contador</br>";
               } 
                    echo "<br>Terminei a contagem</br>";
            ?>
        </form>
    </main>
</body>
</html>
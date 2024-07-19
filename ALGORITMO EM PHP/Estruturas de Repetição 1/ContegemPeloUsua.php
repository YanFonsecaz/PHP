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
            <label for="valorUsua">Ate que valor deseja fazer a contagem</label>
            <input type="number" name="valorUsua" id="valorUsua">
            <button type="submit">Iniciar</button>
            <?php 
                $valorUsua = $_REQUEST['valorUsua'] ?? null;
               for ($contador = 0; $contador <= $valorUsua ; $contador++) { 
                    echo "<br>Contagem $contador";
               } 
                    echo "<br>Terminei a contagem";
            ?>
        </form>
    </main>
</body>
</html>
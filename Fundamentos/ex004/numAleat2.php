<?php 
    $numAleat = null;

    if (isset($_GET['gerador'])){
        $numAleat = random_int(1, 100);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gere um valor aleatorio</title>
</head>
<body>
    <header>
        <h1>Gerador de valor aleatorio</h1>
    </header>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
            <label for="gerar">Gere um valor aleatorio</label>
            <input type="submit" value="gerar" name="gerador">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            if($numAleat != null){
                echo "O valor aleatorio é <strong>$numAleat</strong>";
            }
        ?>
    </section>
</body>
</html>
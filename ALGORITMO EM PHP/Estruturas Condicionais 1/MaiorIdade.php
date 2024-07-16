<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condiçao</title>
</head>

<body>
    <h1>Algoritmo Estrutura de Condicionais</h1>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="Ano">Em que ano estamos?</label>
            <input type="number" name="Ano" id="Ano">
            <label for="Nascimento">Em que ano voce nasceu?</label>
            <input type="number" name="Nascimento" id="Nascimento">
            <button type="submit">Calcular</button>

            <?php
            $ano = $_REQUEST['Ano'] ?? 0;
            $nascimento = $_REQUEST['Nascimento'] ?? 0;
            $idade = $ano - $nascimento;

            echo "Em, $ano, voce tera $idade anos \n";
            
            if ($idade>=21){
                echo "E voce ja é maior de idade";
            }else{
                echo "voce ainda e menor de idade";
            }

            ?>
        </form>
    </main>

</body>

</html>
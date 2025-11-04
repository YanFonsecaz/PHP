<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
</head>
<body>
    <?php 
        $valor1 = $_REQUEST["valor1"] ?? 0;
        $valor2 = $_REQUEST["valor2"] ?? 0;
        $resultado = $valor1 + $valor2;

        if($idade >= 18){
            echo "Você é maior de idade";
        } elseif ($idade < 18) {
            echo "Opcional";
        } else {
            echo "Idade inválida";
        }

        switch ($escolha) {
            case 'value':
                # code...
                break;
            
            default:
                # code...
                break;
        }

        function soma($a, $b) {
            $s = $a + $b;
            echo "A soma é: $s";
        }
        soma(1,2);
        ?>

        func_get_args(); // Criar um array que recebe todos os argumentos passados para uma funcao
        func_num_args(); // Retorna o número de argumentos passados para uma função ou seja a quantidade do index do array

        // Criando um vetor
        array(1,2,3)
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="idvalor1" value="<?= $valor1?>">
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="idvalor2" value="<?= $valor2?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h1>Resultado</h1>
        <p>O resultado da soma é: <?= $resultado?></p>
    </section>
</body>
</html>
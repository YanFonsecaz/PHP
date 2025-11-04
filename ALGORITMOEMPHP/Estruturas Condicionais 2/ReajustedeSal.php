<!DOCTYPE html>
<html lang="pt-be">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Salario</title>
    <h1>Correcao Salarial de Funcionarios com Dependetes</h1>
</head>
<body>
    <main>
        <form action="<?=$_SERVER ['PHP_SELF'] ?>" method="post">
            <label for="Nome"><br>Nome do Funcionario?</label>
            <input type="text" name="Nome" id="Nome">
            <label for="Salario"><br>Qual o salario do Funcionario?</br></label>
            <input type="number" name="Salario" id="Salario" step="0.10">
            <label for="Dependentes"><br>Qual a quantidade de Dependentes?</br></label>
            <input type="number" name="Dependentes" id="Dependentes" step="0.10">
            <button type="submit">Reajustar</button>

            <?php 
                $nome = $_REQUEST['Nome'] ?? '';
                $salario = $_REQUEST['Salario'] ?? 0;
                $dependestes = $_REQUEST['Dependentes'] ?? 0;
                $padrao = numfmt_create("pt_BR", NumberFormatter :: CURRENCY);

                switch ($dependestes) {
                    case 0:
                        $salario = $salario + ($salario*5/100);
                        break;
                    case 1:
                    case 2:
                    case 3:
                        $salario = $salario + ($salario*10/100);
                        break;
                    case 4:
                    case 5:
                    case 6:
                        $salario = $salario + ($salario*15/100);
                        break;   
                    default:
                        $salario = $salario + ($salario*18/100);
                        break;
                        
                }
                    echo" <strong>$nome</strong> seu novo Salario é <strong>" . numfmt_format_currency($padrao, $salario, "BRL")."</strong>";
            ?>
        </form>
    </main>
</body>
</html>
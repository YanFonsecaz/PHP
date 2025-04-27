<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $nome = "Yan Fonseca";
        $saudacao = "Oi";
        $titulo = $saudacao . ", Portifólio do " . $nome;
        $subtitulo = "Seja bem vindo ao meu portifólio";
        $ano = 2025;

        $projeto = "Meu Portifólio";
        $finalizado = true;
        $dataDoProjeto = "2025-05-22";
        $descricao = "Meu primeiro portifólio. Escrito em PHP e HTML";
    ?>
    <h1><?php echo $titulo; ?></h1>
    <p><?php echo $subtitulo; ?></p>
    <p><?php echo $ano; ?></p>

    <hr/>

    <div>
        <h2><?php $projeto; ?></h2>
        <p><?php $descricao ?></p>

        <div>
            <?php $dataDoProjeto ?>
            <div><?php $dataDoProjeto ?></div>
            <div>
                <?php 
                    if ($finalizado) {
                        echo '<span style="color: green"> Finalizado ✅ </span>';
                    } else {
                        echo '<span style="color: red"> Em desenvolvimento ❌ </span>';
                    }
                ?>
            </div>
        </div>
    </div>

</body>

</html>
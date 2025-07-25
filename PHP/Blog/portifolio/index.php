<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifólio</title>
</head>
<body>

    <?php 
        $nome = "Yan";
        $saudacao = "Oi";
        $titulo = $saudacao . " Portifolio do " . $nome;
        $subtitulo = "Bem-vindo ao Meu Portifólio";
        $ano = 2025;

        $projeto = "Meu Portifolio";
        $finalizado = true;
        $data = "2025-01-01";
        $descricao = "Meu primeiro portifolio. Escrito em PHP e HTML.";

    ?>


    <h1> <?php echo $titulo ?> </h1>
    <p> <?php echo $subtitulo ?></p>
    <p> <?php echo $ano ?></p>

    <hr>
    <div 
        <?php if ((2022 - $ano) > 2): ?>
            style='background-color:burlywood;'
        <?php endif; ?>
    >

        
    <div>
        <h2><?= $projeto ?></h2>
        <p><?= $descricao ?></p>
        <div>
            <div><?= $data ?></div>
            <div>Projeto: 
                <?php if ($finalizado) : ?>
                        <span style="color:green">✅ Finalizado</span>;
                <?php else: ?>
                        <span style="color:red">❌ Não Finalizado</span>;
                <?php endif; ?>
            </div>

            <div>
                <?php
                    if ($finalizado == true) {
                    } else {
                        echo "❌ Não Finalizado";
                    }
                ?>
            </div>
        </div>
    </div>

</body>
</html>
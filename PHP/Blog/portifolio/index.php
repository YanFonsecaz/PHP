<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">ü
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifólio</title>
</head>

<body>

    <?php
    $nome = "Yan";
    $saudacao = "Oi";
    $titulo = $saudacao . " Portifolio do " . $nome;
    $subtitulo = "Bem-vindo ao Meu Portifólio";
    $ano = 2024;

    $projeto = "Meu Portifolio";
    $finalizado = true;
    $data = "2025-01-01";
    $descricao = "Meu primeiro portifolio. Escrito em PHP e HTML.";

    $projetos = [
        [
            "titulo" => "Meu Portifolio",
            "finalizado" => false,
            "ano" => 2025,
            "descricao" => "Meu primeiro portifolio. Escrito em PHP e HTML.",
        ],
        [
            "titulo" => "Lista de tarefas",
            "finalizado" => true,
            "ano" => 2025,
            "descricao" => "Lista de tarefas. Escrito em PHP e HTML.",
        ],
        [
            "titulo" => "Controle de leitura",
            "finalizado" => true,
            "ano" => 2025,
            "descricao" => "Lista de livros. Escrito em PHP e HTML.",
        ],
        [
            "titulo" => "Mais projeto",
            "finalizado" => false,
            "ano" => 2026,
            "descricao" => "Projeto secreto em andamento. Escrito em PHP e HTML.",
        ],
    ];

    function verificarSeEstaFinalizado ($proj) {
        if (!($proj["finalizado"])){
            return '<span style="color:red;">❌ Não Finalizado</span>';
        }
            return '<span style=" color:green;">✅ Finalizado</span>';
    }


    $filtrarProjetos = function ($listaDeProjetos, $finalizado = false) {

        if(is_null($finalizado)){
            return $listaDeProjetos;
        }

        $filtrados = [];

        foreach($listaDeProjetos as $projeto) {
            if($projeto["finalizado"] == $finalizado){
                $filtrados[] = $projeto;
            }
        }
        return $filtrados;
    };
        $projetosFiltrados = $filtrarProjetos($projetos, $filtro_finalizado = false);
    ?>


    <h1> <?php echo $titulo ?> </h1>
    <p> <?php echo $subtitulo ?></p>
    <p> <?php echo $ano ?></p>

    <hr>

    <ul>
        <?php foreach ($projetosFiltrados as $projeto) : ?>
            <div class="projeto" style="background-color: burlywood;">

                <h2><?php echo $projeto["titulo"]; ?></h2>

                <p><?php echo $projeto["descricao"]; ?></p>

                <div>

                    <div><?php echo $projeto["data"]; ?></div>

                    <div> Projeto: <?php echo verificarSeEstaFinalizado($projeto); ?></div>
                        
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </ul>


</body>

</html>
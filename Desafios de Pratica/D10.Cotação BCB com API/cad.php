<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div><h1>Valor convertido e Cotacao do dolar</h1></div>
        <div><p>
            <?php
                    $inicio = date("m-d-Y", strtotime("-7 days"));
                    $fim = date("m-d-Y");
                    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=100&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                    $dados = json_decode(file_get_contents($url),true);

                    for ($i=0; $i < count($dados["value"]); $i++) { 
                        $cotacao[$i] = $dados["value"][$i]["cotacaoCompra"];
                        $dataCotacao[$i] = $dados["value"][$i]["dataHoraCotacao"];
                    }
                    $valor = $_REQUEST["valor"] ?? 0;

                    $resultado = array(
                        "valorDia" => $valor/$cotacao[0],
                        "cotacao" => $cotacao,
                        "dataHoraCotacao" => $dataCotacao
                    );
                    
                
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo " <p>Seus ". numfmt_format_currency($padrao, $valor, "BRL"). " Equivalem a <strong>" . numfmt_format_currency($padrao,$resultado["valorDia"], "USD") . "</strong></p>";

            for ($i=0; $i < count($resultado["cotacao"]); $i++) { 
                echo "<p>Cotacao em ordem decrescente da semana: <strong>".numfmt_format_currency($padrao,$resultado["cotacao"][$i],"BRL") . "\n</p></strong>";
                echo "<p>Data da cotacao em ordem decrescente da semana: <strong>". date("d-m-Y", strtotime($resultado["dataHoraCotacao"][$i]))  . "\n</p></strong>";
                
            } 
            ?>
                <button onclick="javascript:history.go(-1)"> Voltar </button>
        </p></div>    
    </main>
</body>
</html>
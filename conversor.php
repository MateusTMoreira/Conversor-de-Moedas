<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de moedas online 2.0</h1>
    </header>

    <main>
        <?php 
            //Pegando dados da API
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            
            //Formatando os valores para o formato brasileiro 
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            //Criando as variaveis que recebem os valores da cotação, valor em reais e o valor da conversão de real para dolar
            $cotação = $dados["value"][0]["cotacaoCompra"];
            $real = $_REQUEST ["valor"];
            $conversao = $real / $cotação;

            echo "<p>Seu valor " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $conversao, "USD") . "</strong> </p>";
            
            echo "<p>A cotação utilizada do momento foi de: " . numfmt_format_currency($padrao, $cotação, "USD" . "</p>");

            echo "<p>Informações tiradas direto do site do <a href='https://www.bcb.gov.br/' target='blank'>Banco Central do Brasil</a>";
            
        ?>
        
        <p><a href="index.html"><button><-- Voltar</button></a></p>
    </main>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <p>
<?php 

$valor = (float) ($_GET["valor"] ?? 0);

$inicio = date("m-d-Y", strtotime("-7 days"));
$fim = date("m-d-Y");
$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio . '\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);

$cotacao = $dados["value"][0]["cotacaoCompra"];

$dolar = $valor/$cotacao;

$padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
echo "Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>";

?>
</p>
<p>Cotação obtida diretamente do site do <strong><a href="https://www.bcb.gov.br/" target="_blank">Banco Central do Brasil</a></strong></p>
<button onclick="javascript:history.go(-1)">Voltar</button>

    </main>

    
</body>
</html>

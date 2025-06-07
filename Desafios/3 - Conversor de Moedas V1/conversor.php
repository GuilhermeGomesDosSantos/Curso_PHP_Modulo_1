<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas</title>
</head>
<body>
    <header>
        <h1>Conversor de Moedas</h1>
    </header>

    <main>
        <p>
            <?php 
            $valor = (float) ($_REQUEST["valor"] ?? 0);
            $dolar = $valor / 5.56;
            // echo "Seus R$" . (number_format($valor, 2, ',','.')) . " equivalem a <strong>US$ ".(number_format($valor / 5.56, 2, ',','.')) ."</strong>"

            // Formatação de moedas com internacionalização!
            // Biblioteca intl (Iternallization PHP)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD");
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
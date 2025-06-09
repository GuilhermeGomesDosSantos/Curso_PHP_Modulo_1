<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de Número Real</title>
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <p>
            <?php 
            $numero = (float) ($_REQUEST["valor"] ?? 0);
            $numeroFormatado = number_format($numero, 3, ",", ".");
            $valorInteiro = (int)($numero);
            $valorFracionado = $numero - $valorInteiro;
            echo "Analisando o número <strong>$numeroFormatado</strong> informado pelo usuário:";

            echo "<ul><li>A parte inteira do número é: <strong>" . (number_format($valorInteiro, 0, ",", ".")) . "</strong></li>";
            echo"<li>A parte fracionada do número é: <strong>" . (number_format($valorFracionado, 3, ",", ".")) . "</strong></li></ul>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
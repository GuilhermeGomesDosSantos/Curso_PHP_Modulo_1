<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteador de Números</title>
</head>
<body>
    <header>
        <h1>Trabalhando com Números Aleatórios</h1>
    </header>
    <main>
            <?php 
            $min = 0;
            $max = 100;
            $num = random_int($min, $max);
            echo "<p>Gerando um número aleatório entre 0 e 100...<br>O valor gerado foi <strong>$num</strong>"; 
            ?>
        </p>
        <button onclick="javascript:document.location.reload()">&#x1F504;Gerar outro</button>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <p>
        <?php 
        $numero = $_GET["numero"] ?? "NULL";
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        echo "O número escolhido foi <strong>$numero</strong>";
        echo "<br>O seu antecessor é <strong>$antecessor</strong>";
        echo "<br>O seu sucessor é <strong>$sucessor</strong>";
        ?>
        </p>
        <!-- <button onclick="javascript:window.location.href='inex.html'">&#x2B05 Voltar</button> -->
         <button onclick="javascript:window.history.go(-1)">&#x2B05 Voltar</button>
    </main>
</body>
</html>
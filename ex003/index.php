<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplode Variaveis</title>
</head>
<body>
    <?php 
    $nome = "Guilherme";
    $sobrenome = "Gomes";
    const PAIS = "Brasil"; // pode utilizar acentuação, ex: PAÍS
    $idade = 22;
    $peso = 109;
    $casado = false;
    const CURSO = "TI";
    
    /*
vai sobreescrever as variaveis que estão acima
    $nome = "Felipe";
    $sobrenome = "Guanabara";
*/  
    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings com PHP</title>
</head>
<body>
    <?php 
   //echo "PHP \u{1F418}"; // vai enterpretar o conteudo
    //echo 'PHP \u{1F418}'; // não vai interpretar o conteudo

    // $nome = 'Gustavo';
    // $sobrenome = "Guanabara \u{1F596}";
    // echo "Olá $nome $sobrenome";

    // const CANAL = "Curso em Vídeo \u{1F499}";
    // echo "Eu adoro o " . CANAL;

    // echo "Estamos no ano de " . date('Y');
    
    // $nom = "Rodrigo";
    // $snom = "Nogueira";
    // echo "$nom "Minotauro" $snom"; dessa maneira não é possivel interpretar
    // echo '$nom "Minoutauro" $snom'// dessa maneira com aspas simples, o PHP não vai interpretar as variaveis

    // echo "$nom \"Minoutauro\" $snom";

    // $nome = "Guilherme";
    // $sobrenome = "Santos";
    // $apelido = "Gafanhoto";
    // echo "$nome \n\t \"$apelido\" \t\t$sobrenome";

    $canal = "Curso em Vídeo";
    $ano = date('Y');
    
    echo <<< TESTE
        Ola galera do $canal!
                Tudo bem com vocês ?
            Como está sendo esse ano de $ano?
        Abraços! \u{1F596}
    
        TESTE;

    echo <<< 'TESTE'
        Ola galera do $canal!
                Tudo bem com vocês ?
            Como está sendo esse ano de $ano?
        Abraços! \u{1F596}
    
        TESTE;
    ?>
</body>
</html>
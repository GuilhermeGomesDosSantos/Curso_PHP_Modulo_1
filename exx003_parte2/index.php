<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal     0b = binário   0 = Octal
        //$num = 0x1A;
        //$num = 010;

        // echo "O valor da variavel é $num";

        // $v = "Guilherme";
        // var_dump($v);
        //$num = (int) 3e2; // ou (integer), isso se chama coersão
        //echo "O valor é $num";
        //var_dump($num);

        // $num = (double) "950";
        // var_dump($num);
        // $casado = false;
        // var_dump($casado);
        // print("O valor para casado é $casado"); // ao printar uma variavel do tipo boolean, se for false aparecera vazio, se for verdadeira, aparecera 1

        // $vet = [6, 1.8, "Gui", 9, false];
        // var_dump($vet);

        class Pessoa{
            private String $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>
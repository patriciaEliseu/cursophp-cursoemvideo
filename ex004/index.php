<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Premitivos</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <!-- <?php
    //     $num = 300;

    //     $numA = 0x1A;

    //     $numB = 0b1010;

    //     $numC = 0b1011;

    //     $numD = 010;

    //     $numE = 3e2; // é a mesma coisa que 3x 10(2) = 300
    //     // 0z = hexadecimal 
    //     // 0b = binário
    //     // 0 = octal
    //     echo "O valor da variavel é $num $numA $numB $numC $numD $numE";
    // ?>
    // <?php
    //     // $v = "Gustavo";
    //     // $v = 10;
    //     // posso forçar o tipo
    //     // $v = (int) 3e2;
    //     $v = 3e2; //float(300)
    //     var_dump($v);
    // ?> -->
    <?php 
        // $casado = true;
        // $_casado = false;

        // echo "O valor para casado true é $casado. ";
        // print ("O valor para casado true é $casado. ");
        // echo "O valor para casado é false $_casado. ";
        // print ("O valor para casado é false $_casado. ");
    

        //tipo array
        // $vet = [6, 2.5, "Maria", 3, false];

        // var_dump($vet);
    


        //tipo object
        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    
    ?>




</body>
</html>
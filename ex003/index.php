<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $nome = "Patricia";
       $sobrenome = "Eliseu";
       $idade = 52;
       $peso = 90;

       const PAIS = "Brasil";



       echo "Muito prazer, $nome $sobrenome tem $idade anos e peso $peso! Você mora no " . PAIS; 
    ?>
    <?php
        $nome = "Pedro";

        $NOME = "Maria";

        echo "É verdade que seu nome é $nome ou $NOME ";
        

    ?>
</body>
</html>
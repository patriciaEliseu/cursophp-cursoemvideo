<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de php</title>
</head>
<body>
    <h1>Exemplo de php</h1>

    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " .date("d/M/Y");
        echo " e a hora do dia é " .date("G:i:s");
    
    
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
    date_default_timezone_set("America/Sao_Paulo");
        echo "hoje é dia " . date("d/m/Y");

        echo "<br/>hoje é dia " . date("D/M/Y");
    //O D e M maiúsculo são para mostrar os nomes ao 
    //invés dos números
        echo "<br/>e a hora atual é " . date("G:i:s T");
     //O 'T' é para mostrar o fuso horário
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a = 5 + 2;
    $s = 5 - 2;
    $d = 5 * 2;
    $f = 5 / 2;
    $g = 5 % 2;
    $h = 5 ** 2;
    //TODO 5 e 2 são operandos, já os sinais, são os
    //TODO operadores

    echo "$a";
    echo "<br/>5 + 2 = $a";
    echo "<br/>5 - 2 = $s";
    echo "<br/>5 * 2 = $d";
    echo "<br/>5 / 2 = $f";
    echo "<br/>5 % 2 = $g";
    echo "<br/>5 ** 2 = $h";

    $rabs = abs(-2000);
    echo "<br/>$rabs";
    //TODO abs tira o sinal do número

    //TODO base_convert converte um número que você escolhe
    //TODO para 2(binário), 8(octal), 10(decimal) ou 
    //TODO 16(hexadecimal).
    $rbasec = base_convert(254,10, 8);
    echo "<br/><br/>$rbasec";
    $rbasec = base_convert(254,10, 16);
    echo "<br/>$rbasec";
    $rbasec = base_convert(254,10, 2);
    echo "<br/>$rbasec";

    $rcfr = ceil(43.46);
    echo "<br/>$rcfr";
    //TODO ceil arredonda para um número inteiro(int) a cima
    $rcfr = floor(23.76);
    echo "<br/>$rcfr";
    //TODO floor arredonda para um número inteiro(int) a baixo
    $rcfr = round(87.56);
    echo "<br/>$rcfr";
    $rcfr = round(87.43);
    echo "<br/>$rcfr";
    //TODO round arredonda para um número inteiro(int) mais próximo
    $rh = hypot(3, 5);
    echo "<br/>$rh";
    ?>
</body>
</html>
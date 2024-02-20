<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<tittle>Tipo Primitivos de PHP</tittle>
</head>
<body>

    <?php
    // 0x = hexadecimal 0b = binário 0= Octal
    $numero = 0x1A;
    echo "<br/>O valor da variável é $numero";

    $v = "Victor"; //string
    $b = 495;      //int
    $n = 342.6;    //float
    $m = true;     //boolean
    var_dump($v);
    var_dump($b);
    var_dump($n);
    var_dump($m);
    //var_dump mostra informação da variável

    $numero =(float) 500;
    var_dump($numero);
    $numero =(int) 500;
    var_dump($numero);
    //Colocando algum () antes de uma variável, podemos 
    //forçar o tipo primitivo dela

    $vet = [6, 5.6, "João", 8, true, 5];
    var_dump($vet);
    //Um array

    class Pessoa {
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);
     ?>
</body>
</html>
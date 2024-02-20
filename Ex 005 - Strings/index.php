<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<tittle>String em PHP</tittle>
</head>
<body>
    <?php
    echo "<br/>PHP \u{1F418}";
    //strings"" com aspas duplas, pedem para interpretar
    //o conteúdo.
    echo '<br/>PHP \u{1F418}';
    //Já as strings"" com aspas únicas, fazem tudo no
    //sentido literal.
    $nome = "Victor";
    $sobrenome = "Galato";

    echo "<br/>Olá $nome $sobrenome!\u{1F596}";
    echo '<br/>Olá $nome $sobrenome!\u{1F596}';

    const ESTADO = "Santa Catarina";
    const CIDADE = "Criciúma";
    //Já que const não tem sifra($), a interpretação não
    //funiona, por isso devemos usar o ponto de 
    //contatenação(.).
    echo "<br/>Moro em CIDADE de ESTADO ";
    echo "<br/>Moro em " . CIDADE . " de " . ESTADO;
    //date() também entra nessa regra.
    echo "<br>Estamos no ano de date('Y')'";
    echo "<br/>Estamos no ano de " . date('Y');

    $nom = "Senhor";
    $snom = "da Silva";
    //Usar dessa maneira nos daria um erro, porque usamos
    //aspas duplas uma dentro da outra.
    //echo "$nom"Exemplário" $snom";
    echo '<br/>$nom "Exemplário" $snom';
    //É importante usar aspas corretamente, por que erros
    //semânticos não aparecem como erro, preste atenção!
    echo "<br/>$nom \"Exemplário\" $snom";
    //Nesse caso, devemos usar uma sequência de escape,
    //para que a string deixa as aspas.

    //!IMPORTANTE!
    //Existem várias outras sequências de escape.
    //!IMPORTANTE!


    ?>
</body>
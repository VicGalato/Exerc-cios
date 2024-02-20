<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Número Gerado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Número Gerado</h1>
    </header>
    <main>
        <?php
        $min = $_GET["min"] ?? "sem número mínimo";
        $max = $_GET["max"] ?? "sem número máximo";
        $num = mt_rand($min, $max);
        //* rand() = rand funciona ao contrário max-min.
        //* mt_rand() = é mais rápido.
        //* random_int() = gera números aleatórios
        //* criptograficamentes seguros.
        echo "Gerando um número aleatório entre <strong>$min</strong> e <strong>$max</strong>";
        echo "</br> Seu número gerado foi <strong>$num</strong>";
        ?>
        <button onclick="javascript:history.go(0)">&#x1F504; Gerar</button>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>
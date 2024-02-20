<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Informação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php
        $num = $_GET["numero"] ?? "sem número";
        $ant = $num-1;
        $suc = $num+1;
        echo "O número escolhido foi <strong>$num</strong>";
        echo "<br/>O seu antecessor é <strong>$ant</strong>";
        echo "<br/>O seu sucessor é <strong>$suc</strong>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>
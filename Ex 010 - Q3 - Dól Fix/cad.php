<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Dólar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversão de Moedas</h1>
    </header>
    <main>
        <?php 
        $real = $_GET["real"] ?? 0;
        $cotacao = 4.96;
        $dol = $real / $cotacao;
        echo "Seus <strong>R$ " . number_format($real, 2, ",", ".") . "</strong> equivalem a <strong>US$ " . number_format($dol,2, ",", ".") . "</strong>";
        echo "<br/> "
        ?>
        <form action="cad.php" method="get">
            <label for="real">Coverter Novamente:</label>
            <input type="number" name="real" idname="idreal" step="0.01">
            <input type="submit" value="Converter">
        </form>
    </main>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>AnaliseDeDivisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1'] ?? 1;
        $valor2 = $_GET['valor2'] ?? 1;
    ?>
    <main>
    <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="valor1">Dividendo:</label>
            <input type="number" name="valor1" id="valor1" value="<?php echo $valor1?>">
            <label for="valor2">Divisor</label>
            <input type="number" name="valor2" id="valor2" value="<?php echo $valor2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
            $dividendo = $valor1;
            $divisor = $valor2;
            $quociente = $dividendo / $divisor;
            $resto = $dividendo % $divisor;
            echo "O dividendo é <Strong>$dividendo</Strong>.";
            echo "</br> O divisor é <Strong>$divisor</Strong>.";
            echo "</br> O quociente é <Strong>$quociente</Strong>.";
            echo "</br> O resto é <Strong>$resto</Strong>.";
        ?>
    </section>
</body>
</html>
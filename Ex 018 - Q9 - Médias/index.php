<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num1 = $_GET['num1'] ?? 0;
        $num2 = $_GET['num2'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 0;

    ?>
    <main>
        <h1>Cálculo de Médias</h1>
        Digite dois números para calcular suas médias: </p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" value="<?=$num1?>">
        <label for="peso1">Peso 1:</label>
        <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" value="<?=$num2?>">
        <label for="peso2">Peso 2:</label>
        <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
        <input type="submit" value="Calcular">
    </main>
    <section>
        <?php
            $ms = ($num1 + $num2) / 2;
            $mp = ($num1 * $peso1 + $num2 * $peso2) / ($peso1 + $peso2);
        ?>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores de <?=$num1?> e <?=$num2?> e seus pesos <?=$peso1?> e <?=$peso2?> respectivamente:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($ms, 2, ',', '.')?>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> entre os valores e seus pesos é igual a <?=number_format($mp, 2, ',', '.')?>.</li>
        </ul>

    </section>
    
</body>
</html>
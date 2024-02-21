<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora do Tempo</title>
</head>
<body>
    <?php
        $num = $_GET['sec'] ?? 0;
    ?>
    <main>
        <h1>Calculadora do Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="GET">
        <label for="sec">Total de segundos:</label>
        <input type="number" name="sec" id="sec" min="1" step="1" value="<?=$num?>">
        <input type="submit" value="Calcular">
    </main>
    <?php
        
        $ano =(int) $num / 31_557_600;
        $resto1 =(int) $num % 31_557_600;
        $mes =(int) $resto1 / 2_629_800;
        $resto2 =(int) $resto1 % 2_629_800;
        $sem =(int) $resto2 / 604_800;
        $resto3 =(int) $resto2 % 604_800;
        $dia =(int) $resto3 / 86_400;
        $resto4 =(int) $resto3 % 86_400;
        $hor =(int) $resto4 / 3_600;
        $resto5 =(int) $resto4 % 3_600;
        $min =(int) $resto5 / 60;
        $resto6 =(int) $resto5 % 60;
        $sec =(int) $resto6;

    ?>
    <section>
        <h2>Total de Tempo</h2>
        Analisando o valor que você digitou, <strong><?=number_format($num, 0, ',', '.')?> segundos</strong> </br> 
        equivalem a um total de:
        <ul>
            <li><?=(int)$ano?> ano(s)</li>
            <li><?=(int)$mes?> mês(es)</li>
            <li><?=(int)$sem?> semana(s)</li>
            <li><?=(int)$dia?> dia(s)</li>
            <li><?=(int)$hor?> hora(s)</li>
            <li><?=(int)$min?> minuto(s)</li>
            <li><?=(int)$sec?> segundo(s)</li>
        </ul>
    </section>
</body>
</html>
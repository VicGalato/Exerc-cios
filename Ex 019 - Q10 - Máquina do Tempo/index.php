<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Máquina do Tempo</title>
</head>
<body>
    <?php 
        $atual = date("Y");
        $nasc = $_GET['nasc']?? '2000';
        $ano = $_GET['ano'] ?? $atual;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="GET">
        <label for="nasc">Em que ano você nasceu?</label>
        <input type="number" name="nasc" id="nasc" max="<?=$ano?>" value="<?=$nasc?>">
        <label for="ano">Quer saber sua idade em que ano?(Atualmente estamos em <strong><?=$atual?></strong>)</label>
        <input type="number" name="ano" id="ano" value="<?=$ano?>">
        <input type="submit" value="Calcular">
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $nasc;
        ?>
        <p>Quem nasceu em <?=$nasc?> terá <strong><?=$idade?> ano(s)</strong> em <?=$ano?>!</P>
    </section>
    
</body>
</html>
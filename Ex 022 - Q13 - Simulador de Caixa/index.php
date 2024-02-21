<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Caixa</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
<body>
    <?php
        $val = $_GET['val'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
        <label for="val">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
        <input type="number" name="val" id="val" min="1" step="1" required value="<?=$val?>">
        <input type="submit" value="Sacar">
        <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$200, R$100, R$50, R$20, R$5, R$2 e R$1</p>
    </main>
    <?php 
        $nota200 = floor($val / 200);
        $resto = $val % 200;

        $nota100 = floor($resto / 100);
        $resto %= 100;

        $nota50 = floor($resto / 50);
        $resto %= 50;

        $nota20 = floor($resto / 20);
        $resto %= 20;

        $nota10 = floor($resto / 10);
        $resto %= 10;

        $nota5 = floor($resto / 5);
        $resto %= 5;

        $nota2 = floor($resto / 2);
        $resto %= 2;
        
        $nota1 = floor($resto / 1);
        $resto %= 1;
    ?>
    <section>
        <h2>Saque de R$<?=number_format($val, 2, ',', '.')?> Realizado</h2>
        <p>Total de notas sacadas:</p>
        <ul>
            <li><img src="imagens/200.jpeg" alt="Nota de 200" class="nota"> x<?=$nota200?></li>
            <li><img src="imagens/100 reais.jpg" alt="Nota de 100" class="nota"> x<?=$nota100?></li>
            <li><img src="imagens/50.jpg" alt="Nota de 50" class="nota"> x<?=$nota50?></li>
            <li><img src="imagens/20.jpg" alt="Nota de 20" class="nota"> x<?=$nota20?></li>
            <li><img src="imagens/10.jpg" alt="Nota de 10" class="nota"> x<?=$nota10?></li>
            <li><img src="imagens/5.jpg" alt="Nota de 5" class="nota"> x<?=$nota5?></li>
            <li><img src="imagens/2.jpg" alt="Nota de 2" class="nota"> x<?=$nota2?></li>
            <li><img src="imagens/1.jpg" alt="Nota de 1" class="nota"> x<?=$nota1?></li>

        </ul>
        
    </section>
</body>
</html>
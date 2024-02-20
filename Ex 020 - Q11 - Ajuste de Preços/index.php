<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $preco =(float) $_GET['preco'] ?? '0.01';
        $reaj = $_GET['reaj'] ?? '0';
    ?>
    <main>
    <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="GET">
        <label for="preco">Preço do produto(R$):</label>
        <input type="number" name="preco" id="preco" min="0.01" step="0.01" value="<?=$preco?>">
        <label for="reaj">Percentual de reajuste: <strong>(<span id="por">?</span>%</strong>)</label>
        <input type="range" name="reaj" id="reaj" step="1" min="0" max="200" oninput="mudaValor()">
        <input type="submit" value="Reajustar">

    </main>
    <?php 
        $atual = $preco / 100;
        $atual = $atual * $reaj;
    ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$ <?=number_format($preco, 2, ',', '.')?> com <strong><?=$reaj?>% de 
        ajuste</strong>,</br> vai passar a custar <strong>R$ <?=number_format($atual, 2, ',', '.')?></strong> 
        a partir de agora.</p>
    </section>
    <script>
        mudaValor()

        function mudaValor() {
            por.innerText = reaj.value;
        }
        </script>
</body>
</html>
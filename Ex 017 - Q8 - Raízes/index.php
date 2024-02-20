<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>Cálculo de Raízes</h1>
        Insira um número para calcular sua raíz quadrada e cubica. </p>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="num">Número:</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Calcular">

    </main>
    <section>
        <h2>Resultados Finais</h2>
        <?php 
            $raizq = sqrt($num);
            $raizc = $num ** (1/3);

            echo "A raíz quadrada de $num é <strong>$raizq</strong>";
            echo "</br>Já a raíz cubica é igual a <strong>$raizc</strong>";
        ?>
    </section>
</body>
</html>
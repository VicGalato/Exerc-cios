<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Cálculo de Raízes</h1>
        Insira um número para calcular sua raíz quadrada e cubica. </p>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="num">Número:</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Calcular">


    </main>
</body>
</html>
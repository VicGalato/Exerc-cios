<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Randomizador de números</title>
    <link rel ="stylesheet" href ="style.css">
</head>
<body>
    <header>
        <h1>Gerador de Números Aleatórios</h1>
    </header>
    <section>
    <?php 
    echo "Digite um número <strong>mínimo</strong> e um <strong>máximo</strong>.";
    ?>
        <form action="cad.php" method="get">
            <label for="min">Mínimo:</label>
            <input type="number" name="min" id="min">
            <label for="max">Máximo:</label>
            <input type="number" name="max" id="max">
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>
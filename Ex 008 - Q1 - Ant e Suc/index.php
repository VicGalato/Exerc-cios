<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digite um número</title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Informe um número</h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="numero">Número:</label>
            <input type="text" name="numero" id="numero">
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>
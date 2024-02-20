<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
     <h1>Analisador de Número Real</h1>
        
        <?php 
        $num = $_GET["num"] ?? "Sem número";
        $int =(int) $num;
        $frac = $num - $int;
        $frac = number_format($frac, 3, ",", ".");
        $num = number_format($num, 3, ",", ".");
        echo " Analisando o número <strong>$num</strong> informado pelo usuário.";
        echo "</br></br>A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") . "</strong>.";
        echo "</br>A parte fracionária do número é <strong>$frac</strong>.";
        ?>
        <p></p>
    <form>
        <label for="num">Número Real:</label>
        <input type="number" name="num" idname="num" step="0.001">
        <input type="submit" value="Analisar">
    </form>

    </main>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>SalarioMinimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario =(float) $_GET['salario'] ?? 0;
        ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="salario">Salário(R$):</label>
        <input type="number" name="salario" id="salario" value="<?php echo $salario ?>" step="0.01">
        Considerando o salário mínimo de <Strong>R$ 1.400,00</Strong>. </p>
        <input type="submit" value="Calcular">
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            $salmin =(float) 1400;
            $quantsal = intdiv($salario, $salmin);
            $salarioint =(int) $salario;
            $restofrac =(float) $salario - $salarioint;
            
            
            //$salario100 =(float) $salario * 100;
            $resto =(int) ($salario % $salmin);
            //$restofrac = $restofrac * 100;
            //$restofrac =(float) $salario % $salmin;
            //$restofrac =(float) $restofrac / 100;
            
            //!Não consegui colocar as decimais no $resto

            //$resto = $resto + $restofrac;

            $salint = $salmin * $quantsal;
            $num = $quantsal * $salmin;
            $num = $num - $salint;
            $restofinal = $num + $resto;
            $restofinal = $restofinal + $restofrac;
            

            echo "Quem recebe salário de <strong>R$ " . number_format($salario, 2, ',', '.') . " </strong> ganha 
            <strong>$quantsal salário(s) mínimo(s)</strong> + R$ " . number_format($restofinal, 2, ',', '.');
        ?>
    </section>
</body>
</html>
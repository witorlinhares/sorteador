<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="assets/favicon.png" type="image/x-icon">
    <title>Sorteador</title>
</head>

<body>
    <main>
    <img src="assets/favicon.png" alt="image">
        <h1>Sorteador Online</h1>
        <?php
        $min = 1;
        $max = 100;
        $num = mt_rand($min, $max);
        echo "<p>Sorteando um número entre <strong>$min</strong> e <strong>$max</strong><br>
    </p><button>Número sorteado <strong>$num</strong></button>"
        ?>
        <div><button onclick="javascript:document.location.reload()">Sortear outro número</button></div>
    </main>
</body>

</html>
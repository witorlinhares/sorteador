<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="assets/image.png" type="image/x-icon">
    <title>Sorteador Online</title>
</head>
<body class="general">
    <main class="container">
        <div class="div-image">
        <img class="image" src="assets/image.png" alt="image">
        </div>
        <div class="div-title">
        <h1 class="title" >Sorteador Online</h1>
        </div>
        <?php
        $min = 1; /*Número mínimo pode ser = ou + que 0*/
        $max = 1000; /*Número máximo deve ser + que o número mínimo*/
        $num = mt_rand($min, $max); /*Determina quais números serão serteados*/
        echo "<p>Sorteando um número entre <strong>$min</strong> e <strong>$max</strong><br></h2>
        <p>Número sorteado <strong>''$num''</strong></p>" /*Número sorteado exibido*/
        ?>
        <div class="div-button">
            <button class="button" onclick="javascript:document.location.reload()">Sortear outro número</button><!--Função que sortea outros números-->
        </div>
    </main>
</body>
</html>

<!-- Desenvolvido por Witor Linhares -->
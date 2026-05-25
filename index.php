<?php
date_default_timezone_set('America/Sao_Paulo');
$data = date("d/m/Y");
$hora = date("H:i:s");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nosso projeto grupo 1</h1>

    <p>Pagina gerada em: <?= $data ?> às <?= $hora ?></p>
</body>
</html>
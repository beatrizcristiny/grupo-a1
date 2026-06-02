<?php
date_default_timezone_set('America/Sao_Paulo');

$pagina = $_GET['pagina'] ?? 'home';

if ($pagina == 'home') {
    $titulo = 'Página Inicial';
    $texto = 'Bem-vindo ao nosso site.';
} elseif ($pagina == 'sobre') {
    $titulo = 'Sobre Nós';
    $texto = 'Conheça mais sobre nossa empresa.';
} elseif ($pagina == 'contato') {
    $titulo = 'Contato';
    $texto = 'Entre em contato conosco.';
} else {
    $titulo = 'Página não encontrada';
    $texto = 'O conteúdo solicitado não existe.';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo ?></title>
</head>
<body>

    <h1><?= $titulo ?></h1>

    <p><?= $texto ?></p>

    <p><strong>Página ativa:</strong> <?= $pagina ?></p>

    <p><strong>Método HTTP:</strong> <?= $_SERVER['REQUEST_METHOD'] ?></p>

    <p><strong>URL acessada:</strong> <?= $_SERVER['REQUEST_URI'] ?></p>

    <p><strong>Hora do servidor:</strong> <?= date('d/m/Y H:i:s') ?></p>

</body>
</html>

<?php

date_default_timezone_set('America/Sao_Paulo');

$data = date("d/m/Y");
$hora = date("H:i:s");

$pagina = $_GET['pagina'] ?? 'home';

if ($pagina == 'home') {
    $tituloPaginaInicial = 'Home';
    $textoBemVindo = 'Bem-vindo à página inicial do projeto.';
}
elseif ($pagina == 'sobre') {
    $tituloPaginaInicial = 'Sobre';
    $textoBemVindo = 'Esta página apresenta informações sobre o projeto e a arquitetura em 3 camadas.';
}
elseif ($pagina == 'contato') {
    $tituloPaginaInicial = 'Contato';
    $textoBemVindo = 'Aqui você encontra informações de contato da equipe.';
}
else {
    $tituloPaginaInicial = 'Página não encontrada';
    $textoBemVindo = 'A página solicitada não existe.';
}

$infoServidor = [
    'Método HTTP' => $_SERVER['REQUEST_METHOD'],
    'URL acessada' => $_SERVER['REQUEST_URI'],
    'Hora atual' => date('H:i:s')
];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title><?= $tituloPaginaInicial ?></title>
</head>

<body>

<header>
    <h1>Programação Web II</h1>
    <h2>Grupo A1 — Arquitetura em 3 Camadas</h2>

    <p>
        Nesta página você consegue ver na prática como as 3 camadas de uma aplicação web funcionam juntas.
        Cada vez que você clica em um botão abaixo, o navegador manda um pedido para o servidor,
        o servidor repassa para o PHP e o PHP decide qual conteúdo mostrar na tela.
    </p>

    <nav>
        <a href="?pagina=home">Home</a>
        <a href="?pagina=sobre">Sobre</a>
        <a href="?pagina=contato">Contato</a>
    </nav>
</header>

<main>

    <div class="card-inicial">
        <h2><?= $tituloPaginaInicial ?></h2>

        <p><?= $textoBemVindo ?></p>

        <p>
            Página atual:
            <strong><?= $pagina ?></strong>
        </p>
    </div>

    <div class="card-camadas2">

        <div class="card-inicio3">
            <h3>Cliente</h3>
            <h4>Navegador</h4>
            <p>HTML · CSS · JS</p>
        </div>

        <p>⇄</p>

        <div class="card-inicio4">
            <h3>Servidor Web</h3>
            <h4>Apache / Nginx</h4>
        </div>

        <p>⇄</p>

        <div class="card-inicio5">
            <h3>Aplicação</h3>
            <h4>PHP / Lógica</h4>
        </div>

    </div>

</main>

<footer>

    <div class="info-reais">

        <h2>Informações reais do servidor</h2>

        <p>
            Essas informações abaixo são geradas pelo PHP em tempo real.
            Elas provam que o PHP está rodando no servidor e não no navegador.
        </p>

        <?php
        foreach ($infoServidor as $chave => $valor) {
            echo "<p><strong>$chave:</strong> $valor</p>";
        }
        ?>

    </div>

    <h2>Como funciona essa página?</h2>

    <p>
        Quando você clica em um dos botões de navegação acima acontece o seguinte:
        o seu navegador manda um pedido para o servidor com a página escolhida na URL.
        O Apache recebe esse pedido e repassa para o PHP processar.
        O PHP lê o que veio na URL usando o $_GET e decide qual título e texto mostrar.
        Por fim o PHP monta o HTML com o conteúdo certo e manda de volta para o navegador exibir.
        Esse ciclo completo é exatamente as 3 camadas funcionando juntas.
    </p>

    <div>
        <a href="?pagina=home">← Voltar para o início</a>
    </div>

    <p>
        Grupo A1 — Programação Web II |
        Página gerada em: <?= $data ?> asr <?= $hora ?>
    </p>

</footer>

</body>
</html>

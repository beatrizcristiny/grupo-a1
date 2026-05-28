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
   
<header>
    <h2>Programação Web II — Aula Invertida — Turma A</h2>
     <h1>Grupo A1 — Introdução a Scripts Lado Servidor</h1>
    <p>
        Neste trabalho vamos mostrar como o PHP funciona no servidor e como as partes de uma aplicação web se comunicam entre si.
        As 3 Camadas de uma Aplicação Web
    </p>
</header>
<main>
    <div class = "card-inicio">
        <h3>Cliente</h3>
        <h4>Navegador</h4>
        <p>É o que o usuário vê e usa no dia a dia, como o Chrome ou Firefox. Ele manda pedidos e recebe as páginas prontas.</p>
        <p>HTML · CSS · JS</p>
    </div>
    <h1>⇄</h1>
    <div class = "card-inicio">
        <h3>Servidor Web</h3>
        <h4>Apache / Nginx</h4>
        <p>É o intermediário. Recebe o pedido do navegador e manda para o PHP processar.</p>
    </div>
    <h1>⇄</h1>
    <div class = "card-inicio">
        <h3>Aplicação</h3>
        <h4>PHP</h4>
        <p>É onde a lógica acontece. O PHP processa tudo e gera o HTML que vai ser enviado pro navegador.</p>
    </div>
    <h2>Tecnologias que usamos neste projeto</h2>
    <div class = "ling">HTML5</div>
    <div class = "ling">CSS3</div>
    <div class = "ling">JavaScript</div>
    <div class = "ling">PHP 8+</div>
    <div class = "ling">Apache / Nginx</div>
</main>
<footer>
    <h2>Nossos Exemplos</h2>
    <div class = "card-foot">
        <h2>Geração Dinâmica de Páginas</h2>
        <p>Aqui mostramos como o PHP consegue gerar informações em tempo real, como a data e hora atual, sem precisar editar o arquivo toda vez.</p>
        <div class = "botao"><a href="">Ver Exemplo →</a></div>
    </div>
    <div class = "card-foot">
        <h2>Arquitetura em 3 Camadas</h2>
        <p>Neste exemplo dá pra ver na prática como funciona o caminho que uma requisição faz: saindo do navegador, passando pelo servidor e chegando no PHP.</p>
        <div class = "botao">Ver <a href="">Exemplo</a> →</div>
    </div>
    <div class = "card-foot">
        <h2>PHP Dinâmico vs HTML Estático</h2>
        <p>Comparamos o que o PHP consegue fazer com o que o HTML puro não consegue, usando uma lista de produtos como exemplo.</p>
        <div class = "botao">Ver <a href="">Exemplo</a> →</div>
    </div>
    
        <p>Grupo A1 programação web II, página gerada em: <?= $data ?> às <?= $hora ?></p>
</footer>
</body>
</html>
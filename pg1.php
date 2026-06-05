<?php
date_default_timezone_set('America/Sao_Paulo');
$data = date("d/m/Y");
$hora = date("H:i:s");

$dias = ["Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado"];
$dia_sem = $dias[date("w")];

$tecnologias = ["HTML5", "CSS3", "PHP 8+", "Apache"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Grupo A1 — Geração Dinâmica de Páginas</h1>
        <h2>Programação Web II — Exemplo 1</h2>
    </header>

<main>
    <p class = "texto">
        O que é geração dinâmica de páginas?
        Geração dinâmica significa que o PHP cria o conteúdo da página no momento em que alguém a acessa. Diferente do HTML puro, onde o conteúdo é fixo, o PHP consegue calcular e gerar informações em tempo real.
    </p>
    
    <h2>Informações geradas pelo PHP</h2>
    <div class="informacoes">
        <p>
            <strong>Data de hoje:</strong>
            <?= $data ?>
        </p>
        <p>
            <strong>Hora atual:</strong>
            <?= $hora ?>
        </p>
        <p>
            <strong>Dia da semana:</strong>
            <?= $dia_sem?>
        </p>
    </div>
    
    <div class= "h2">
        <h2>Tecnologias usadas nesta aplicação</h2>
    </div>
    <div class = "linguagens" >
         <?php foreach($tecnologias as $tecn): ?>
            <li><?= $tecn ?></li>
            <?php endforeach; ?>
    </div>
    
    <div class= "pt2">
        <h2>Por que isso é importante?</h2>
        <p>Se esta fosse uma página HTML pura, a data e hora estariam escritas no código e nunca mudariam. Com o PHP, essas informações são calculadas no servidor toda vez que alguém abre a página. Recarregue a página e veja a hora mudar!</p>
    </div>
</main>

<div class= "botao2"><a href="index.php">← Voltar para o início</a></div>
</body>
</html>




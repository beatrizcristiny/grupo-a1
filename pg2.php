<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Document</title>

</head>
<body>
    <header>
        <h1>Grupo A1 — Arquitetura em 3 Camadas</h1>
        <h2>Programação Web II — Exemplo 2</h2>
        
        <h2>Arquitetura Web em Camadas</h2>
        
        <a href="">Home</a>
        <a href="">Sobre</a>
        <a href="">Contato</a>
        
        
        <div class = "pginicial">
            <h1>Página Inicial</h1>
            
            <p>Bem vindo ao exemplo de arquitetura em camadas!</p>
            
            <p>Página atual: home</p>
        </div>
    </header>


<main>
    <h2>As 3 Camadas desta aplicação:</h2>
    
    <h3>Camada 1</h3>
    <p>
        Cliente / Navegador
        HTML + CSS + JS
    </p>
    
    ↓
    
    <h3>Camada 2</h3>
    <p>
        Servidor Web
        Apache / Nginx
    </p>
    
    ↓
    
    <h3>Camada 3</h3>
    <p>
        Aplicação
        PHP + Lógica
    </p>
</main>


<div>
    <h2>Informações do Servidor (geradas pelo PHP)</h2>
    
    PHP Version:
    8.3.16
    
    Servidor:
    Apache/2.4.62 (Win64) OpenSSL/3.0.15 PHP/8.3.16
    
    Método HTTP:
    GET
    
    IP do Cliente:
    ::1
    
    URL acessada:
    /grupo-a1/exemplos/02-arquitetura-camadas.php
</div>


<footer>
    <h3>Como funciona?</h3>
    
    <p>
        Quando você clica em um dos botões acima acontece o seguinte:
        o navegador manda um pedido com a página escolhida na URL,
        o Apache recebe esse pedido e repassa para o PHP,
        o PHP lê o que veio na URL e decide qual conteúdo mostrar,
        e por fim manda o HTML pronto de volta para o navegador.
        
        Isso é exatamente o ciclo completo das 3 camadas funcionando.
    </p>
    
    
    <div class= "botao3"><a href="">← Voltar para o início</a></div>
</footer>
</body>
</html>
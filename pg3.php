<?php
date_default_timezone_set("America/Sao_Paulo");

$produtos = [
    ["nome" => "Mouse", "preco" => 50.00, "estoque" => 10],
    ["nome" => "Teclado", "preco" => 120.00, "estoque" => 5],
    ["nome" => "Monitor", "preco" => 800.00, "estoque" => 0],
    ["nome" => "Headset", "preco" => 150.00, "estoque" => 3],
    ["nome" => "Webcam", "preco" => 90.00, "estoque" => 0]
];

$totalProdutos = count($produtos);
$disponiveis = 0;
$indisponiveis = 0;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <title>PHP Dinâmico vs HTML Estático</title>
</head>
<body>
<header>
    <h1>PHP Dinâmico vs HTML Estático</h1>
    <div class= "paiestadina">
        <div class= "card-estatico">
            <h2>HTML Estático</h2>
            <ul>
                <li>Conteúdo fixo no arquivo</li>
                <li>Não acessa banco de dados</li>
                <li>Não processa lógica</li>
                <li>Igual para todos os usuários</li>
                <li>Não sabe a data/hora atual</li>
            </ul>
        </div>
   
    
    
        <div class= "card-dinamico">
            <h2>PHP Dinâmico</h2>
            <ul>
                <li>Conteúdo gerado em tempo real</li>
                <li>Consulta banco de dados</li>
                <li>Executa lógica no servidor</li>
                <li>Personaliza por usuário</li>
                <li>Gera data/hora atual</li>
            </ul>
        
        </div>
     </div>
    
</header>

<main>
    <h2>Exemplo prático: lista de produtos gerada pelo PHP.</h2>
    
    
    <p>
    Os dados abaixo foram processados pelo PHP — em uma aplicação real, viriam de um banco de dados.
    O HTML estático não conseguiria fazer isso.
    </p>
    
    <h3>Tabela de Produtos</h2>
    
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Status</th>
        </tr>
    
        <?php foreach ($produtos as $produto): ?>
    
            <?php
            if ($produto["estoque"] > 0) {
                $status = "Disponível";
                $disponiveis++;
            } else {
                $status = "Indisponível";
                $indisponiveis++;
            }
            ?>
    
            <tr>
                <td><?= $produto["nome"] ?></td>
                <td>R$ <?= $produto["preco"] ?></td>
                <td><?= $produto["estoque"] ?></td>
                <td><?= $status ?></td>
            </tr>
    
        <?php endforeach; ?>
    
    </table>
</main>

<footer>
    <h2>Resumo gerado dinamicamente pelo PHP</h2>
    
    <div class = "foot">
        <p>Total de produtos: <?= $totalProdutos ?></p>
        
        <p>Disponíveis: <?= $disponiveis ?></p>
        
        <p>Indisponíveis: <?= $indisponiveis ?></p>
    </div>
    
    
    <p class = "hora">
    Página gerada em:
    <?= date("d/m/Y H:i:s") ?>
    — Tudo isso é calculado na máquina servidora e não no suposto cliente que for acessar a pagina :3
    </p>
    <div class= "botao2"><a href="index.php">← Voltar para o início</a></div>
</footer>

</body>
</html>

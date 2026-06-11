<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    PHP Dinâmico vs HTML Estático
HTML Estático
Conteúdo fixo no arquivo
Não acessa banco de dados
Não processa lógica
Igual para todos os usuários
Não sabe a data/hora atual
PHP Dinâmico
Conteúdo gerado em tempo real
Consulta banco de dados
Executa lógica no servidor
Personaliza por usuário
Gera data/hora atual
Exemplo prático: lista de produtos gerada pelo PHP

Os dados abaixo foram processados pelo PHP — em uma aplicação real, viriam de um banco de dados. O HTML estático não conseguiria fazer isso.

Tabela de produtos

[PHP gera a tabela de produtos aqui]

Resumo gerado dinamicamente pelo PHP

Total de produtos: [PHP mostra o total aqui]

Disponíveis: [PHP mostra a quantidade disponível aqui]

Indisponíveis: [PHP mostra a quantidade indisponível aqui]

Página gerada em: [PHP mostra data e hora atuais aqui] — tudo isso calculado no servidor antes de chegar ao seu navegador.
</body>
</html>
Introdução a Scripts Lado Servidor Grupo A1

Resumo:

O trabalho foi desenvolvido em PHP 8 e cobre todos os critérios da atividade prática de Programação Web II. O projeto mostra a forma visual e funcional de 
como a arquitetura em 3 camadas funciona (Cliente, Servidor Web e Aplicação), e demonstra a prática de como gerar páginas no servidor é diferente de usar HTML 
estático.


Descrição:
O projeto é composto por três páginas dinâmicas interligadas, onde o conteúdo muda de acordo com cada requisição do usuário. A ideia foi simular o fluxo 
completo de dados na Web usando exemplos concretos:

Dados em tempo real: O servidor captura o fuso horário ( America/Sao_Paulo) e usa um array com os dias da semana para descobrir e exibir o dia atual dinamicamente.
Parâmetros via URL: Um superglobal $_GETé usado para criar uma navegação dinâmica entre itens sem precisar duplicar arquivos.
Lógica condicional no servidor: Uma lista de produtos onde o PHP está disponível, o estoque de cada item com if/elsee já entrega o HTML pronto com os totais 
calculados  disponíveis, indisponíveis e total geral.

O sistema funciona como um guia prático sobre como funciona uma Web moderna. O usuário pode navegar pelas páginas, ver as variáveis ​​de ambiente do servidor 
( $_SERVER) em tempo real, entender o ciclo de vida de uma requisição HTTP e interagir com uma tabela de produtos que aplica regras de negócio diretamente 
no servidor.

Tecnologias  Utilizadas

Linguagem de Aplicação: PHP  (Processamento lógico e estruturação de dados).
HTML5 e CSS3  estrutura e estilização, com suporte a Dark Mode e responsividade via Media Queries
Apache / Nginx  servidor web responsável por receber as requisições e repassar ao PHP

Finalidade

O projeto serve para consolidar na prática os conceitos da Aula Invertida. Ele deixa claro que, diferente do HTML estático com conteúdo fixo,
o PHP consegue personalizar a resposta para cada acesso, proteger a lógica da aplicação e tornar o sistema escalável.


Arquitetura do Projeto

O projeto foi dividido em páginas independentes que seguem o modelo de 3 camadas. Abaixo está explicado o que cada arquivo faz:

1. Página inicial ( index.php): Apresenta o tema do projeto e serve de ponto de entrada para os três exemplos. No rodapé, já mostra a primeira demonstração de PHP dinâmica: os dados e a hora exatas em que o servidor processou a página.

2. Geração de dados em tempo real ( pg1.php):Mostra como o PHP funciona com dados e horários. Uma matriz com os nomes dos dias da semana é indexada pelo retorno de date("w")para exibir o dia atual. Ao recarregar a página, o planejamento muda — o que deixa claro que o dado está sendo calculado no servidor, não fixado no HTML.

3. Navegação dinâmica e variáveis ​​do servidor ( pg2.php):

Exemplo direto de comunicação entre navegador e aplicação:
Use o parâmetro da URL $_GET['pagina'] ?? 'home'para if / elseif / elsedecidir qual título e texto serão exibidos.
Mostra uma tabela com dados reais da superglobal $_SERVER, incluindo o método HTTP usado ( REQUEST_METHOD) e a URL acessada ( REQUEST_URI).


4. PHP dinâmico vs HTML estático — lista de produtos ( pg3.php)

Um array multidimensional representa um catálogo de produtos (nome, preço e estoque). O PHP percorre essa lista com foreach, disponibiliza o estoque de cada 
item e define o status como "Disponível" ou "Indisponível". Os totalizadores (totais, disponíveis e indisponíveis) são calculados automaticamente e exibidos 
no rodapé da página.


Estrutura do Repositório

index.php     # Página inicial do Grupo A1
pg1.php       # Exemplo 1: dados temporais gerados em tempo real
pg2.php       # Exemplo 2: arquitetura 3 camadas e superglobais
pg3.php       # Exemplo 3: PHP dinâmico vs HTML estático (lista de produtos)
style.css     # Estilo da página index.php
style2.css    # Estilo da pg1.php
style3.css    # Estilo da pg2.php (esquema de cores das 3 camadas)
style4.css    # Estilo da pg3.php (layout e tabela de produtos)

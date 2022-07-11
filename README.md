# WebSocketPedidos-PHP
Exemplo de webSocket com php utilizando a biblioteca Ratchet, foi criado um servidor socket que carrega novos pedidos em tempo real no painel Admin, sem a necessiade de refresh na página


## Funcionalidades

- Front para realizar pedidos
- Dados de produtos sendo carregado de api
- pedidos sendo carregados no admin em tempo real


## Stack utilizada

**Front-end:** Html, css, bootstrap 5 e javascript

**Back-end:** PHP


## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/cesar99144/WebSocketPedidos-PHP
```

Entre no diretório do projeto

```bash
  cd WebSocketPedidos-PHP
```

Instale as dependências

```bash
  composer install
```

Inicie o sistema
(Executar na raíz do projeto)

```bash
  php -S localhost:8080 
```

Inicie o servidor socket

```bash
  php pedidos.php
```

## Demonstração
<img src="assets/ImagensProjetos/Pedidos.gif" alt="drawing">
# Toshiro Shibakita - Microsserviços com Docker

Este repositório demonstra a utilização prática do Docker no contexto de microsserviços, utilizando uma aplicação simples como exemplo.

## Pré-requisitos

- Docker
- Docker Compose

## Como executar

1. Clone este repositório:
   ```bash
   git clone https://github.com/usuario/toshiro-shibakita.git
   ```
2. Configure o banco de dados utilizando o script `banco.sql`.
3. Construa e execute os containers Docker:
   ```bash
   docker-compose up --build
   ```
4. Acesse a aplicação no navegador utilizando o endereço configurado.

---

## Fluxo Geral do Projeto

1. **Configuração do Banco de Dados**:
   - O script `banco.sql` é executado para criar a tabela `dados` no banco de dados MySQL.

2. **Execução da Aplicação PHP**:
   - O arquivo `index.php` é acessado via navegador.
   - Ele se conecta ao banco de dados, insere registros aleatórios e exibe mensagens de sucesso ou erro.

3. **Balanceamento de Carga**:
   - O Nginx, configurado pelo `nginx.conf`, distribui as requisições entre os servidores backend definidos no upstream.

4. **Containerização**:
   - O `dockerfile` é usado para criar uma imagem Docker que executa o Nginx com as configurações personalizadas.

---

## Objetivo do Projeto

Este repositório tem como objetivo demonstrar como configurar um ambiente básico de microsserviços utilizando:

- Docker para containerização de serviços.
- Nginx como balanceador de carga.
- Uma aplicação PHP para interagir com um banco de dados MySQL.
- Scripts SQL para configurar o banco de dados.

Ele é útil para aprendizado e prática de conceitos como balanceamento de carga, integração de aplicações com bancos de dados e uso de Docker em ambientes de microsserviços.
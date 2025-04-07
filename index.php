<?php
// filepath: c:\Users\vialo\OneDrive\Documents\GitHub\AlexRabelo\toshiro-shibakita\toshiro-shibakita\index.php

// Exibe a versão do PHP no navegador
echo "Versão do PHP: " . phpversion() . "<br>";

// Configurações de conexão com o banco de dados usando variáveis de ambiente
$servername = getenv('DB_HOST') ?: '54.234.153.24'; // Endereço do servidor MySQL
$username = getenv('DB_USER') ?: 'root';           // Nome de usuário do banco de dados
$password = getenv('DB_PASS') ?: 'Senha123';       // Senha do banco de dados
$dbname = getenv('DB_NAME') ?: 'meubanco';         // Nome do banco de dados

// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Gera valores aleatórios para inserção no banco de dados
$alunoID = rand(1, 1000);
$nome = "Nome" . rand(1, 100);
$sobrenome = "Sobrenome" . rand(1, 100);
$endereco = "Endereco" . rand(1, 100);
$cidade = "Cidade" . rand(1, 100);
$host = gethostname(); // Obtém o nome do host atual

// Cria a query SQL para inserir os dados na tabela
$sql = "INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host)
VALUES ('$alunoID', '$nome', '$sobrenome', '$endereco', '$cidade', '$host')";

// Executa a query e verifica se foi bem-sucedida
if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso!<br>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
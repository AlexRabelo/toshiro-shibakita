-- Seleciona o banco de dados a ser utilizado
USE meubanco;

-- Remove a tabela 'dados' se ela já existir
DROP TABLE IF EXISTS dados;

-- Cria a tabela 'dados' para armazenar informações dos alunos
CREATE TABLE dados (
    AlunoID INT PRIMARY KEY,       -- Identificador único do aluno
    Nome VARCHAR(50),              -- Nome do aluno
    Sobrenome VARCHAR(50),         -- Sobrenome do aluno
    Endereco VARCHAR(100),         -- Endereço do aluno
    Cidade VARCHAR(50),            -- Cidade do aluno
    Host VARCHAR(50)               -- Nome do host onde o registro foi criado
);
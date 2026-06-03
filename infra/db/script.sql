--cria banco de dados
CREATE DATABASE sistema_simples_m1;

--seleciona o banco para uso
USE sistema_simples_m1;

--cria a tabela de usuario
CREATE TABLE usuarios (
    -- identifica unico usuario
    id INT AUTO_INCREMENT PRIMARY KEY,

    -- nome do usuario para login
    usuario VARCHAR(87) NOT NULL,

    -- senha do usuario 
    senha VARCHAR(255) NOT NULL
);
    -- Insere um usuario adm para teste
INSERT INTO usuarios (usuario, senha) VALUES ('admin','123');
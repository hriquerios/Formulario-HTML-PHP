-- Criação do Banco de Dados
CREATE DATABASE IF NOT EXISTS `formulario-cadastro`;

-- Seleciona o Banco de Dados
USE `formulario-cadastro`;

-- Criação da Tabela 'usuarios'
CREATE TABLE IF NOT EXISTS `usuarios` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(255) NOT NULL,
    `cpf` VARCHAR(11) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `telefone` VARCHAR(12) NOT NULL,
    `genero` VARCHAR(20) NOT NULL,
    `datanascimento` DATE NOT NULL,
    `rua` VARCHAR(255) NOT NULL,
    `num` INT NOT NULL,
    `complemento` VARCHAR(20),
    `bairro` VARCHAR(255) NOT NULL,
    `cidade` VARCHAR(255) NOT NULL,
    `uf` VARCHAR(2) NOT NULL
);
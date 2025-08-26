-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Ago-2023 às 19:27
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aula0108`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

-- CREATE DATABASE atividade01;
USE atividade01;

DROP TABLE IF EXISTS `pessoas`;
CREATE TABLE IF NOT EXISTS `pessoas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `email`) VALUES
(1, 'Ana', 'ana@email'),
(2, 'Bruno', 'bruno@email'),
(3, 'Carlos', 'carlos@email'),
(5, 'Edith', 'edith@email');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefones`
--

DROP TABLE IF EXISTS `telefones`;
CREATE TABLE IF NOT EXISTS `telefones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPessoa` int(11) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `telefones`
--

INSERT INTO `telefones` (`id`, `idPessoa`, `telefone`) VALUES
(1, 1, '(48)91111-1111'),
(2, 2, '(48)92222-2222'),
(3, 3, '(48)93333-3333'),
(4, 1, '(48)94444-4444'),
(5, 5, '(48)95555-5555');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- QUESTÃO 1
SELECT * FROM pessoas;
-- QUESTÃO 2
SELECT nome, email FROM pessoas ORDER BY email DESC;
-- QUESTÃO 3
SELECT * FROM pessoas, telefones WHERE pessoas.id = telefones.idPessoa;
-- QUESTÃO 4
SELECT nome, telefone FROM pessoas, telefones WHERE pessoas.id = telefones.idPessoa;
-- QUESTÃO 5
SELECT telefone FROM telefones WHERE idPessoa = 1;
-- QUESTÃO 6
SELECT * FROM PESSOAS;
UPDATE pessoas SET nome = "Gabriel" WHERE nome LIKE "Ana";
UPDATE pessoas SET nome = "Clara" WHERE nome LIKE "Bruno";
UPDATE pessoas SET nome = "Mirela" WHERE nome LIKE "Carlos";
UPDATE pessoas SET nome = "Yuri" WHERE nome LIKE "Edith";
-- QUESTÃO 7
SELECT nome FROM pessoas WHERE Id NOT IN (SELECT IdPessoa FROM telefones ORDER BY telefone DESC);
-- QUESTÃO 8
SELECT nome, email FROM pessoas WHERE Id NOT IN (SELECT IdPessoa FROM telefones GROUP BY IdPessoa);
-- QUESTÃO 9
SELECT * FROM telefones;
UPDATE telefones SET telefone = concat("(48)9", telefone);
INSERT INTO telefones(IdPessoa, telefone) VALUES ("1", "400-2892");
UPDATE telefones SET telefone = concat("(48)9", telefone)  WHERE telefone NOT LIKE ("(48)9%");
-- QUESTÃO 10
DELETE FROM pessoas WHERE Id NOT IN (SELECT IdPessoa FROM telefones GROUP BY IdPessoa);
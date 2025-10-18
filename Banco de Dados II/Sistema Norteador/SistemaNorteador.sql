DROP DATABASE IF EXISTS SistemaNorteador;
CREATE DATABASE SistemaNorteador;
USE SistemaNorteador;

/*
TABELAS:
- CLIENTES
UMA PRA PESSOA FÍSICA E UMA PRA PESSOA JURÍDICA
UMA PARA CADA DETALHE DO ENDEREÇO
ID DO CLIENTE, NOME, SOBRENOME, TELEFONE PRINCIPAL, E-MAIL, PONTOS
- ENDERECOCLIENTE
ID DO CLIENTE, CIDADE, BAIRRO, RUA, NUMERO
- VEÍCULOS
ID DO VEÍCULO, PLACA, MARCA, MODELO, CHASSI, COR
- ORDENS DE SERVIÇO
ID DA ORDEM, ID DO CLIENTE, ID DO VEÍCULO, HORA, DIA, ESTADO DA ORDEM
*/

CREATE TABLE CLIENTES (
idCliente INT NOT NULL AUTO_INCREMENT,
nomeCliente VARCHAR(20),
sobrenomeCliente VARCHAR(20),
telefonePrincipal CHAR(14),
email VARCHAR(50),
pontos INT NOT NULL,
PRIMARY KEY (idCliente)
) Engine InnoDB;

CREATE TABLE PESSOAFISICA (
idCliente INT,
CPF CHAR(15),
PRIMARY KEY (idCliente),
FOREIGN KEY (idCliente) REFERENCES CLIENTES (idCliente)
) Engine InnoDB;

CREATE TABLE PESSOAJURIDICA (
idCliente INT,
CNPJ CHAR(18),
PRIMARY KEY (idCliente),
FOREIGN KEY (idCliente) REFERENCES CLIENTES (idCliente)
) Engine InnoDB;

CREATE TABLE ENDERECOS (
idCliente INT,
cidade VARCHAR(40),
bairro VARCHAR(40),
rua VARCHAR(60),
numero VARCHAR(5),
PRIMARY KEY (idCliente),
FOREIGN KEY (idCliente) REFERENCES CLIENTES (idCliente)
) Engine InnoDB;

CREATE TABLE VEICULOS (
idVeiculo INT NOT NULL AUTO_INCREMENT,
idCliente INT,
placa CHAR(8),
marca VARCHAR(20),
modelo VARCHAR(20),
chassi VARCHAR(20),
cor VARCHAR(20),
PRIMARY KEY (idVeiculo),
FOREIGN KEY (idCliente) REFERENCES CLIENTES (idCliente)
) Engine InnoDB;

CREATE TABLE ORDENS (
idOrdem INT NOT NULL AUTO_INCREMENT,
idCliente INT,
idVeiculo INT,
horaOrdem CHAR(5),
diaOrdem CHAR(10),
estadoOrdem VARCHAR(15),
PRIMARY KEY (idOrdem),
FOREIGN KEY (idCliente) REFERENCES CLIENTES (idCliente),
FOREIGN KEY (idVeiculo) REFERENCES VEICULOS (idVeiculo)
) Engine InnoDB;

-- INSERÇÃO DE DADOS (10 TUPLAS POR TABELA)
INSERT INTO CLIENTES (nomeCliente, sobrenomeCliente, telefonePrincipal, email, pontos) VALUES 
("Gabriel", "Ribeiro", "(48)99546-2648", "Gabriel@gmail.com", 5),
("Clara", "Luna", "(48)96816-5541", "Clara@gmail.com", 10),
("Guilherme", "Souza", "(48)96546-5616", "Guisouza@gmail.com", 15),
("Laura", "Muller", "(48)92947-8616", "Lauller@gmail.com", 20),
("Lucas", "Bonfim", "(48)97651-1654", "Lucas@gmail.com", 25),
("Giovanna", "Antunes", "(48)93541-9631", "Gigi@gmail.com", 30),
("Aline", "Barros", "(48)92854-6853", "Ali@gmail.com", 12),
("Taylor", "Swift", "(48)99546-2648", "Swifters@gmail.com", 6),
("Jonas", "Silva", "(48)97948-5231", "JonasBrother@gmail.com", 18),
("Sofia", "Santos", "(48)94664-6165", "SofiSantos@gmail.com", 26);

INSERT INTO ENDERECOS (idCliente, cidade, bairro, rua, numero) VALUES 
(1, "Joinville", "Vila Nova", "Rua São Firmino", 1),
(2, "Florianópolis", "Armação", "Rua Doze de Outubro", 10),
(3, "Blumenau", "Glória", "Rua da Glória", 20),
(4, "Chapecó", "Efapi", "Rua Tulipa", 25),
(5, "Itajaí", "São Vicente", "Rua Urubici", 30),
(6, "Navegantes", "São Paulo", "Rua Monte Sião", 50),
(7, "Imbituba", "Campestre", "Rua Valentim Silva", 80),
(8, "Garopaba", "Areias de Palhocinha", "Rua Ametista", 100),
(9, "São José", "Forquilhinhas", "Rua Pedro Jacinto", 120),
(10, "Biguaçu", "Bom Viver", "Rua Virgílio Ceron", 150);

INSERT INTO PESSOAFISICA (idCliente, CPF) VALUES
(1, "111.222.333-99"),
(2, "222.333.444-22"),
(3, "333.444.555-11"),
(4, "123.456.789-00"),
(5, "444.555.666-22"),
(6, "555.666.777-44"),
(7, "666.777.888-10"),
(8, "777.888.999-56"),
(9, "888.999.111-12"),
(10, "555.666.444-27");

INSERT INTO PESSOAJURIDICA (idCliente, CNPJ) VALUES
(1 , "12.345.678/0001-00"),
(2 , "22.444.555/0001-00"),
(3 , "33.555.777/0001-00"),
(4 , "11.333.666/0001-00"),
(5 , "88.999.333/0001-00"),
(6 , "44.666.888/0001-00"),
(7 , "11.777.888/0001-00"),
(8 , "23.547.890/0001-00"),
(9 , "54.670.514/0001-00"),
(10 , "98.765.432/0001-00");

INSERT INTO VEICULOS (idCliente, placa, marca, modelo, chassi, cor) VALUES
(1, "XXX-1111", "Fiat", "SUV", "Monobloco", "Preto"),
(2, "YYY-5555", "Renault", "Sedan", "Misto", "Preto"),
(3, "ZZZ-8888", "Volkswagen", "Sedan", "Monobloco", "Cinza"),
(4, "ABC-1234", "BYD", "SUV", "Longaria", "Branco"),
(7, "DDD-2255", "Toyota", "Picape", "Longarina", "Verde"),
(2, "BCA-1551", "Jeep", "SUV", "Longarina", "Azul-marinho"),
(4, "GGG-9999", "Hyundai", "Sedan", "Monobloco", "Cinza-escuro"),
(8, "MEM-2012", "Chevrolet", "Esportivo", "Tubular", "Amarelo"),
(7, "BIK-7777", "Nissan", "Sedan", "Monobloco", "Vermelho"),
(1, "FLG-9651", "Mercedes", "Esportivo", "Tubular", "Laranja");

INSERT INTO ORDENS (idCliente, idVeiculo, horaOrdem, diaOrdem, estadoOrdem) VALUES
(1, 1, "12:00", "04/10/2025", "ABERTA"),
(2, 2, "15:50", "12/11/2025", "FECHADA"),
(3, 3, "13:45", "23/10/2025", "ABERTA"),
(4, 4, "16:00", "17/12/2025", "ABERTA"),
(5, 5, "20:20", "09/11/2025", "FECHADA"),
(6, 6, "15:20", "21/12/2025", "CANCELADA"),
(7, 7, "14:30", "02/12/2025", "ABERTA"),
(8, 8, "18:20", "13/08/2025", "FECHADA"),
(9, 9, "17:55", "25/11/2025", "CANCELADA"),
(10, 10, "19:20", "15/12/2025", "FECHADA");

SELECT * FROM CLIENTES;
SELECT * FROM ENDERECOS;
SELECT * FROM VEICULOS;
SELECT * FROM ORDENS;

-- CRIAR 15 CONSULTAS COM JOIN (MÍNIMO 3 COM MULTIPLOS JOINS)
-- 6 COM NATURAL JOIN
SELECT CLIENTES.nomeCliente, ENDERECOS.cidade FROM CLIENTES NATURAL JOIN ENDERECOS;

SELECT CLIENTES.nomeCliente, ORDENS.idOrdem FROM CLIENTES NATURAL JOIN ORDENS;

SELECT CLIENTES.nomeCliente, VEICULOS.modelo, VEICULOS.cor FROM CLIENTES NATURAL JOIN VEICULOS;

SELECT VEICULOS.marca, ORDENS.estadoOrdem FROM VEICULOS NATURAL JOIN ORDENS;

SELECT CLIENTES.nomeCliente, CLIENTES.sobrenomeCliente, VEICULOS.placa FROM CLIENTES NATURAL JOIN VEICULOS;

SELECT CLIENTES.nomeCliente, ORDENS.estadoOrdem FROM CLIENTES NATURAL JOIN ORDENS;
-- -------------------------------------------
-- 6 COM INNER JOIN ÚNICO
SELECT VEICULOS.marca, ORDENS.horaOrdem FROM VEICULOS INNER JOIN ORDENS ON VEICULOS.idVeiculo = ORDENS.idVeiculo;

SELECT VEICULOS.marca, ORDENS.diaOrdem FROM VEICULOS INNER JOIN ORDENS ON VEICULOS.idVeiculo = ORDENS.idVeiculo;

SELECT CLIENTES.idCliente, CLIENTES.nomeCliente, ENDERECOS.cidade FROM CLIENTES INNER JOIN ENDERECOS ON CLIENTES.idCliente = ENDERECOS.idCliente;

SELECT VEICULOS.placa, ORDENS.estadoOrdem FROM VEICULOS INNER JOIN ORDENS ON VEICULOS.idVeiculo = ORDENS.IdVeiculo;

SELECT CLIENTES.nomeCliente, COUNT(VEICULOS.idVeiculo) AS "Número de Carros" FROM CLIENTES INNER JOIN VEICULOS ON CLIENTES.idCliente = VEICULOS.idCliente
GROUP BY nomeCliente HAVING COUNT(idVeiculo) > 1;

SELECT ENDERECOS.cidade, ORDENS.diaOrdem, ORDENS.horaOrdem FROM ENDERECOS INNER JOIN ORDENS ON ENDERECOS.idCliente = ORDENS.idCliente;
-- --------------------------------------------
-- E AGORA AS 3 COM MÚLTIPLOS JOINS (2 OU MAIS)
SELECT CLIENTES.nomeCliente, ENDERECOS.cidade, ORDENS.diaOrdem FROM CLIENTES INNER JOIN ENDERECOS ON CLIENTES.idCliente = ENDERECOS.idCliente
INNER JOIN ORDENS ON ENDERECOS.idCliente = ORDENS.idCliente;

SELECT CLIENTES.nomeCliente, VEICULOS.placa, ORDENS.estadoOrdem FROM CLIENTES INNER JOIN VEICULOS ON CLIENTES.idCLiente = VEICULOS.idCliente
INNER JOIN ORDENS ON VEICULOS.idVeiculo = ORDENS.idVeiculo;

SELECT CLIENTES.nomeCliente, CLIENTES.sobrenomeCliente, ENDERECOS.cidade, VEICULOS.marca, ORDENS.diaOrdem
FROM CLIENTES INNER JOIN ENDERECOS ON CLIENTES.idCliente = ENDERECOS.idCliente
INNER JOIN VEICULOS ON ENDERECOS.idCliente = VEICULOS.idCliente
INNER JOIN ORDENS ON VEICULOS.idVeiculo = ORDENS.idVeiculo;

-- CRIAÇÃO DE UMA VIEW
CREATE VIEW pedidosAbertos AS
SELECT CLIENTES.nomeCliente, CLIENTES.sobrenomeCliente, VEICULOS.marca, ORDENS.estadoOrdem 
FROM CLIENTES INNER JOIN VEICULOS ON CLIENTES.idCliente = VEICULOS.idCliente
INNER JOIN ORDENS ON VEICULOS.idCliente = ORDENS.idCliente WHERE ORDENS.estadoOrdem LIKE "%ABERTA%";

SELECT * FROM pedidosAbertos;

-- DROP VIEW pedidosAbertos || PARA CASO QUEIRA REFAZER A VIEW

-- CRIAÇÃO DE UMA PROCEDURE
DELIMITER \\

-- SEÇÃO PARA SER CONFERIDA SOBRE A PROCEDURE

CREATE PROCEDURE avaliarCliente(IN nomeCliente VARCHAR(20), IN idCliente INT, OUT nomeSaidaCliente VARCHAR(20), OUT QuantidadeCarros INT, OUT condicao VARCHAR(8))
BEGIN
SELECT CLIENTES.nomeCliente, COUNT(VEICULOS.idCliente), CASE
	WHEN COUNT(VEICULOS.idCliente) >= 2 THEN "Rico"
    ELSE "Padrão"
    END AS "Condição" INTO condicao
FROM CLIENTES INNER JOIN VEICULOS ON CLIENTES.idCliente = VEICULOS.idCliente
GROUP BY nomeCliente HAVING COUNT(VEICULOS.idCliente) > 0;
END \\

CALL avaliarCliente(@nomeCliente, @idCliente, @nomeSaidaCliente, @QuantidadeCarros, @condicao);

SELECT @nomeSaidaCliente AS "Nome do Cliente",
	   @QuantidadeCarros AS "Quantidade de Carros",
	   @condicao AS "Condição do Cliente";




SELECT CLIENTES.nomeCliente AS "Nome do Cliente", COUNT(VEICULOS.idCliente) AS "Quantidade de Carros" , CASE
	WHEN COUNT(VEICULOS.idCliente) >= 2 THEN "Rico"
    ELSE "Padrão"
    END AS "Condição"
FROM CLIENTES INNER JOIN VEICULOS ON CLIENTES.idCliente = VEICULOS.idCliente
GROUP BY nomeCliente HAVING COUNT(VEICULOS.idCliente) > 0;

 


DROP DATABASE IF EXISTS Papelaria_09_09;
CREATE DATABASE Papelaria_09_09;
USE Papelaria_09_09;

CREATE TABLE FORNECEDORES(
IdFornecedor INT NOT NULL,
NomeFornecedor VARCHAR(255),
EmailFornecedor VARCHAR(1024),
TelefoneFornecedor VARCHAR(25),
PRIMARY KEY (IdFornecedor)
) Engine InnoDB;

CREATE TABLE PRODUTOS(
IdProduto INT NOT NULL,
NomeProduto VARCHAR(255),
DescricaoProduto TEXT,
PesoProduto FLOAT,
PRIMARY KEY (IdProduto)
) Engine InnoDB;

CREATE TABLE ESTOQUE(
IdEstoque INT NOT NULL,
IdFornecedor INT NOT NULL,
IdProduto INT NOT NULL,
Disponiveis INT NOT NULL,
Custo FLOAT,
PRIMARY KEY (IdEstoque),
FOREIGN KEY (IdFornecedor) REFERENCES FORNECEDORES (IdFornecedor)
) Engine InnoDB;

CREATE TABLE PEDIDOS(
IdPedidos INT NOT NULL,
IdFornecedor INT NOT NULL,
IdProduto INT NOT NULL,
Quantidade INT NOT NULL,
Valor FLOAT,
PRIMARY KEY (IdPedidos),
FOREIGN KEY (IdFornecedor) REFERENCES FORNECEDORES (IdFornecedor)
) Engine InnoDB;

-- POVOAMENTO DAS TABELAS
-- FORNECEDORES:
INSERT INTO FORNECEDORES (IdFornecedor, NomeFornecedor, EmailFornecedor, TelefoneFornecedor) VALUES 
('1111', 'Gerdau', 'Gerdau@gmail.com', '47956372891'),
('2222', 'Michelin', 'Michelin@gmail.com', '48957482231'),
('3333', 'Cassol', 'Cassol@gmail.com', '47935276750'),
('4444', 'Leroy Merlin', 'Leroymerlin@gmail.com', '48907653921'),
('5555', 'Balarotti', 'Balarotti@gmail.com', '4739267748');

-- PRODUTOS:
INSERT INTO PRODUTOS (IdProduto, NomeProduto, DescricaoProduto, PesoProduto) VALUES
('111', 'Solda Escama', 'Solda para obras, resulta em formato de escamas', '5'),
('222', 'Revestimento Borracha', 'Revestimento para produtos caseiros', '8'),
('333', 'Kit de Cerâmica', 'Kit completo de cerâmica contendo 24 peças', '12'),
('444', 'Stand de Madeira', 'Stand de madeira com 2 gavetas', '42'),
('555', 'Kit de Ferramentas', 'Kit de ferramentas Bosch completo', '8');

-- ESTOQUE:
INSERT INTO ESTOQUE (IdEstoque, IdFornecedor, IdProduto, Disponiveis, Custo) VALUES
('11', '1111', '111', '4', '6000'),
('22', '2222', '222', '10', '700'),
('33', '3333', '333', '6', '500'),
('44', '4444', '444', '4', '1200'),
('55', '5555', '555', '7', '350');

-- PEDIDOS:
INSERT INTO PEDIDOS (IdPedidos, IdFornecedor, IdProduto, Quantidade, Valor) VALUES
('1', '1111', '111', '4', '10000'),
('2', '2222', '222', '6', '1000'),
('3', '3333', '333', '1', '1200'),
('4', '4444', '444', '1', '2000'),
('5', '5555', '555', '4', '850');

-- Mostrar a lista de fornecedores dos produtos que aparecem em pedidos;
SELECT NomeFornecedor FROM FORNECEDORES f JOIN PEDIDOS p ON f.idFornecedor = p.IdFornecedor; 


-- Mostrar a lista de fornecedores em ordem alfabética e sem repetições
SELECT DISTINCT * FROM FORNECEDORES ORDER BY NomeFornecedor;


-- Mostrar a lista de fornecedores com o nome dos produtos fornecidos
SELECT NomeFornecedor, NomeProduto FROM FORNECEDORES f JOIN PEDIDOS p ON f.IdFornecedor = p.IdFornecedor JOIN PRODUTOS p1 ON p.IdProduto = p1.IdProduto;


-- Mostrar a lista de fornecedores com o valor total de vendas
SELECT NomeFornecedor, Valor FROM FORNECEDORES f JOIN PEDIDOS p ON f.IdFornecedor = p.IdFornecedor;


-- Mostrar a lista completa de pedidos com as dados de cada produto;
SELECT * FROM PEDIDOS p JOIN PRODUTOS p1 ON p.IdProduto = p1.IdProduto;


-- Mostre uma tabela com Quantidade, Nome do Produto, Peso do produto e Peso Total do pedido(quantidade * peso)
SELECT Quantidade AS 'Quantidade', NomeProduto AS 'Nome do Produto', PesoProduto AS 'Peso do Produto', (Quantidade * PesoProduto) AS 'Peso Total' 
FROM PEDIDOS p1 JOIN PRODUTOS p2 ON p1.IdProduto = p2.IdProduto; 


-- Inclua na tabela anterior o nome e email do fornecedor.
SELECT NomeFornecedor AS 'Nome do Fornecedor', EmailFornecedor AS 'Email do Fornecedor', Quantidade AS 'Quantidade', 
NomeProduto AS 'Nome do Produto', PesoProduto AS 'Peso do Produto', (Quantidade * PesoProduto) AS 'Peso Total' FROM FORNECEDORES f1 JOIN PEDIDOS p1 ON
f1.IdFornecedor = p1.IdFornecedor JOIN PRODUTOS p2 ON p1.IdProduto = p2.IdProduto; 


-- Mostrar a lista de produtos e seus fornecedores para os produtos que não estejam disponíveis;
SELECT NomeProduto, NomeFornecedor FROM FORNECEDORES f1 JOIN ESTOQUE e1 ON f1.IdFornecedor = e1.IdFornecedor 
JOIN PRODUTOS p2 ON e1.IdProduto = p2.IdProduto WHERE Disponiveis = 0;


-- Inclua os dados dos produtos na pesquisa anterior
SELECT * FROM PRODUTOS p1 JOIN ESTOQUE e1 ON p1.IdProduto = e1.IdProduto
JOIN FORNECEDORES f1 ON e1.IdFornecedor = f1.IdFornecedor WHERE Disponiveis = 0; 


-- Ajuste a tabela anterior para apresentar somente dados amigáveis para humanos
SELECT NomeFornecedor, NomeProduto, Disponiveis, Custo FROM PRODUTOS p1 JOIN ESTOQUE e1 ON p1.IdProduto = e1.IdProduto
JOIN FORNECEDORES f1 ON e1.IdFornecedor = f1.IdFornecedor;


-- Mostre uma tabela com o total disponível de cada produto em estoque por fornecedor
SELECT NomeFornecedor, Disponiveis FROM FORNECEDORES f1 JOIN ESTOQUE e1 ON f1.IdFornecedor = e1.IdFornecedor;

-- DESAFIO
INSERT INTO ESTOQUE (IdFornecedor, IdProduto, Disponiveis, Custo)
SELECT FORNECEDORES.IdFornecedor, PRODUTOS.IdProduto, PEDIDOS.Quantidade, (PEDIDOS.Valor/PEDIDOS.Quantidade) FROM FORNECEDORES
JOIN
PEDIDOS
ON
FORNECEDORES.IdFornecedor = PEDIDOS.IdFornecedor
JOIN
PRODUTOS
ON
PEDIDOS.IdProduto = PRODUTOS.IdProduto;
-- INSERT INTO SELECT IdFornecedor, IdProduto, Disponiveis, Custo FROM FORNECEDORES f1 JOIN PEDIDOS p1 ON f1.IdFornecedores = p1.IdFornecedores JOIN PRODUTOS p2 ON p1.IdProdutos = p2.IdProdutos VALUES ('1', '3', '200', '0.12');
DROP DATABASE IF EXISTS Atividade_procedures;
CREATE DATABASE Atividade_procedures;
USE Atividade_procedures;

create table produtos(
	idProduto int auto_increment,
    nome varchar(1024) not null,
    descricao text,
    preco decimal(10,2) not null,
    primary key(idProduto)
)engine=innodb;

create table descontos(
	idDesconto int auto_increment,
    idProduto int not null unique,
    porcentagem int not null,
    primary key(idDesconto),
    foreign key(idProduto) references produtos(idProduto)
)engine=innodb;

insert into produtos(nome, preco)
	value("Teclado",20.5),("Mouse",10.99),
		 ("Monitor",450),("CPU",999.99);
insert into descontos(idProduto, porcentagem)
		value(2,50),(4,15);

select * from produtos;
select * from descontos;

create function preco_final(preco decimal(10,2), 
							porcentagem int)
		returns decimal(10,2) deterministic
        return preco - (preco*(porcentagem/100));
select preco_final(1000,10);

select p.nome, d.porcentagem, p.preco,
		preco_final(p.preco, d.porcentagem)
    from produtos p
	left join
		descontos d
        on p.idProduto = d.idProduto
        
DELIMITER $$
CREATE FUNCTION v_final_completo 
				(preco decimal(10,2), 
					porcentagem int) 
RETURNS DECIMAL(10,2) DETERMINISTIC
BEGIN
	DECLARE resultado DECIMAL(10,2);
	SET resultado =  preco - (preco*(porcentagem/100));
	IF (porcentagem is null) THEN
		SET resultado = preco;
	END IF;
	RETURN resultado;
END$$
DELIMITER ;

select p.nome, d.porcentagem, p.preco,
		v_final_completo(p.preco, d.porcentagem)
    from produtos p
	left join
		descontos d
        on p.idProduto = d.idProduto
        
-- FUNÇÃO PARA DADO O ID DE UM PRODUTO, RETORNE SEU NOME E SUA PORCENTAGEM DE DESCONTO
DELIMITER \\
CREATE PROCEDURE conferirID(IN idProduto int)
BEGIN
	SELECT produtos.nome, descontos.porcentagem FROM produtos 
    INNER JOIN descontos ON produtos.IdProduto = descontos.IdProduto;
END \\

DELIMITER ;

CALL conferirID('2');

-- DADO O ID DE UM PRODUTO, RETORNE SEU PREÇO COM DESCONTO
DELIMITER \\
CREATE PROCEDURE conferirValorPosDesconto(IN idProduto int)
BEGIN
	SELECT produtos.preco - produtos.preco * (descontos.porcentagem *0.01) AS 'Valor Final' FROM produtos
    INNER JOIN descontos ON produtos.IdProduto = descontos.IdProduto;
END \\

DELIMITER ;

CALL conferirValorPosDesconto('2');

DELIMITER \\
CREATE PROCEDURE conferirStatusFinal(IN idProduto int)
BEGIN
	SELECT produtos.nome AS 'Nome do Produto', 
    produtos.preco AS "Preço Original",
    descontos.porcentagem AS "Percentual de Desconto", 
    produtos.preco - produtos.preco * (descontos.porcentagem *0.01) AS 'Valor Final' 
    FROM produtos INNER JOIN descontos ON produtos.IdProduto = descontos.IdProduto;
END \\

DELIMITER ;

CALL conferirStatusFinal('2');

DELIMITER \\
CREATE PROCEDURE gerarDesconto(IN preco INT, IN porcentagem INT, OUT preco_calculado INT)
BEGIN
	SELECT produtos.preco INTO preco_calculado FROM produtos
    INNER JOIN descontos ON produtos.IdProduto = descontos.IdProduto;
END \\

DELIMITER ;

CALL gerarDesconto ('200', '10',@preco_calculado);
SELECT @preco_calculado;
	
        



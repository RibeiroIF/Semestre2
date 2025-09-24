DROP DATABASE IF EXISTS Revisao;
CREATE DATABASE Revisao;
USE Revisao;

CREATE TABLE Curso (
CodCurso INT AUTO_INCREMENT PRIMARY KEY,
NomeCurso VARCHAR(45),
AreaCurso VARCHAR(45)
) ENGINE=InnoDB;

CREATE TABLE Disciplina (
CodDisciplina INT AUTO_INCREMENT PRIMARY KEY,
CargaHoraria INT NOT NULL,
NomeDisciplina VARCHAR(45) NOT NULL,
CodCurso INT,
FOREIGN KEY (CodCurso) REFERENCES Curso(CodCurso)
) ENGINE=InnoDB;

CREATE TABLE Aluno (
IDAluno INT AUTO_INCREMENT PRIMARY KEY,
NomeAluno VARCHAR(45) NOT NULL,
Email VARCHAR(45) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE Participa (
IDAluno INT,
CodDisciplina INT,
Nota INT,
Frequencia INT,
PRIMARY KEY (IDAluno, CodDisciplina),
FOREIGN KEY (IDAluno) REFERENCES Aluno(IDAluno),
FOREIGN KEY (CodDisciplina) REFERENCES Disciplina(CodDisciplina)
) ENGINE=InnoDB;

-- POVOAMENTO DAS TABELAS

-- Tabela Curso
INSERT INTO Curso (NomeCurso, AreaCurso)
VALUES
('Administração', 'Negocios'),
('Direito', 'Juridico'),
('Medicina', 'Saude'),
('Arquitetura', 'Engenharia'),
('Engenharia de Software','Computacao');

-- Tabela Disciplina
INSERT INTO Disciplina (CargaHoraria, NomeDisciplina, CodCurso)
VALUES
(60, 'Programacao I', 1),
(60, 'Banco de Dados', 1),
(40, 'Gestao Financeira', 2),
(80, 'Direito Constitucional', 3),
(100, 'Anatomia', 4);

-- Tabela Aluno
INSERT INTO Aluno (NomeAluno, Email)
VALUES
('Ana Luiza', 'ana@email.com'),
('Bruno Silva', 'bruno@email.com'),
('Carlos Pereira', 'carlos@email.com'),
('Mariana Souza', 'mariana@email.com'),
('João Santos', 'joao@email.com');

-- Tabela Participa
INSERT INTO Participa (IDAluno, CodDisciplina, Nota, Frequencia)
VALUES
(1, 1, 85, 90), -- Ana faz Programação I
(2, 2, 78, 95), -- Bruno faz Banco de Dados
(3, 3, 88, 92), -- Carlos faz Gestão Financeira
(4, 4, 75, 85), -- Mariana faz Direito Constitucional
(5, 5, 90, 98); -- João faz Anatomia

-- Alterar nota de um aluno na tabela Participa
UPDATE Participa
SET Nota = 95
WHERE IDAluno = 1 AND CodDisciplina = 1;

-- Alterar área de um curso
UPDATE Curso
SET AreaCurso = 'Tecnologia da Informação'
WHERE CodCurso = 1;

-- Remover um aluno específico (espera-se erro)
-- DELETE FROM Aluno
-- WHERE IDAluno = 5;
-- Remover um curso específico
DELETE FROM Curso
WHERE CodCurso = 5;

-- Configurar chave estrangeira com RESTRICT
ALTER TABLE Participa
DROP FOREIGN KEY participa_ibfk_1;

ALTER TABLE Participa
ADD CONSTRAINT fk_participa_aluno
FOREIGN KEY (idAluno) REFERENCES Aluno(idAluno)
ON UPDATE RESTRICT
ON DELETE RESTRICT;

-- Alterar a chave estrangeira para CASCADE
ALTER TABLE Participa
DROP FOREIGN KEY fk_participa_aluno;

ALTER TABLE Participa
ADD CONSTRAINT fk_participa_aluno
FOREIGN KEY (IDAluno) REFERENCES Aluno(IDAluno)
ON UPDATE CASCADE
ON DELETE CASCADE;

-- Atualizar idAluno
UPDATE Aluno
SET IDAluno = 11
WHERE IDAluno = 2;

-- Excluir aluno
DELETE FROM Aluno
WHERE idAluno = 11;

-- ATIVIDADES LISTA SQL

-- Seleção simples (FEITO)
-- 1. Listar todos os dados da tabela Curso
-- SELECT * FROM Curso;
-- 2. Listar todas as disciplinas.
-- SELECT * FROM Disciplina;
-- 3. Selecionar nomes e emails dos alunos.
-- SELECT NomeAluno, Email FROM Aluno;
-- 4. Listar todos os registros da tabela Participa.
-- SELECT * FROM Participa;
-- (FEITO)

-- Filtragem com WHERE (FEITO)
-- 5. Selecionar alunos com idAluno menor que 5.
-- SELECT * FROM Aluno WHERE IDAluno < 5;
-- 6. Selecionar alunos com nota maior que 80.
-- SELECT * FROM Participa WHERE Nota > 80;
-- 7. Selecionar disciplinas com carga horária menor que 60.
-- SELECT * FROM Disciplina WHERE CargaHoraria < 60;
-- 8. Selecionar cursos da área 'Saúde'.
-- SELECT * FROM Curso WHERE AreaCurso = "Saude";
-- 9. Selecionar participações com frequência menor que 90.
-- SELECT * FROM Participa WHERE Frequencia < 90;
-- 10. Selecionar alunos com idAluno 3 ou 4.
-- SELECT * FROM Aluno WHERE IDAluno IN (3, 4);
-- (FEITO)

-- Filtragem com LIKE (FEITO)
-- 11. Selecionar alunos cujo nome começa com 'M'.
-- SELECT * FROM Aluno WHERE NomeAluno LIKE "M%";
-- 12. Selecionar alunos cujo nome termina com 'a'.
-- SELECT * FROM Aluno WHERE NomeAluno LIKE "%a";
-- 13. Selecionar disciplinas cujo nome contenha 'Banco'.
-- SELECT * FROM Disciplina WHERE NomeDisciplina LIKE "%Banco%";
-- 14. Selecionar cursos cuja área contenha 'Engenharia'.
-- SELECT * FROM Curso WHERE AreaCurso LIKE "%Engenharia%";
-- 15. Selecionar alunos com nome de exatamente 5 letras.
-- SELECT * FROM Aluno WHERE NomeAluno LIKE "_____";
-- (FEITO)

-- Filtragem com IN (FEITO)
-- 16. Selecionar alunos com idAluno 2, 4 ou 5.
-- SELECT * FROM Aluno WHERE IDAluno IN (2, 4, 5);
-- 17. Selecionar disciplinas cujo codCurso seja 1 ou 3.
-- SELECT * FROM Disciplina WHERE CodCurso IN (1, 3);
-- 18. Selecionar participações com nota 75, 80 ou 85.
-- SELECT * FROM Participa WHERE Nota IN (75, 80, 85);
-- 19. Selecionar cursos com codCurso 2, 4 ou 5.
-- SELECT * FROM Curso WHERE CodCurso IN (2, 4, 5);
-- 20. Selecionar alunos cujo idAluno esteja na lista de alunos com frequência > 90 (subconsulta).
-- SELECT * FROM Aluno WHERE IDAluno IN (SELECT * FROM Participa WHERE Frequencia > 90);
-- (FEITO)

-- Agrupamento com GROUP BY e HAVING (FEITO)
-- 21. Calcular a média de nota de cada disciplina.
-- SELECT CodDisciplina, AVG(Nota) AS Media FROM Participa GROUP BY CodDisciplina;
-- 22. Contar alunos por disciplina.
-- SELECT CodDisciplina, COUNT(IDAluno) AS "Número de Alunos" FROM Participa GROUP BY CodDisciplina;
-- 23. Mostrar disciplinas com média de frequência > 85.
-- SELECT CodDisciplina, AVG(Frequencia) AS "Média de Frequência" FROM Participa GROUP BY CodDisciplina HAVING AVG(Frequencia) > 85;
-- 24. Exibir cursos com mais de 2 disciplinas.
-- SELECT CodCurso, COUNT(CodDisciplina) AS "Quantidade de Disciplinas" FROM Disciplina GROUP BY CodCurso HAVING COUNT(CodDisciplina) > 1;
-- 25. Mostrar alunos com média de nota > 80.
-- SELECT IDAluno, AVG(Nota) AS "Média" FROM Participa GROUP BY IDAluno HAVING AVG(Nota) > 80;
-- (FEITO)

-- Ordenação com ORDER BY (FEITO)
-- 26. Listar alunos ordenados por nome crescente.
-- SELECT * FROM Aluno ORDER BY NomeAluno ASC;
-- 27. Listar disciplinas por carga horária decrescente.
-- SELECT * FROM Disciplina ORDER BY CargaHoraria DESC;
-- 28. Listar participações por frequência crescente.
-- SELECT * FROM Participa ORDER BY Frequencia ASC;
-- 29. Listar alunos por nota decrescente.
-- SELECT * FROM Participa ORDER BY Nota DESC;
-- 30. Listar cursos ordenados por área alfabeticamente.
-- SELECT * FROM Curso ORDER BY AreaCurso ASC;
-- (FEITO)

-- Seleção de valores distintos (DISTINCT) (FEITO)
-- 31. Listar todas as áreas de cursos sem repetição.
-- SELECT DISTINCT AreaCurso FROM Curso;
-- 32. Listar todos os nomes de alunos distintos.
-- SELECT DISTINCT NomeAluno FROM Aluno;
-- 33. Listar todas as disciplinas distintas.
-- SELECT DISTINCT NomeDisciplina FROM Disciplina;
-- 34. Listar todas as notas distintas na tabela Participa.
-- SELECT DISTINCT Nota FROM Participa;
-- 35. Listar todos os códigos de curso distintos que possuem disciplinas.
-- SELECT DISTINCT CodCurso FROM Disciplina GROUP BY CodCurso HAVING COUNT(CodDisciplina) >= 1;
-- (FEITO)

-- Combinação de resultados com UNION / UNION ALL (FEITO)
-- 36. Listar nomes de alunos e disciplinas sem repetição.
-- SELECT DISTINCT NomeAluno FROM Aluno UNION SELECT DISTINCT NomeDisciplina FROM Disciplina;
-- 37. Listar emails de alunos e cursos (todos inclusivos).
-- SELECT Email FROM Aluno UNION ALL SELECT AreaCurso FROM Curso;
-- 38. Combinar alunos com nota > 80 ou frequência > 90.
-- SELECT IDAluno FROM Participa WHERE Nota > 80 UNION SELECT IDAluno FROM Participa WHERE Frequencia > 90;
-- 39. Listar disciplinas e cursos da área 'Engenharia'.
-- SELECT NomeDisciplina FROM Disciplina WHERE NomeDisciplina LIKE "%Engenharia%" UNION SELECT NomeCurso FROM Curso WHERE AreaCurso LIKE "%Engenharia%";
-- 40. Listar alunos e professores (assumindo tabela Professor).
-- (FEITO)


-- ATIVIDADES SELECT DENTRO DO SELECT (FEITO)
-- 1. Selecionar nomes de alunos que possuem nota maior que 75.
-- SELECT NomeAluno FROM Aluno WHERE IDAluno IN (SELECT IDAluno FROM Participa WHERE Nota > 75);
-- 2. Selecionar nomes de disciplinas que têm carga horária menor que a média das disciplinas.
-- SELECT NomeDisciplina FROM Disciplina WHERE CargaHoraria < (SELECT AVG(CargaHoraria) FROM Disciplina);
-- 3. Selecionar nomes de alunos que possuem frequência menor que a média de frequência da tabela Participa.
-- SELECT NomeAluno FROM Aluno WHERE IDAluno IN (SELECT IDAluno FROM Participa WHERE Frequencia < (SELECT AVG(Frequencia) FROM Participa));
-- 4. Selecionar cursos que possuem menos disciplinas que a média de disciplinas por curso.
-- SELECT NomeCurso FROM Curso WHERE CodCurso IN (SELECT CodCurso FROM Disciplina GROUP BY CodCurso HAVING COUNT(CodCurso) < 
-- (SELECT AVG(Quantidade) FROM (SELECT COUNT(CodDisciplina) AS Quantidade FROM Disciplina GROUP BY CodCurso) AS Resolucao));
-- 5. Selecionar idAluno dos alunos que obtiveram a maior nota em alguma disciplina.
-- SELECT IDAluno FROM Participa WHERE Nota = (SELECT MAX(Nota) FROM Participa);
-- (FEITO)

-- ATIVIDADES NATURAL JOIN (FEITO)
-- 1. Listar nome do aluno e nota usando NATURAL JOIN.
-- SELECT Aluno.NomeALuno, Participa.Nota FROM Aluno NATURAL JOIN Participa;
-- 2. Listar nome do aluno e frequência usando NATURAL JOIN.
-- SELECT Aluno.NomeAluno, Participa.Frequencia FROM Aluno NATURAL JOIN Participa;
-- 3. Selecionar codDisciplina e nota usando NATURAL JOIN.
-- SELECT CodDisciplina, Nota FROM Participa NATURAL JOIN Aluno;
-- 4. Listar todos os dados de Aluno e Participa usando NATURAL JOIN.
-- SELECT * FROM Aluno NATURAL JOIN Participa;
-- 5. Selecionar nomes dos alunos com nota maior que 80 usando NATURAL JOIN
-- SELECT NomeAluno, Nota FROM Aluno NATURAL JOIN Participa WHERE Nota > 80;
-- (FEITO)

-- ATIVIDADES INNER JOIN (FEITO)
-- 1. Listar nome do aluno e nota usando INNER JOIN.
-- SELECT Aluno.NomeAluno, Participa.Nota FROM Aluno INNER JOIN Participa ON Aluno.IDAluno = Participa.IDAluno;
-- 2. Listar nome do aluno e frequência usando INNER JOIN.
-- SELECT Aluno.NomeAluno, Participa.Frequencia FROM Aluno INNER JOIN Participa ON Aluno.IDAluno = Participa.IDAluno;
-- 3. Selecionar nome do aluno, nome da disciplina e nota usando INNER JOIN com Disciplina.
-- SELECT Aluno.NomeAluno, Disciplina.NomeDisciplina, Participa.Nota FROM Aluno INNER JOIN Participa ON Aluno.IDAluno = Participa.IDAluno 
-- INNER JOIN Disciplina ON Participa.CodDisciplina = Disciplina.CodDisciplina;
-- 4. Listar todos os alunos e notas onde a nota seja maior que 75 usando INNER JOIN.
-- SELECT Aluno.NomeAluno, Participa.Nota FROM ALUNO INNER JOIN Participa ON Aluno.IDAluno = Participa.IDAluno WHERE Nota > 75;
-- 5. Selecionar idAluno, nome e frequência usando INNER JOIN, ordenando por frequência decrescente.
-- SELECT Aluno.IDAluno, Aluno.NomeAluno, Participa.Frequencia FROM Aluno INNER JOIN Participa ON Aluno.IDAluno = Participa.IDAluno ORDER BY Frequencia DESC;
-- (FEITO)

-- ATIVIDADES CLÁUSULAS ADICIONAIS JOIN (FEITO)
-- 1. Listar nome do aluno e nota apenas dos alunos com nota maior que 80.
-- SELECT Aluno.NomeAluno, Participa.Nota FROM Aluno INNER JOIN Participa ON Aluno.IDAluno = Participa.IDAluno WHERE Nota > 80;
-- 2. Listar nome do aluno e disciplina apenas dos alunos que participam de disciplinas do curso 1
-- SELECT Aluno.NomeAluno, Disciplina.Nomedisciplina FROM Aluno INNER JOIN Participa ON Aluno.IDAluno = Participa.IDAluno 
-- INNER JOIN Disciplina ON Participa.CodDisciplina = Disciplina.CodDisciplina WHERE Disciplina.CodCurso = 1;
-- 3. Selecionar nome e frequência dos alunos cuja frequência esteja em (85, 90, 95).
-- SELECT Aluno.NomeAluno, Participa.Frequencia FROM Aluno INNER JOIN Participa ON Aluno.IDAluno = Participa.IDAluno WHERE Frequencia IN (85, 90, 95);
-- 4. Listar nome do aluno e nota, ordenados pela nota decrescente.
-- SELECT Aluno.NomeAluno, Participa.Nota FROM Aluno INNER JOIN Participa ON Aluno.IDAluno = Participa.IDAluno ORDER BY Nota DESC;
-- 5. Selecionar nome do curso e quantidade de disciplinas, apenas dos cursos que têm mais de 2 disciplinas.
-- SELECT Curso.NomeCurso, COUNT(Disciplina.CodDisciplina) AS "Quantidade de Disciplinas" FROM Curso 
-- INNER JOIN Disciplina ON Curso.CodCurso = Disciplina.CodCurso GROUP BY NomeCurso HAVING COUNT(CodDisciplina) > 1;
-- (FEITO)







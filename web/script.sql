-- DROP DATABASE 
DROP DATABASE image_db;

-- CREATE DATABASE
CREATE DATABASE image_db;

-- USE DATABASE
USE image_db;

-- TABLE usuarios_credencial
CREATE TABLE IF NOT EXISTS usuarios_credencial(
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	usuario VARCHAR(32) NOT NULL,
	senha VARCHAR(255) NOT NULL,
	tipo CHAR(1) NOT NULL,
	data DATE,
	PRIMARY KEY(id)
);

-- TABLE aluno
CREATE TABLE IF NOT EXISTS aluno(
   id INT NOT NULL,
   nome VARCHAR(32) NOT NULL,
   phone VARCHAR(15) NOT NULL,
   email VARCHAR(150) NOT NULL,
   status TINYINT(1) NOT NULL DEFAULT 0,
   PRIMARY KEY(id)
);


-- TABLE imagem
CREATE TABLE IF NOT EXISTS imagem(
	id INT NOT NULL AUTO_INCREMENT,
	imagem_aluno LONGBLOB NOT NULL,
	id_aluno INT NOT NULL,
	FOREIGN KEY(id_aluno) REFERENCES aluno(id),
	PRIMARY KEY(id)
);



-- INSERT ALUNO REGISTER
-- obs. numero sem o nono digito.
INSERT INTO aluno(id, nome, phone, email, status)
VALUES(1, 'manoel vitor', '557499729815', 'manoelvitorsilvasantos@gmail.com', 0);

-- INSERT usuarios_credencial REGISTER
-- admin
INSERT INTO usuarios_credencial(nome, email, usuario, senha, tipo, data)
VALUES('manoel vitor', 'manoelvitorsilvasantos@gmail.com', 'mvictor', MD5('65564747'), '1', CURDATE());


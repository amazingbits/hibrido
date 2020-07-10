DROP DATABASE IF EXISTS DB_CLIENTE;
CREATE DATABASE DB_CLIENTE;
USE DB_CLIENTE;

CREATE TABLE IF NOT EXISTS TB_CLIENTE(
ID INT NOT NULL AUTO_INCREMENT,
NOME TEXT NOT NULL,
CPF TEXT NOT NULL,
EMAIL TEXT NOT NULL,
TELEFONE TEXT,
PRIMARY KEY(ID));

CREATE TABLE IF NOT EXISTS TB_CLIENTE_HIST(
ID INT,
NOME TEXT,
CPF TEXT,
EMAIL TEXT,
TELEFONE TEXT,
USER TEXT,
ACAO TEXT,
DATA DATETIME);

DELIMITER $$
CREATE TRIGGER TK_CLIENTE_AI AFTER INSERT ON TB_CLIENTE FOR EACH ROW
BEGIN
	INSERT INTO TB_CLIENTE_HIST VALUES (NEW.ID, NEW.NOME, NEW.CPF, NEW.EMAIL, NEW.TELEFONE, USER(), "INSERT", NOW());
END $$

CREATE TRIGGER TK_CLIENTE_AU AFTER UPDATE ON TB_CLIENTE FOR EACH ROW
BEGIN
	INSERT INTO TB_CLIENTE_HIST VALUES (NEW.ID, NEW.NOME, NEW.CPF, NEW.EMAIL, NEW.TELEFONE, USER(), "UPDATE", NOW());
END $$

CREATE TRIGGER TK_CLIENTE_AD AFTER DELETE ON TB_CLIENTE FOR EACH ROW
BEGIN
	INSERT INTO TB_CLIENTE_HIST VALUES (OLD.ID, OLD.NOME, OLD.CPF, OLD.EMAIL, OLD.TELEFONE, USER(), "DELETE", NOW());
END $$
DELIMITER ;
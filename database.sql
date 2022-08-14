DROP DATABASE IF EXISTS geekif;
CREATE DATABASE geekif;
USE geekif;

CREATE TABLE atracao (
    atracao_id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR() NOT NULL,
    imagem MEDIUMBLOB NULL,
    descricao TEXT NULL,
    PRIMARY KEY(atracao_id)
);
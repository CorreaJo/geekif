DROP DATABASE IF EXISTS geekif;
CREATE DATABASE geekif;
USE geekif;

CREATE TABLE atracao (
    atracao_id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(200) NOT NULL,
    descricao TEXT NULL,
    imagem MEDIUMBLOB NULL,
    PRIMARY KEY(atracao_id)
);
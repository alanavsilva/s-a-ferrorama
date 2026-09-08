create database SA_FERRORAMA;
use SA_FERRORAMA;

create table usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefone VARCHAR(15),
    numero_de_usuarios INT NOT NULL,
    tipo_usuario('admin', 'usuario') NOT NULL,
    senha VARCHAR(100) NOT NULL
);

create table sensores (
    id_sensor INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    trem_vinculado VARCHAR(100) NOT NULL,
    direcao VARCHAR(50) NOT NULL,
    temperatura DECIMAL(5,2) NOT NULL,
    velocidade DECIMAL(5,2) NOT NULL,
);

create table trens (
    id_trem INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
);

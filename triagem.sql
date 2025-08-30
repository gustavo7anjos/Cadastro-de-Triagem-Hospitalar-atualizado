CREATE DATABASE triagem;
USE triagem,

CREATE TABLE pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (150) NOT NULL,
    idade INT NOT NULL,
    cpf VARCHAR (20) NOT NULL,
    sexo VARCHAR (10),
    data_nascimento DATE,
    telefone VARCHAR(20),
    endereco VARCHAR(200),
    sintomas TEXT NOT NULL,
    inicioDosSintomas DATE,
    doencasPreExistentes VARCHAR (250),
    usoDeMedicamentos VARCHAR (250),
    alergias VARCHAR (250),
    pressaoArterial VARCHAR (250),
    temperatura VARCHAR (20),
    frequenciaCardiaca VARCHAR (20),
    saturacao VARCHAR (20),
    obeservacoes TEXT,
    data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
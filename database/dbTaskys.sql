CREATE DATABASE IF NOT EXISTS dbTaskys;

USE dbTaskys;

CREATE TABLE
    tbUser (
        idUser INT PRIMARY KEY AUTO_INCREMENT,
        nomeCompletoUser VARCHAR(50) NOT NULL,
        dataNascimentoUser DATE NOT NULL,
        cargoUser VARCHAR(50) NOT NULL,
        funcaoUser VARCHAR(80) NOT NULL,
        fotoPerfilUser VARCHAR(255) NOT NULL,
        emailUser VARCHAR(50) NOT NULL,
        celularUser VARCHAR(15) NOT NULL,
        cpfUser CHAR(11) NOT NULL,
        senhaUser VARCHAR(255) NOT NULL,
        tipoUsuario ENUM ('admin', 'usuario') NOT NULL
    );

CREATE TABLE
    tbTask (
        idTask INT PRIMARY KEY AUTO_INCREMENT,
        responsaveisTask VARCHAR(255),
        descricao MEDIUMTEXT,
        vencimentoTask DATETIME,
        prioridade ENUM ('alta', 'normal', 'baixa') NOT NULL,
        etiquetasTask VARCHAR(255),
        valorTask DECIMAL(10, 2),
        statusTask ENUM ('nao_iniciada', 'em_andamento', 'concluída') NOT NULL,
        dataLembreteTask DATETIME,
        lembreteTask BOOLEAN,
        recorrenteTask BOOLEAN,
        criadaPorTask VARCHAR(100),
        criadaEmTask DATETIME,
        atualizadaEmTask DATETIME,
        atualizadaPorTask VARCHAR(100),
        comentariosTask TEXT,
        anexoTask VARCHAR(255)
    );

CREATE TABLE
    tbAnexo (
        idAnexo INT PRIMARY KEY AUTO_INCREMENT,
        idTask INT NOT NULL,
        nomeAnexo VARCHAR(255),
        caminhoAnexo VARCHAR(255),
        FOREIGN KEY (idTask) REFERENCES tbTask (idTask) ON DELETE CASCADE -- Cascateia a exclusão dos anexos quando a tarefa for excluída
    );
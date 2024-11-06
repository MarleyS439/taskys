/* Banco de dados do Taskys */
-- Cria o banco de dados se não existir
CREATE DATABASE IF NOT EXISTS dbTaskys;

-- Usa o banco de dados
USE dbTaskys;

/* Usuário */
CREATE TABLE
    tbUser (
        idUser INT PRIMARY KEY AUTO_INCREMENT, -- ID do usuário
        nomeCompletoUser VARCHAR(50) NOT NULL, -- Nome completo do usuário
        dataNascimentoUser DATE NOT NULL, -- Data de nascimento do usuário
        cargoUser VARCHAR(50) NOT NULL, -- Cargo do usuário
        funcaoUser VARCHAR(80) NOT NULL, -- Função do usuário
        fotoPerfilUser VARCHAR(255) NOT NULL, -- Foto de perfil do usuário
        emailUser VARCHAR(50) NOT NULL, -- E-mail de usuário
        celularUser VARCHAR(15) NOT NULL, -- Número de celular do usuário
        cpfUser CHAR(11) NOT NULL, -- CPF do usuário
        senhaUser VARCHAR(255) NOT NULL, -- Senha de usuário
        tipoUsuario ENUM ('admin', 'usuario') NOT NULL -- Enumenração de tipo de usuário
    );

/* Tarefa */
CREATE TABLE
    tbTask (
        idTask INT PRIMARY KEY AUTO_INCREMENT, -- ID de tarefa
        responsaveisTask VARCHAR(255), -- Responsáveis pela tarefa
        descricao MEDIUMTEXT, -- Descrição da tarefa
        vencimentoTask DATETIME, -- Vencimento da tarefa
        prioridade ENUM ('alta', 'normal', 'baixa') NOT NULL, -- Enumeração de prioridade da tarefa
        etiquetasTask VARCHAR(255), -- Etiquetas da tarefa
        valorTask DECIMAL(10, 2), -- Valor da tarefa
        statusTask ENUM ('nao_iniciada', 'em_andamento', 'concluída') NOT NULL, --Enumeração de status da terafa
        dataLembreteTask DATETIME, -- Data e hora de lembrete da tarefa
        lembreteTask BOOLEAN, -- Se possui lembrete
        recorrenteTask BOOLEAN, -- Se é recorrente
        criadaPorTask VARCHAR(100), -- Criador da tarefa
        criadaEmTask DATETIME, -- Data e hora de criação da tarefa
        atualizadaEmTask DATETIME, -- Data e hora de atualização da tarefa
        atualizadaPorTask VARCHAR(100), -- Responsável pela atualização da tarefa
        comentariosTask TEXT, -- Comentários da tarefa
        anexoTask VARCHAR(255) -- Anexos da tarefa
    );

/* Anexos */
CREATE TABLE
    tbAnexo (
        idAnexo INT PRIMARY KEY AUTO_INCREMENT, -- ID do anexo
        idTask INT NOT NULL, -- ID da tarefa
        nomeAnexo VARCHAR(255), -- Nome do anexo
        caminhoAnexo VARCHAR(255), -- Caminho do anexo
        FOREIGN KEY (idTask) REFERENCES tbTask (idTask) ON DELETE CASCADE -- Cascateia a exclusão dos anexos quando a tarefa for excluída
    );
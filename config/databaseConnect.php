<?php

/**
 * Classe para conectar ao banco de dados.
 *
 * @author Marley de S. Santos
 * @version 1.0
 */

class DatabaseConnect
{
    // Variáveis privadas de dados de conexão do banco
    private string $host;
    private string $dbname;
    private string $username;
    private string $password;
    private string $port;

    // Variável pública de conexão
    public PDO $conn;

    // Contrutor para inicializar as variáveis de conexão
    public function __construct()
    {
        // Carregar as configurações do arquivo config.ini
        $config = parse_ini_file(__DIR__ . "/config.ini", true);

        // Verificar se a seção [database] existe
        if (isset($config["database"])) {
            $this->host = $config["database"]["hostname"];
            $this->dbname = $config["database"]["database"];
            $this->username = $config["database"]["username"];
            $this->password = $config["database"]["password"];
            $this->port = $config["database"]["port"];
        } else {
            die("Erro: Configurações de banco de dados não encontradas");
        }

        $this->connect();
    }

    /**
     * Estabelece uma conexão com o banco de dados.
     *
     * @throws PDOException Se a conexão falhar.
     */
    public function connect()
    {   
        try {
            // Conexão com o método PDO

            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbname};charset=utf8";
            $this->conn =  new PDO($dsn, $this->username, $this->password);

            // Definir o modo de erro do PDO para Exception
            $this->conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        } catch (PDOException $e) {
            // Exibir o erro ao tentar se conectar
            die("Erro ao estabelecer conexão com o banco de dados: " . $e->getMessage());
        }
    }
}

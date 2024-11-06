<?php

/**
 * Classe de Modelo de Usuário.
 *
 * @author Marley de S. Santos
 * @version 1.0
 */

// Enum para constantes de tipo de usuário
enum TipoUsuarioEnum: string
{
    case ADMIN = 'admin';
    case USUARIO = 'usuario';
}

class User
{
    // Variáveis privadas de informações do usuário
    private int $id;
    private string $nome_completo;
    private DateTime $data_nascimento;
    private string $cargo;
    private string $funcao;
    private string $foto_perfil;
    private string $email;
    private string $celular;
    private string $cpf;
    private string $senha;
    private TipoUsuarioEnum $tipo_usuario;

    // Construtor para inicializar as variáveis
    public function __construct(
        int  $id,
        string $nome_completo,
        DateTime $data_nascimento,
        string $cargo,
        string $funcao,
        string $foto_perfil,
        string $email,
        string $celular,
        string $cpf,
        string $senha,
        TipoUsuarioEnum $tipo_usuario
    ) {
        $this->id = $id;
        $this->nome_completo = $nome_completo;
        $this->data_nascimento = $data_nascimento;
        $this->cargo = $cargo;
        $this->funcao = $funcao;
        $this->foto_perfil = $foto_perfil;
        $this->email = $email;
        $this->celular = $celular;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->tipo_usuario = $tipo_usuario;
    }


    // Getters e Setters
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Define o ID do usuário
     *
     * @param int $id O ID de usuário
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNome(): string
    {
        return $this->nome_completo;
    }

    /**
     * Define o nome completo do usuário
     *
     * @param string $nome_completo O nome completo do usuário
     */
    public function setNome(string $nome_completo): void
    {
        $this->nome_completo = $nome_completo;
    }

    public function getDataNascimento(): DateTime
    {
        return $this->data_nascimento;
    }

    /**
     * Define a data de nascimento do usuário
     *
     * @param DateTime $data_nascimento A data de nasciment do usuário
     */
    public function setDataNascimento(DateTime $data_nascimento): void
    {
        $this->data_nascimento = $data_nascimento;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    /**
     * Define o cargo do usuário
     * 
     * @param string $cargo O cargo do usuário
     */
    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }

    public function getFuncao(): string
    {
        return $this->funcao;
    }

    /**
     * Define a função do usuário
     * 
     * @param string $funcao A função do usuário
     */
    public function setFuncao(string $funcao): void
    {
        $this->funcao = $funcao;
    }

    public function getFotoPerfil(): string
    {
        return $this->foto_perfil;
    }

    /**
     * Define a foto de perfil do usuário
     * 
     * @param string $foto_perfil A foto de perfil do usuário
     */
    public function setFotoPerfil(string $foto_perfil): void
    {
        $this->foto_perfil = $foto_perfil;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Define o e-mail do usuário
     * 
     * @param string $email O e-mail do usuário
     */
    public function setEmail(string $email): void
    {
        // Valida se o e-mail tem um formato válido
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            // Lança uma exceção caso o e-mail não seja válido
            throw new InvalidArgumentException("O e-mail fornecido é inválido.");
        }
    }

    public function getCelular(): string
    {
        return $this->celular;
    }

    /**
     * Define o celular do usuário
     * 
     * @param string $celular O celular do usuário
     */
    public function setCelular(string $celular): void
    {
        $this->celular = $celular;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * Define o CPF do usuário
     * 
     * @param string $cpf O CPF do usuário
     */
    public function setCpf(string $cpf): void
    {
        if (!$this->validarCPF($cpf)) {
            throw new InvalidArgumentException("O CPF fornecido é inválido. ");
        }
        $this->cpf = $cpf;
    }

    /**
     * Valida o CPF do usuário
     * 
     * @param $cpf O CPF do usuário
     */
    private function validarCPF(string $cpf): bool
    {
        // Remover os caracteres não numéricos
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        // Verifica se o CPF possui 11 dígitos
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se o CPF não é um número inválido
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Calcular o dígito verificador
        $soma = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma += (int) $cpf[$i] * (10 - $i);
        }
        $resto = $soma % 11;
        $digito1 = ($resto < 2) ? 0 : 11 - $resto;

        // Calcular o segundo dígito verificador
        $soma = 0;
        for ($i = 0; $i < 10; $i++) {
            $soma += (int) $cpf[$i] * (11 - $i);
        }
        $resto = $soma % 11;
        $digito2 = ($resto < 2) ? 0 : 11 - $resto;

        // Verificar se os dígitos verificadores são válidos
        return $cpf[9] == $digito1 && $cpf[10] == $digito2;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    /**
     * Define a senha do usuário
     * 
     * @param string $senha A senha do usuário
     */
    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    public function getTipoUsuario(): TipoUsuarioEnum
    {
        return $this->tipo_usuario;
    }

    /**
     * Define o tipo de usuário
     * 
     * @param string $tipo_usuario O tipo de usuário
     */
    public function setTipoUsuario(TipoUsuarioEnum $tipo_usuario): void
    {
        $this->tipo_usuario = $tipo_usuario;
    }


    /*  $user = new User(
        1, 
        'João Silva', 
        new DateTime('2000-01-01'),
        'Desenvolvedor', 
        'Programação', 
        'foto.jpg', 
        'joao@exemplo.com', 
        '123456789', 
        '12345678900', 
        'senha123', 
        TipoUsuarioEnum::ADMIN  // Passando o valor do Enum aqui
    ); */
}

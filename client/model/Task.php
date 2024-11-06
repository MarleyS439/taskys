<?php

/**
 * Classe de Tarefa.
 *
 * @author Marley de S. Santos
 * @version 1.0
 */

// Enumm para constantes de prioridade
enum Prioridade: string
{
    case ALTA = 'alta';
    case NORMAL = 'normal';
    case BAIXA = 'baixa';
}

// Enum para constantes de status
enum Status: string
{
    case NAO_INICIADA = 'nao_iniciada';
    case EM_ANDAMENTO = 'em_andamento';
    case CONCLUIDA = 'concluida';
}

class Task
{
    private int $id;
    private array $responsaveis = [];
    private string $descricao;
    private DateTime $vencimento;
    private Prioridade $prioridade;
    private array $etiquetas = [];
    private float $valor;
    private array $anexos = [];
    private Status $status;
    private DateTime $dataLembrete;
    private bool $lembrete;
    private bool $recorrente;
    private string $criada_por;
    private DateTime $criada_em;
    private DateTime $atualizada_em;
    private string $atualizada_por;
    private array $comentarios = [];

    public function __construct(
        int $id,
        array $responsaveis = [],
        string $descricao,
        DateTime $vencimento,
        Prioridade $prioridade,
        array $etiquetas = [],
        float $valor,
        array $anexos = [],
        Status $status,
        DateTime $dataLembrete,
        bool $lembrete,
        bool $recorrente,
        string $criada_por,
        DateTime $criada_em,
        DateTime $atualizada_em,
        string $atualizada_por,
        array $comentarios = []
    ) {
        $this->id = $id;
        $this->responsaveis = $responsaveis;
        $this->descricao = $descricao;
        $this->vencimento = $vencimento;
        $this->prioridade = $prioridade;
        $this->etiquetas = $etiquetas;
        $this->valor = $valor;
        $this->anexos = $anexos;
        $this->status = $status;
        $this->dataLembrete = $dataLembrete;
        $this->lembrete = $lembrete;
        $this->recorrente = $recorrente;
        $this->criada_por = $criada_por;
        $this->criada_em = $criada_em;
        $this->atualizada_em = $atualizada_em;
        $this->atualizada_por = $atualizada_por;
        $this->comentarios = $comentarios;
    }

    // Getters e Setters
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Define o ID da Task
     *
     * @param int $id O ID da Task
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getResponsaveis(): array
    {
        return $this->responsaveis;
    }

    /**
     * Define os responsáveis pela Task
     * 
     * @param array $responsaveis pela Task
     */
    public function setResposaveis(array $responsaveis): void
    {
        $this->responsaveis = $responsaveis;
    }

    
}

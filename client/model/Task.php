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
    private array $responsáveis = [];
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
        array $responsáveis,
        
    )
    {
        
    }
}

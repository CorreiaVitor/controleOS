<?php

namespace Src\VO;

use Src\public\Util;

class ChamadoVO
{
    private int $id;
    private int $id_tec_atendimento;
    private int $id_tec_finalizar;
    private int $id_funcionario;
    private int $id_equipamento;
    private string $problema;
    private string $laudo;

    // Função que define o ID do chamado
    public function setIdChamado(int $p_id): void
    {
        $this->id = $p_id;
    }

    // Função que retorna o ID do chamado
    public function getIdChamado(): int
    {
        return $this->id;
    }

    // Função que define o ID do técnico de atendimento
    public function setIdTecAtendimento($p_id_atendimento): void
    {
        $this->id_tec_atendimento = $p_id_atendimento;
    }

    // Função que retorna o ID do técnico de atendimento
    public function getIdTecAtendimento(): int
    {
        return $this->id_tec_atendimento;
    }

    // Função que define o ID do técnico responsável pela finalização
    public function setIdTecFinalizar($p_id_finalizar): void
    {
        $this->id_tec_finalizar = $p_id_finalizar;
    }

    // Função que retorna o ID do técnico responsável pela finalização
    public function getIdTecFinalizar(): int
    {
        return $this->id_tec_finalizar;
    }

    // Função que define o ID do funcionário relacionado ao chamado
    public function setIdFuncionario(int $p_id_funcionario): void
    {
        $this->id = $p_id_funcionario;
    }

    // Função que retorna o ID do funcionário relacionado ao chamado
    public function getIdFuncionario(): int
    {
        return $this->id_funcionario;
    }

    // Função que define o ID do equipamento relacionado ao chamado
    public function setIdEquipamento(int $p_id_equipamento): void
    {
        $this->id = $p_id_equipamento;
    }

    // Função que retorna o ID do equipamento relacionado ao chamado
    public function getIdEquipamento(): int
    {
        return $this->id_equipamento;
    }

    // Função que define o problema relatado no chamado
    public function setProblema(string $p_problema): void
    {
        $this->problema = $p_problema;
    }

    // Função que retorna o problema relatado no chamado
    public function getProblema(): string
    {
        return $this->problema;
    }

    // Função que define o laudo relacionado ao chamado
    public function setLaudo(string $p_laudo): void
    {
        $this->laudo = $p_laudo;
    }

    // Função que retorna o laudo relacionado ao chamado
    public function getLaudo(): string
    {
        return $this->laudo;
    }

    // Retorna a data atual da abertura do chamado
    public function dataAbertura(): string
    {
        return Util::DataAtualBr();
    }

    // Retorna a hora atual da abertura do chamado
    public function horaAbertura(): string
    {
        return Util::HoraAtual();
    }

    // Retorna a data atual do atendimento do chamado
    public function dataAtendimento(): string
    {
        return Util::DataAtualBr();
    }

    // Retorna a hora atual do atendimento do chamado 
    public function horaAtendimento(): string
    {
        return Util::HoraAtual();
    }

    // Retorna a data atual do encerramento do chamado
    public function dataEncerramento(): string
    {
        return Util::DataAtualBr();
    }

    // Retorna a hora atual do encerramento do chamado 
    public function horaEncerramento(): string
    {
        return Util::HoraAtual();
    }
}

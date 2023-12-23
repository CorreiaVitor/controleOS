<?php

namespace Src\VO;

use Src\Public\Util;

class EnderecoVO
{
    private int $id;
    private int $id_cidade;
    private int $id_usuario;
    private string $rua;
    private string $bairro;
    private string $cep;

    // Função que define o ID do endereço
    public function setEnderecoId(int $p_id): void
    {
        $this->id = $p_id;
    }
    // Função que retorna o ID do endereço
    public function getEnderecoId(): int
    {
        return $this->id;
    }

    // Função que define o ID da cidade 
    public function setCidade(string $p_cidade): void
    {
        $this->id_cidade = $p_cidade;
    }
    // Função que retorna a cidade
    public function getCidade(): string
    {
        return $this->id_cidade;
    }

    // Função que define o ID da usuario 
    public function setUsuario(string $p_usuario): void
    {
        $this->id_usuario = $p_usuario;
    }
    // Função que retorna a usuario
    public function getUsuario(): string
    {
        return $this->id_usuario;
    }

    // Função que define a rua 
    public function setRua(string $p_rua): void
    {
        $this->rua = Util::DadosMaliciosos($p_rua);
    }
    // Função que retorna a rua
    public function getRua()
    {
        return $this->rua;
    }

    // Função que define o bairro 
    public function setBairro(string $p_bairro): void
    {
        $this->bairro = Util::TratarDadosGerais($p_bairro);
    }
    // Função que retorna o bairro
    public function getBairro(): string
    {
        return $this->bairro;
    }

    // Função que define o cep 
    public function setCep(string $p_cep): void
    {
        $this->cep = Util::TratarDadosGerais($p_cep);
    }
    // Função que retorna o cep
    public function getCep(): string
    {
        return $this->cep;
    }
}

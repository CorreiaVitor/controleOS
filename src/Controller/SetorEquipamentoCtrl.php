<?php

namespace Src\Controller;

use Src\Model\SetorEquipamentoModel;
use Src\VO\SetorEquipamentoVO;

class SetorEquipamentoCtrl
{
    private $model;

    // Construtor que inicializa o objeto model
    public function __construct()
    {
        $this->model = new SetorEquipamentoModel;
    }

    // Método para cadastrar setor de equipamento, verificando se o nome não está vazio
    public function CadastrarSetorEquipamentoCtrl(SetorEquipamentoVO $SetorVO): int
    {
        if (empty($SetorVO->getNomeSetor())){
            return 0; // Falha ao cadastrar se o nome estiver vazio
        }
        
        return $this->model->CadastrarSetorEquipamentoModel($SetorVO);
    }

    // Método para alterar setor de equipamento, verificando se o ID e o nome não estão vazios
    public function AlterarSetorEquipamentoCtrl(SetorEquipamentoVO $SetorVO): int
    {
        if(empty($SetorVO->getIdSetor()) OR empty($SetorVO->getNomeSetor())){
            return 0; // Falha ao alterar se o ID ou o nome estiverem vazios
        }

        return $this->model->AlterarSetorEquipamentoModel($SetorVO);
    }

    // Método para detalhar setor de equipamento
    public function DetalharSetorEquipamentoCtrl(): array
    {
        return $this->model->DetalharSetorEquipamentoModel();
    }

    // Método para excluir setor de equipamento, verificando se o ID não está vazio
    public function DeletarSetorEquipamentoCtrl(SetorEquipamentoVO $SetorVO): int
    {
        if(empty($SetorVO->getIdSetor())){
            return 0; // Falha ao excluir se o ID estiver vazio
        }

        return $this->model->DeletarSetorEquipamentoModel($SetorVO);
    }
}

?>

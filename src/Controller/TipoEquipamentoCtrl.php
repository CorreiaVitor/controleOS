<?php

namespace Src\Controller;

use Src\Model\TipoEquipamentoModel;
use Src\VO\TipoEquipamentoVO;

class TipoEquipamentoCtrl
{
    private $model;

    // Construtor que inicializa o objeto model
    public function __construct()
    {
        $this->model = new TipoEquipamentoModel;
    }

    // Método para cadastrar tipo de equipamento, verificando se o nome não está vazio
    public function CadastrarTipoEquipamentoCtrl(TipoEquipamentoVO $tipoVO): int
    {
        if (empty($tipoVO->getNomeTipo())){
            return 0; // Falha ao cadastrar se o nome estiver vazio
        }
        
        return $this->model->CadastrarTipoEquipamentoModel($tipoVO);
    }

    // Método para alterar tipo de equipamento, verificando se o ID e o nome não estão vazios
    public function AlterarTipoEquipamentoCtrl(TipoEquipamentoVO $tipoVO): int
    {
        if(empty($tipoVO->getIdTipo()) OR empty($tipoVO->getNomeTipo())){
            return 0; // Falha ao alterar se o ID ou o nome estiverem vazios
        }

        return $this->model->AlterarTipoEquipamentoModel($tipoVO);

        
    }

    // Método para detalhar tipos de equipamento
    public function DetalharTipoEquipamentoCtrl(): array
    {
        return $this->model->DetalharTipoEquipamentoModel();
    }

    // Método para excluir tipo de equipamento, verificando se o ID não está vazio
    public function DeletarTipoEquipamentoCtrl(TipoEquipamentoVO $tipoVO): int
    {
        if(empty($tipoVO->getIdTipo())){
            return 0; // Falha ao excluir se o ID estiver vazio
        }

        return $this->model->DeletarTipoEquipamentoModel($tipoVO);
    }
}

?>

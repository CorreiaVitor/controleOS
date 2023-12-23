<?php

namespace Src\Controller;

use Src\Model\ModeloEquipamentoModel;
use Src\VO\ModeloEquipamentoVO;

class ModeloEquipamentoCtrl
{
    private $model;

    // Construtor que inicializa o objeto model
    public function __construct()
    {
        $this->model = new ModeloEquipamentoModel;
    }

    // Método para cadastrar modelo de equipamento, verificando se o nome não está vazio
    public function CadastrarModeloEquipamentoCtrl(ModeloEquipamentoVO $modeloVO): int
    {
        if (empty($modeloVO->getNomeModelo())){
            return 0; // Falha ao cadastrar se o nome estiver vazio
        }
        
        return $this->model->CadastrarModeloEquipamentoModel($modeloVO);
    }

    // Método para alterar modelo de equipamento, verificando se o ID e o nome não estão vazios
    public function AlterarModeloEquipamentoCtrl(ModeloEquipamentoVO $modeloVO): int
    {
        if(empty($modeloVO->getIdModelo()) OR empty($modeloVO->getNomeModelo())){
            return 0; // Falha ao alterar se o ID ou o nome estiverem vazios
        }

        return $this->model->AlterarModeloEquipamentoModel($modeloVO);

        
    }

    // Método para detalhar modelos de equipamento
    public function DetalharModeloEquipamentoCtrl(): array
    {
        return $this->model->DetalharModeloEquipamentoModel();
    }

    // Método para excluir modelo de equipamento, verificando se o ID não está vazio
    public function DeletarModeloEquipamentoCtrl(ModeloEquipamentoVO $modeloVO): int
    {
        if(empty($modeloVO->getIdModelo())){
            return 0; // Falha ao excluir se o ID estiver vazio
        }

        return $this->model->DeletarModeloEquipamentoModel($modeloVO);
    }
}

?>

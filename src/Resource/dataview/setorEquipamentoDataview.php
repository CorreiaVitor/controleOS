<?php
// Inclui os arquivos necessários
include_once dirname(__DIR__, 3) . '/vendor/autoload.php';

// Importa namespaces
use Src\Controller\SetorEquipamentoCtrl;
use Src\VO\SetorEquipamentoVO;

// Cria uma instância de setorEquipamentoCtrl
$objCtrl = new SetorEquipamentoCtrl;


if (isset($_POST['btn_cadastrar'])) {
    // Cria uma nova instância de SetorEquipamentoVO
    $objVO = new SetorEquipamentoVO;

    // Define o nome do setor de equipamento com base nos dados do formulário
    $objVO->setNomeSetor($_POST['nome_setor']);

    // Chama o método CadastrarSetorEquipamentoCtrl para adicionar um novo setor de equipamento
    $ret = $objCtrl->CadastrarSetorEquipamentoCtrl($objVO);

    // Verifica se o formulário foi enviado via AJAX
    if ($_POST['btn_cadastrar'] == 'ajx') {
        // Exibe o resultado
        echo $ret;
    }
} 

else if (isset($_POST['detelhar_setor_equipamento'])) {
    // Chama o método DetalharSetorEquipamentoCtrl para obter a consulta dos setor de equipamento
    $dados = $objCtrl->DetalharSetorEquipamentoCtrl();
?>
    <!-- Exibe os cabeçalhos da tabela -->
    <thead>
        <tr>
            <th>Setor equipamento</th>
            <th>Ação</th>
        </tr>
    </thead>
    <?php foreach ($dados as $setores) { ?>
        <!-- Utiliza o laço de repetição foreach para exibir as linhas da tabela com detalhes de cada Setor de equipamento -->
        <tbody>
            <tr>
                <td><?= $setores['nome_setor'] ?></td>
                <td>
                    <!-- Botões para alterar e excluir Setors de equipamento (disparadores de modal) -->
                    <a href="#" data-target="#modal-alterar" data-toggle="modal" class="btn btn-warning btn-xs">Alterar</a>
                    <a href="#" data-target="#modal-excluir" data-toggle="modal" class="btn btn-danger btn-xs">Excluir</a>
                </td>
            </tr>
        </tbody>
    <?php } ?>
<?php } 

else if (isset($_POST['btn_alterar'])) {
    // Cria uma nova instância de SetorEquipamentoVO
    $objVO = new SetorEquipamentoVO;

    // Define o ID e o nome do Setor de equipamento com base nos dados do formulário
    $objVO->setIdSetor($_POST['id_setor']);
    $objVO->setNomeSetor($_POST['nome_setor']);

    // Chama o método AlterarSetorEquipamentoCtrl para alterar o setor de equipamento
    $ret = $objCtrl->AlterarSetorEquipamentoCtrl($objVO);

    // Verifica se o formulário foi enviado via AJAX
    if ($_POST['btn_alterar'] == 'ajx') {
        // Exibe o resultado
        echo $ret;
    }
} 
// Verifica se o formulário para excluir setor de equipamento foi enviado
else if (isset($_POST['btn_deletar'])) {
    // Cria uma nova instância de SetorEquipamentoVO
    $objVO = new SetorEquipamentoVO;

    // Define o ID do setor de equipamento com base nos dados do formulário
    $objVO->setIdSetor($_POST['id_setor']);

    // Chama o método DeletarSetorEquipamentoCtrl para excluir o setor de equipamento
    $ret = $objCtrl->DeletarSetorEquipamentoCtrl($objVO);

    // Verifica se o formulário foi enviado via AJAX
    if ($_POST['btn_cadastar'] == 'ajx') {
        // Exibe o resultado
        echo $ret;
    }
}
?>

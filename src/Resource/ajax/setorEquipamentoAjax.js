// Função em JavaScript para cadastrar um novo setor de equipamento via AJAX
function CadastrarsetorEquipamentoAjax(formID) {

    // Verifica se os campos do formulário estão preenchidos corretamente
    if(validarCamposJS(formID)){

        // Obtém o valor do campo 'nome_setor' do formulário
        let nome = $("#nome_setor").val();

        // Envia uma requisição AJAX para cadastrar o setor de equipamento
        $.ajax({

            // Antes de enviar a requisição, exibe o indicador de carregamento
            beforeSend: function(){
                Load();
            },
            type: 'post',
            url: BASE_URL_DATAVIEW('SetorEquipamentoDataview'),
            data: {
                nome_setor: nome,
                btn_cadastrar: 'ajx'
            },
            // Ao receber uma resposta bem-sucedida
            success: function (ret){
                // Exibe mensagens de retorno
                mensagensJS(ret);
                // Limpa os campos do formulário
                LimparCamposJS(formID);
                // Atualiza os detalhes do setor de equipamento na tabela
                DetalharsetorEquipamento();
            },
            // Ao completar a requisição, remove o indicador de carregamento
            complete: function(){
                RemoverLoad();
            }

        });

    }
    
}

// Função em JavaScript para obter e exibir detalhes de setors de equipamento via AJAX
function DetalharsetorEquipamento() {
    
    // Envia uma requisição AJAX para obter detalhes de setors de equipamento
    $.ajax({

        // Antes de enviar a requisição, exibe o indicador de carregamento
        beforeSend: function(){
            Load();
        },
        type: 'post',
        url: BASE_URL_DATAVIEW('setorEquipamentoDataview'),
        data: {
            detelhar_setor_equipamento: 'ajx',
        },
        // Ao receber uma resposta bem-sucedida, atualiza a tabela com os dados obtidos
        success: function (dados){
            $("#tableResult").html(dados);
        },
        // Ao completar a requisição, remove o indicador de carregamento
        complete: function(){
            RemoverLoad();
        }

    });

}

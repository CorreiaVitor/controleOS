// Função em JavaScript para cadastrar um novo modelo de equipamento via AJAX
function CadastrarModeloEquipamentoAjax(formID) {

    // Verifica se os campos do formulário estão preenchidos corretamente
    if(validarCamposJS(formID)){

        // Obtém o valor do campo 'nome_modelo' do formulário
        let nome = $("#nome_modelo").val();

        // Envia uma requisição AJAX para cadastrar o Modelo de equipamento
        $.ajax({

            // Antes de enviar a requisição, exibe o indicador de carregamento
            beforeSend: function(){
                Load();
            },
            type: 'post',
            url: BASE_URL_DATAVIEW('modeloEquipamentoDataview'),
            data: {
                nome_modelo: nome,
                btn_cadastrar: 'ajx'
            },
            // Ao receber uma resposta bem-sucedida
            success: function (ret){
                // Exibe mensagens de retorno
                mensagensJS(ret);
                // Limpa os campos do formulário
                LimparCamposJS(formID);
                // Atualiza os detalhes do modelo de equipamento na tabela
                DetalharModeloEquipamento();
            },
            // Ao completar a requisição, remove o indicador de carregamento
            complete: function(){
                RemoverLoad();
            }

        });

    }
    
}

// Função em JavaScript para obter e exibir detalhes de modelos de equipamento via AJAX
function DetalharModeloEquipamento() {
    
    // Envia uma requisição AJAX para obter detalhes de modelos de equipamento
    $.ajax({

        // Antes de enviar a requisição, exibe o indicador de carregamento
        beforeSend: function(){
            Load();
        },
        type: 'post',
        url: BASE_URL_DATAVIEW('modeloEquipamentoDataview'),
        data: {
            detelhar_modelo_equipamento: 'ajx',
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

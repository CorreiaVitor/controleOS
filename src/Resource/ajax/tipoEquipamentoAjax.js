// Função em JavaScript para cadastrar um novo tipo de equipamento via AJAX
function CadastrarTipoEquipamentoAjax(formID) {

    // Verifica se os campos do formulário estão preenchidos corretamente
    if(validarCamposJS(formID)){

        // Obtém o valor do campo 'nome_tipo' do formulário
        let nome = $("#nome_tipo").val();

        // Envia uma requisição AJAX para cadastrar o tipo de equipamento
        $.ajax({

            // Antes de enviar a requisição, exibe o indicador de carregamento
            beforeSend: function(){
                Load();
            },
            type: 'post',
            url: BASE_URL_DATAVIEW('tipoEquipamentoDataview'),
            data: {
                nome_tipo: nome,
                btn_cadastrar: 'ajx'
            },
            // Ao receber uma resposta bem-sucedida
            success: function (ret){
                // Exibe mensagens de retorno
                mensagensJS(ret);
                // Limpa os campos do formulário
                LimparCamposJS(formID);
                // Atualiza os detalhes do tipo de equipamento na tabela
                DetalharTipoEquipamento();
            },
            // Ao completar a requisição, remove o indicador de carregamento
            complete: function(){
                RemoverLoad();
            }

        });

    }
    
}

// Função em JavaScript para obter e exibir detalhes de tipos de equipamento via AJAX
function DetalharTipoEquipamento() {
    
    // Envia uma requisição AJAX para obter detalhes de tipos de equipamento
    $.ajax({

        // Antes de enviar a requisição, exibe o indicador de carregamento
        beforeSend: function(){
            Load();
        },
        type: 'post',
        url: BASE_URL_DATAVIEW('tipoEquipamentoDataview'),
        data: {
            detelhar_tipo_equipamento: 'ajx',
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

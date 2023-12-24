function BASE_URL_DATAVIEW(url) {
    return '../../Resource/dataview/' + url + '.php';
}

//Função JS para verificar campos vazios em um formulário usando seu ID.
function validarCamposJS(formID) {
    let ret = true;

    //laço de repetição foreach em jQuery que irá percorrer os id com campos
    $("#" + formID + " input, #" + formID + " select, #" + formID + " textarea").each(function () {

        // Verifica se o campo possui a classe "obg" (obrigatório)
        if ($(this).hasClass("obg")) {
            // Verifica se o valor do campo está vazio
            if ($(this).val() == "") {
                ret = false;
                $(this).addClass("is-invalid");
            } else {
                // Remove as classes de validação se o campo estiver preenchido
                $(this).removeClass("is-invalid").addClass("is-valid");
            }
        }
    });

    if (!ret)
        mensagensJS(0);

    return ret;
}

// Função em JavaScript para exibir um indicador de carregamento
function Load() {
    $(".loader").addClass("is-active");
}

// Função em JavaScript para remover o indicador de carregamento
function RemoverLoad() {
    $(".loader").removeClass("is-active");
}

// Função em JavaScript para limpar os campos de um formulário com base no seu ID
function LimparCamposJS(formID) {
    $("#" + formID + " input, #" + formID + " select, #" + formID + " textarea").each(function () {
        // Limpa o valor do campo e remove classes de validação
        $(this).val('');
        $(this).removeClass('is-invalid').removeClass('is-valid');
    });
}

function fecharModal (nome_modal) {
    $("#" + nome_modal).modal("hide")
}


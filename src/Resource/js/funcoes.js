//Função JS para verificar campos vazios em um formulário usando seu ID.
function validarCamposJS(formID) {
    let ret = true;

    //laço de repetição foreach em jQuery que irá percorrer os id com campos
    $("#" + formID + " input, #" + formID + " select, #" + formID + " textarea").each(function () {
        
        if ($(this).hasClass("obg")) {
            if ($(this).val() == "") {
                ret = false;
                $(this).addClass("is-invalid");
            } else {
                $(this).removeClass("is-invalid").addClass("is-valid");
            }
        }
    });

    if (!ret)
        mensagensJS(0);

    return ret;


}
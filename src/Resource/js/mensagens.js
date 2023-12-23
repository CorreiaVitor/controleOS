function mensagensJS(ret) {

//Arquivos de msg em javascript
    if(ret == 0){
        toastr.warning('Preencha todos os campos obrigatórios!');
    }else if (ret == 1){
        toastr.success('Ação concluída com sucesso!');
    }else if (ret == -1){
        toastr.error('Ocorreu uma erro. Tente novamente mais tarde');
    }
}
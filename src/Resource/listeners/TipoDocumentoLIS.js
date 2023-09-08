document.addEventListener('keypress', (e) => {

    if (e.key === 'Enter') {

        e.preventDefault();

        if (e.target.id == 'tipo') {
            // botão chama CadastrarTipoDocumentoAJAX('formTipo')
            $("#btn_cadastrar").click();
        } else if (e.target.getAttribute('id') == 'tipo_alterar') {
            // botão chama AlterarTipoDocumentoAJAX('formAlt')
            $("#btn_alterar").click();
        }
    }
});
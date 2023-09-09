document.addEventListener('keypress', (e) => {

    if (e.key === 'Enter') {

        e.preventDefault();

        if (e.target.id == 'cidade' || e.target.id == 'estado') {
            $("#btn_cadastrar").trigger("click");
        } else if (e.target.getAttribute('id') == 'tipo_alterar') {
            $("#btn_alterar").trigger("click");
        }
    }
});
function CadastrarTipoDocumentoAJAX(formID) {

    if (NotificarCampos(formID)) {

        let nome = $("#tipo").val();

        $.ajax({
            type: "post",
            url: BASE_URL_DATAVIEW('TipoDocumentoDV'),
            data: {
                tipo: nome,
                btn_cadastrar: 'ajx'
            },
            success: function (ret) {
                MostrarMensagem(ret);
                ConsultarTipo();
                LimparNotificacoes(formID);
                $("#tipo").trigger('focus');
            }
        })
    }
}

function ConsultarTipo() {

    $.ajax({
        type: "post",
        url: BASE_URL_DATAVIEW('TipoDocumentoDV'),
        data: {
            consultar_tipo: 'ajx'
        },
        success: function (tipos) {
            if (tipos == 'NADA') {
                $("#barraTituloFiltro").addClass("d-block").removeClass("d-none").addClass("bg-warning").removeClass("bg-info").removeClass("bg-success").removeClass("bg-danger");
                $("#tituloFiltro").html("Nenhum tipo cadastrado");
                $("#pesquisa").hide();
                $("#AltereOuExclua").addClass("d-none").removeClass("d-block");
                $("#tableResult").hide();
            } else if (tipos == -1){
                $("#barraTituloFiltro").addClass("d-block").addClass("bg-danger").removeClass("d-none").removeClass("bg-info").removeClass("bg-success").removeClass("bg-warning");
                $("#tituloFiltro").html("Ocorreu um erro na consulta do cadastro");
                $("#pesquisa").hide();
                $("#AltereOuExclua").addClass("d-none").removeClass("d-block");
                $("#tableResult").hide();
            } else {
                $("#filtroTipo").val('');
                $("#barraTituloFiltro").addClass("d-block").removeClass("d-none").addClass("bg-info").removeClass("bg-warning").removeClass("bg-success").removeClass("bg-danger");
                $("#tituloFiltro").html("Tipos cadastrados");
                $("#pesquisa").show();
                $("#AltereOuExclua").addClass("d-block").removeClass("d-none");
                $("#tableResult").show();
                $("#tableResult").html(tipos);
            }
        }
    })
}

function TabelaFiltrada() {

    let filtro = $("#filtroTipo").val();

    $.ajax({
        type: "post",
        url: BASE_URL_DATAVIEW('TipoDocumentoDV'),
        data: {
            btn_filtrar: 'ajx',
            filtroTipo: filtro
        },
        success: function (tipos) {
            if (filtro == '') {
                ConsultarTipo();
            } else if (tipos == 'NADA') {
                $("#barraTituloFiltro").addClass("bg-danger").removeClass("bg-warning").removeClass("bg-success").removeClass("bg-info");
                $("#tituloFiltro").html("A pesquisa não retornou resultados");
                $("#pesquisa").show();
                $("#AltereOuExclua").addClass("d-none").removeClass("d-block");
                $("#tableResult").hide();
            } else {
                $("#barraTituloFiltro").addClass("bg-success").removeClass("bg-warning").removeClass("bg-danger").removeClass("bg-info");
                $("#tituloFiltro").html("Tipos filtrados");
                $("#pesquisa").show();
                $("#AltereOuExclua").addClass("d-block").removeClass("d-none");
                $("#tableResult").show();
                $("#tableResult").html(tipos);
            }
        }
    })
}

function AlterarTipoDocumentoAJAX(formID) {

    if (NotificarCampos(formID)) {
        let id = $("#id_tipo_alterar").val();
        let tipo = $("#tipo_alterar").val();
        let tipo_original = $("#tipo_original_alterar").val();

        $.ajax({
            type: 'post',
            url: BASE_URL_DATAVIEW('TipoDocumentoDV'),
            data: {
                btn_alterar: 'ajx',
                id_tipo_alterar: id,
                tipo_alterar: tipo,
                tipo_original_alterar: tipo_original
            },
            success: function (ret) {
                MostrarMensagem(ret);
                if (ret == -2) {
                    $("#tipo_alterar").trigger('focus');
                } else {
                    LimparNotificacoes(formID);
                    ConsultarTipo();
                    $("#alterarTipo").modal("hide");
                }
            }
        })
    }
}

function Excluir() {

    let id = $("#id_excluir").val();

    $.ajax({
        type: 'post',
        url: BASE_URL_DATAVIEW('TipoDocumentoDV'),
        data: {
            btn_excluir: 'ajx',
            id_excluir: id
        },
        success: function (ret) {
            MostrarMensagem(ret);
            ConsultarTipo();
            $("#modalExcluir").modal("hide");
        }
    })
}

function Filtrar() {

    let filtro = $('#filtroTipo').val();

    $.ajax({
        type: 'post',
        url: BASE_URL_DATAVIEW('TipoDocumentoDV'),
        data: {
            btn_filtrar: 'ajx',
            filtroTipo: filtro
        },
        success: function (filtroAtivado) {
            if (filtroAtivado == false) {
                ConsultarTipo();
            } else {
                TabelaFiltrada();
            }
        }
    })
}
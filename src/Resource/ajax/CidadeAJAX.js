function CadastrarCidadeAJAX(formID) {

    if (NotificarCampos(formID)) {

        let nome = $("#cidade").val();
        let estado = $("#estado").val();

        $.ajax({
            type: "post",
            url: BASE_URL_DATAVIEW('CidadeDV'),
            data: {
                cidade: nome,
                estado: estado,
                btn_cadastrar: 'ajx'
            },
            success: function (ret) {
                MostrarMensagem(ret);
                ConsultarCidade();
                LimparNotificacoes(formID);
                $("#cidade").trigger('focus');
            }
        })
    }
}

function ConsultarCidade() {

    $.ajax({
        type: "post",
        url: BASE_URL_DATAVIEW('CidadeDV'),
        data: {
            consultar_cidade: 'ajx'
        },
        success: function (cidades) {
            if (cidades == 'NADA') {
                $("#barraTituloFiltro").addClass("d-block").removeClass("d-none").addClass("bg-warning").removeClass("bg-info").removeClass("bg-success").removeClass("bg-danger");
                $("#tituloFiltro").html("Nenhuma cidade cadastrada");
                $("#pesquisa").hide();
                $("#AltereOuExclua").addClass("d-none").removeClass("d-block");
                $("#tableResult").hide();
            } else if (cidades == -1) {
                $("#barraTituloFiltro").addClass("d-block").addClass("bg-danger").removeClass("d-none").removeClass("bg-info").removeClass("bg-success").removeClass("bg-warning");
                $("#tituloFiltro").html("Ocorreu um erro na consulta do cadastro");
                $("#pesquisa").hide();
                $("#AltereOuExclua").addClass("d-none").removeClass("d-block");
                $("#tableResult").hide();
            } else {
                $("#filtroCidade").val('');
                $("#barraTituloFiltro").addClass("d-block").removeClass("d-none").addClass("bg-info").removeClass("bg-warning").removeClass("bg-success").removeClass("bg-danger");
                $("#tituloFiltro").html("Cidades cadastradas");
                $("#pesquisa").show();
                $("#AltereOuExclua").addClass("d-block").removeClass("d-none");
                $("#tableResult").show();
                $("#tableResult").html(cidades);
            }
        }
    })
}

function TabelaFiltrada() {

    let filtro = $("#filtroCidade").val();

    $.ajax({
        type: "post",
        url: BASE_URL_DATAVIEW('CidadeDV'),
        data: {
            btn_filtrar: 'ajx',
            filtroCidade: filtro
        },
        success: function (cidades) {
            if (filtro == '') {
                ConsultarCidade();
            } else if (cidades == 'NADA') {
                $("#barraTituloFiltro").addClass("bg-danger").removeClass("bg-warning").removeClass("bg-success").removeClass("bg-info");
                $("#tituloFiltro").html("A pesquisa não retornou resultados");
                $("#pesquisa").show();
                $("#AltereOuExclua").addClass("d-none").removeClass("d-block");
                $("#tableResult").hide();
            } else {
                $("#barraTituloFiltro").addClass("bg-success").removeClass("bg-warning").removeClass("bg-danger").removeClass("bg-info");
                $("#tituloFiltro").html("Cidades filtradas");
                $("#pesquisa").show();
                $("#AltereOuExclua").addClass("d-block").removeClass("d-none");
                $("#tableResult").show();
                $("#tableResult").html(cidades);
            }
        }
    })
}

function AlterarCidadeAJAX(formID) {

    if (NotificarCampos(formID)) {
        let id = $("#id_cidade_alterar").val();
        let cidade = $("#cidade_alterar").val();
        let cidade_original = $("#cidade_original_alterar").val();
        let estado = $("#estado_alterar").val();
        let estado_original = $("#estado_original_alterar").val();

        $.ajax({
            type: 'post',
            url: BASE_URL_DATAVIEW('CidadeDV'),
            data: {
                btn_alterar: 'ajx',
                id_cidade_alterar: id,
                cidade_alterar: cidade,
                cidade_original_alterar: cidade_original,
                estado_alterar: estado,
                estado_original_alterar: estado_original
            },
            success: function (ret) {
                MostrarMensagem(ret);
                if (ret == -2) {
                    $("#cidade_alterar").trigger('focus');
                } else {
                    LimparNotificacoes(formID);
                    ConsultarCidade();
                    $("#alterarCidade").modal("hide");
                }
                Cidade
            }
        })
    }
}

function Excluir() {

    let id = $("#id_excluir").val();

    $.ajax({
        type: 'post',
        url: BASE_URL_DATAVIEW('CidadeDV'),
        data: {
            btn_excluir: 'ajx',
            id_excluir: id
        },
        success: function (ret) {
            MostrarMensagem(ret);
            ConsultarCidade();
            $("#modalExcluir").modal("hide");
        }
    })
}

function Filtrar() {

    let filtro = $('#filtroCidade').val();

    $.ajax({
        type: 'post',
        url: BASE_URL_DATAVIEW('CidadeDV'),
        data: {
            btn_filtrar: 'ajx',
            filtroCidade: filtro
        },
        success: function (filtroAtivado) {
            if (filtroAtivado == false) {
                ConsultarCidade();
            } else {
                TabelaFiltrada();
            }
        }
    })
}
<?php
include_once dirname(__DIR__, 2) . '/Resource/dataview/CidadeDV.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link href="../../../node_modules/jquery-editable-select/src/jquery-editable-select.css" rel="stylesheet">
    <?php require_once PATH . '/Template/_includes/_head.php'; ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <?php
        include_once PATH . '/Template/_includes/_topo.php';
        include_once PATH . '/Template/_includes/_menu.php';
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h2 class="text-primary">Gerenciar cidades</h2>
                            <a>Aqui você gerencia todas as cidades</a>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cadastre uma nova cidade</h3>
                    </div>
                    <div class="card-body">
                        <form id="formCid" method="post" action="Cidades.php">
                            <div class="row">
                                <div class=" form-group col-md-10">
                                    <label>Nome da cidade</label>
                                    <input class="form-control obg" name="cidade" id="cidade"
                                        placeholder="Digite aqui...">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>UF</label>
                                    <select class="form-control select2 obg" name="estado" id="estado"
                                        style="width: 80px">
                                        <?php foreach (ESTADOS as $estado) { ?>
                                            <option value="<?= $estado ?>"><?= $estado ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <button type="button" onclick="CadastrarCidadeAJAX('formCid')" class="btn btn-success"
                                name="btn_cadastrar" id="btn_cadastrar">Cadastrar</button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <form action="Cidades.php" method="post">
                        <div class="card-header bg-info d-none" id="barraTituloFiltro">
                            <h3 class="card-title" id="tituloFiltro">Cidades Cadastradas</h3>
                            <div class="card-tools" id="pesquisa">
                                <div class="input-group input-group-sm" style="width: 200px;">
                                    <input type="text" name="filtroTipo" id="filtroTipo" onkeyup="Filtrar()"
                                        class="form-control float-right" placeholder="Pesquise por...">
                                    <div class="input-group-append">
                                        <button type="button" name="btn_filtrar" id="btn_filtrar" title="Pesquisar"
                                            onclick="Filtrar()" class="btn btn-default btn-sm"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                    <div class="input-group-append">
                                        <button name="btn_limparFiltro" type="button" class="btn btn-info btn-sm"
                                            title="Limpar filtro" onclick="ConsultarCidade()"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
                <div class="card-body d-none" id="AltereOuExclua">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Altere ou exclua os registros</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover" id="tableResult">

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
        </div>
        <!-- /.card -->
        <form action="Cidades.php" method="post" id="formAlt">
            <?php include_once 'modais/alterar_cidade.php'; ?>
        </form>
        <?php include_once 'modais/excluir.php'; ?>
        </section>
        <!-- /.content -->

        <?php include_once PATH . '/Template/_includes/_footer.php'; ?>

    </div>
    <!-- /.content-wrapper <-->

    <script>
        FocarInputModal('alterarTipo', 'tipo_alterar');
    </script>
    </div>
    <!-- ./wrapper -->

    <script>
        AjustarMenu("Convênios", "menuCadastros", "cidades");
        $("#cidade").focus();

        $(document).ready(function () {
            $("#estado").editableSelect();
        });

    </script>

    <script src="../../Resource/ajax/CidadeAJAX.js"></script>
    <script src="../../Resource/listeners/CidadeLIS.js"></script>

    <!-- Editable select option -->
    <script src="../../../node_modules/jquery-editable-select/src/jquery-editable-select.js"></script>

    <script>
        ConsultarCidade();
    </script>

</body>

</html>
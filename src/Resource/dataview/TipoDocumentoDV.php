<?php

use Src\VO\TipoDocumentoVO;
use Src\Controller\TipoDocumentoCTRL;

include_once dirname(__DIR__, 3) . '/vendor/autoload.php';

$ctrlTipoDoc = new TipoDocumentoCTRL();
$filtro = "";
$filtroAtivado = false;
$tipos[] = "";

if (isset($_POST['btn_cadastrar'])) {

    $voTipoDoc = new TipoDocumentoVO();

    $voTipoDoc->setNomeTipoDocumento($_POST['tipo']);

    // consulta se o tipo já está cadastrado
    $ret = $ctrlTipoDoc->FiltrarTipoDocumentoCTRL($voTipoDoc, "S");

    // se o tipo já estiver cadastrado
    if (count($ret) == 1) {

        $ret = -3;

    } else {

        $ret = $ctrlTipoDoc->CadastrarTipoDocumentoCTRL($voTipoDoc);

    }

    if ($_POST['btn_cadastrar'] == 'ajx') {
        echo $ret;
    }

} elseif (isset($_POST['btn_alterar'])) {

    $tipoOriginal = $_POST['tipo_original_alterar'];
    $tipo = $_POST['tipo_alterar'];

    if ($tipoOriginal == $tipo) {
        $ret = -2;
    } else {

        $voTipoDoc = new TipoDocumentoVO();

        $voTipoDoc->setIdTipoDocumento($_POST['id_tipo_alterar']);
        $voTipoDoc->setNomeTipoDocumento($tipo);

        $ret = $ctrlTipoDoc->AlterarTipoDocumentoCTRL($voTipoDoc);
    }

    if ($_POST['btn_alterar'] == 'ajx') {
        echo $ret;
    }

} elseif (isset($_POST['btn_excluir'])) {

    $voTipoDoc = new TipoDocumentoVO();

    $voTipoDoc->setIdTipoDocumento($_POST['id_excluir']);

    $ret = $ctrlTipoDoc->ExcluirTipoDocumentoCTRL($voTipoDoc);

    if ($_POST['btn_excluir'] == 'ajx') {
        echo $ret;
    }
}

if (isset($_POST['btn_filtrar'])) {

    $filtro = $_POST['filtroTipo'];

    if ($filtro != "") {

        $voTipoDoc = new TipoDocumentoVO();

        $voTipoDoc->setNomeTipoDocumento($filtro);

        $tipos = $ctrlTipoDoc->FiltrarTipoDocumentoCTRL($voTipoDoc, "F");

        $filtroAtivado = true;

    } else {

        $tipos = $ctrlTipoDoc->ConsultarTipoDocumentoCTRL();
        $filtroAtivado = false;

    }

    if ($_POST['btn_filtrar'] == 'ajx') {

        if (count($tipos) > 0) {
            include_once PATH . '/view/adm/tabelas/TipoDocumentoTABLE.php';
        } else {
            echo 'NADA';
        }
    }

} elseif (isset($_POST['btn_limparFiltro'])) {

    $filtro = "";
    $filtroAtivado = false;
    $tipos = $ctrlTipoDoc->ConsultarTipoDocumentoCTRL();

    if (count($tipos) == 0) {
        echo 'NADA';
    }

} elseif (isset($_POST['consultar_tipo'])) {

    $tipos = $ctrlTipoDoc->ConsultarTipoDocumentoCTRL();

    if ($tipos == -1) {
        echo -1;
    } else {
        if (count($tipos) > 0) {
            include_once PATH . '/view/adm/tabelas/TipoDocumentoTABLE.php';
        } else {
            echo 'NADA';
        }
    }
}
<?php

use Src\VO\CidadeVO;
use Src\Controller\CidadeCTRL;

include_once dirname(__DIR__, 3) . '/vendor/autoload.php';

$ctrlCidade = new CidadeCTRL();
$filtro = "";
$filtroAtivado = false;
$cidades[] = "";

if (isset($_POST['btn_cadastrar'])) {

    $voCidade = new CidadeVO();

    $voCidade->setNomeCidade($_POST['nome']);
    $voCidade->setEstado($_POST['estado']);

    // consulta se o tipo já está cadastrado
    $ret = $ctrlCidade->FiltrarCidadeCTRL($voCidade, "S");

    // se o tipo já estiver cadastrado
    if (count($ret) == 1) {

        $ret = -3;

    } else {

        $ret = $ctrlCidade->CadastrarCidadeCTRL($voCidade);

    }

    if ($_POST['btn_cadastrar'] == 'ajx') {
        echo $ret;
    }

} elseif (isset($_POST['btn_alterar'])) {

    $cidadeOriginal = $_POST['cidade_original_alterar'];
    $cidade = $_POST['cidade_alterar'];
    $estadoOriginal = $_POST['estado_original_alterar'];
    $estado = $_POST['estado'];

    if ($cidadeOriginal == $cidade && $estadoOriginal == $estado) {
        $ret = -2;
    } else {

        $voCidade = new CidadeVO();

        $voCidade->setIdCidade($_POST['id_cidade_alterar']);
        $voCidade->setNomeCidade($cidade);

        $ret = $ctrlCidade->AlterarCidadeCTRL($voCidade);
    }

    if ($_POST['btn_alterar'] == 'ajx') {
        echo $ret;
    }

} elseif (isset($_POST['btn_excluir'])) {

    $voCidade = new CidadeVO();

    $voCidade->setIdCidade($_POST['id_excluir']);

    $ret = $ctrlCidade->ExcluirCidadeCTRL($voCidade);

    if ($_POST['btn_excluir'] == 'ajx') {
        echo $ret;
    }
}

if (isset($_POST['btn_filtrar'])) {

    $filtro = $_POST['filtroTipo'];

    if ($filtro != "") {

        $voCidade = new CidadeVO();

        $voCidade->setNomeCidade($filtro);

        $cidades = $ctrlCidade->FiltrarCidadeCTRL($voCidade, "F");

        $filtroAtivado = true;

    } else {

        $cidades = $ctrlCidade->ConsultarCidadeCTRL();
        $filtroAtivado = false;

    }

    if ($_POST['btn_filtrar'] == 'ajx') {

        if (count($cidades) > 0) {
            include_once PATH . '/view/adm/tabelas/CidadeTABLE.php';
        } else {
            echo 'NADA';
        }
    }

} elseif (isset($_POST['btn_limparFiltro'])) {

    $filtro = "";
    $filtroAtivado = false;
    $cidades = $ctrlCidade->ConsultarCidadeCTRL();

    if (count($cidades) == 0) {
        echo 'NADA';
    }

} elseif (isset($_POST['consultar_cidade'])) {

    $cidades = $ctrlCidade->ConsultarCidadeCTRL();

    if ($cidades == -1) {
            echo -1;
    } else {
        if (count($cidades) > 0) {
            include_once PATH . '/view/adm/tabelas/CidadeTABLE.php';
        } else {
            echo 'NADA';
        }
    }
}
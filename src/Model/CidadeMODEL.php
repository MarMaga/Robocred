<?php

namespace Src\Model;

use Exception;
use Src\Model\Conexao;
use Src\Model\SQL\CIDADE_SQL;
use Src\VO\CidadeVO;

class CidadeMODEL extends Conexao
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = parent::retornarConexao();
    }
    
    public function CadastrarCidadeMODEL(CidadeVO $voCidade): int
    {
        $sql = $this->conexao->prepare(CIDADE_SQL::INSERIR_CIDADE());
        $sql->bindValue(1, $voCidade->getNomeCidade());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            $voCidade->setErroTecnico($ex->getMessage());
            parent::GravarErroLog($voCidade);
            return -1;
        }
    }

    public function ConsultarCidadeMODEL(): int|array
    {
        $sql = $this->conexao->prepare(CIDADE_SQL::SELECIONAR_CIDADE("N"));

        try {
            $sql->setFetchMode(\PDO::FETCH_ASSOC);
            $sql->execute();
            return $sql->fetchAll();
        } catch (Exception $ex) {
            return -1;
        }
    }

    public function FiltrarCidadeMODEL(CidadeVO $voCidade, string $checarCadastro): int|array
    {
        if ($checarCadastro == "F") {
            $sql = $this->conexao->prepare(CIDADE_SQL::SELECIONAR_CIDADE("F"));
            $sql->bindValue(1, '%' . $voCidade->getNomeCidade() . '%');
        } else {
            $sql = $this->conexao->prepare(CIDADE_SQL::SELECIONAR_CIDADE("S"));
            $sql->bindValue(1, $voCidade->getNomeCidade());
        }

        try {
            $sql->setFetchMode(\PDO::FETCH_ASSOC);
            $sql->execute();
            return $sql->fetchAll();
        } catch (Exception $ex) {
            return -1;
        }
    }

    public function AlterarCidadeMODEL(CidadeVO $voCidade): int
    {
        $sql = $this->conexao->prepare(CIDADE_SQL::ALTERAR_CIDADE());
        $i = 1;
        $sql->bindValue($i++, $voCidade->getNomeCidade());
        $sql->bindValue($i++, $voCidade->getIdCidade());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            $voCidade->setErroTecnico($ex->getMessage());
            parent::GravarErroLog($voCidade);
            return -1;
        }
    }

    public function ExcluiCidadeMODEL(CidadeVO $voCidade): int
    {
        $sql = $this->conexao->prepare(CIDADE_SQL::EXCLUIR_CIDADE());
        $sql->bindValue(1, $voCidade->getIdCidade());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            $voCidade->setErroTecnico($ex->getMessage());
            parent::GravarErroLog($voCidade);
            return -1;
        }
    }
}

?>
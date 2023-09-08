<?php

namespace Src\Model;

use Exception;
use Src\Model\Conexao;
use Src\Model\SQL\TIPO_DOCUMENTO_SQL;
use Src\VO\TipoDocumentoVO;

class TipoDocumentoMODEL extends Conexao
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = parent::retornarConexao();
    }
    
    public function CadastrarTipoDocumentoMODEL(TipoDocumentoVO $voTipoDoc): int
    {
        $sql = $this->conexao->prepare(TIPO_DOCUMENTO_SQL::INSERIR_TIPO_DocuMENTO());
        $sql->bindValue(1, $voTipoDoc->getNomeTipoDocumento());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            $voTipoDoc->setErroTecnico($ex->getMessage());
            parent::GravarErroLog($voTipoDoc);
            return -1;
        }
    }

    public function ConsultarTipoDocumentoMODEL(): int|array
    {
        $sql = $this->conexao->prepare(TIPO_DOCUMENTO_SQL::SELECIONAR_TIPO_DocuMENTO("N"));

        try {
            $sql->setFetchMode(\PDO::FETCH_ASSOC);
            $sql->execute();
            return $sql->fetchAll();
        } catch (Exception $ex) {
            return -1;
        }
    }

    public function FiltrarTipoDocumentoMODEL(TipoDocumentoVO $voTipoDoc, string $checarCadastro): int|array
    {
        if ($checarCadastro == "F") {
            $sql = $this->conexao->prepare(TIPO_DOCUMENTO_SQL::SELECIONAR_TIPO_DocuMENTO("F"));
            $sql->bindValue(1, '%' . $voTipoDoc->getNomeTipoDocumento() . '%');
        } else {
            $sql = $this->conexao->prepare(TIPO_DOCUMENTO_SQL::SELECIONAR_TIPO_DocuMENTO("S"));
            $sql->bindValue(1, $voTipoDoc->getNomeTipoDocumento());
        }

        try {
            $sql->setFetchMode(\PDO::FETCH_ASSOC);
            $sql->execute();
            return $sql->fetchAll();
        } catch (Exception $ex) {
            return -1;
        }
    }

    public function AlterarTipoDocumentoMODEL(TipoDocumentoVO $voTipoDoc): int
    {
        $sql = $this->conexao->prepare(TIPO_DOCUMENTO_SQL::ALTERAR_TIPO_DocuMENTO());
        $i = 1;
        $sql->bindValue($i++, $voTipoDoc->getNomeTipoDocumento());
        $sql->bindValue($i++, $voTipoDoc->getIdTipoDocumento());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            $voTipoDoc->setErroTecnico($ex->getMessage());
            parent::GravarErroLog($voTipoDoc);
            return -1;
        }
    }

    public function ExcluiTipoDocumentoMODEL(TipoDocumentoVO $voTipoDoc): int
    {
        $sql = $this->conexao->prepare(TIPO_DOCUMENTO_SQL::EXCLUIR_TIPO_DocuMENTO());
        $sql->bindValue(1, $voTipoDoc->getIdTipoDocumento());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            $voTipoDoc->setErroTecnico($ex->getMessage());
            parent::GravarErroLog($voTipoDoc);
            return -1;
        }
    }
}

?>
<?php

namespace Src\Controller;

use Src\Model\TipoDocumentoMODEL;
use Src\VO\TipoDocumentoVO;
use Src\_Public\Util;

class TipoDocumentoCTRL
{
    private $modTipoDoc;

    public function __construct()
    {
        $this->modTipoDoc = new TipoDocumentoMODEL();
    }

    public function CadastrarTipoDocumentoCTRL(TipoDocumentoVO $voTipoDoc): int
    {

        if (empty($voTipoDoc->getNomeTipoDocumento()))
            return 0;

        $voTipoDoc->setCodLogado(Util::CodigoLogado());
        $voTipoDoc->setFuncaoErro(CADASTRAR_TIPO_DOCUMENTO);

        return $this->modTipoDoc->CadastrarTipoDocumentoMODEL($voTipoDoc);
    }

    public function ConsultarTipoDocumentoCTRL(): int|array
    {
        return $this->modTipoDoc->ConsultarTipoDocumentoMODEL();
    }

    public function FiltrarTipoDocumentoCTRL(TipoDocumentoVO $voTipoDoc, string $checarCadastro): int|array
    {
        return $this->modTipoDoc->FiltrarTipoDocumentoMODEL($voTipoDoc, $checarCadastro);
    }

    public function AlterarTipoDocumentoCTRL(TipoDocumentoVO $voTipoDoc): int
    {
        $voTipoDoc->setCodLogado(Util::CodigoLogado());
        $voTipoDoc->setFuncaoErro(ALTERAR_TIPO_DOCUMENTO);

        return $this->modTipoDoc->AlterarTipoDocumentoMODEL($voTipoDoc);
    }

    public function ExcluirTipoDocumentoCTRL(TipoDocumentoVO $voTipoDoc): int
    {
        $voTipoDoc->setCodLogado(Util::CodigoLogado());
        $voTipoDoc->setFuncaoErro(EXCLUIR_TIPO_DOCUMENTO);
        
        return $this->modTipoDoc->ExcluiTipoDocumentoMODEL($voTipoDoc);
    }
}
?>
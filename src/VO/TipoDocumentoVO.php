<?php

namespace Src\VO;

use Src\_Public\Util;
use Src\VO\LogErroVO;

class TipoDocumentoVO extends LogErroVO
{
    private $id;
    private $nome;

    // SET e GET id_tipo_documento
    public function setIdTipoDocumento(int $id): void
    {
        $this->id = $id;
    }
    public function getIdTipoDocumento(): int
    {
        return $this->id;
    }

    // SET e GET tipo_documento
    public function setNomeTipoDocumento(string $nome): void
    {
        $this->nome = Util::RemoverTags($nome);
    }
    public function getNomeTipoDocumento(): string
    {
        return $this->nome;
    }
}

?>
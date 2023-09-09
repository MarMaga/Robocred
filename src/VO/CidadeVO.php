<?php

namespace Src\VO;

use Src\_Public\Util;
use Src\VO\LogErroVO;

class CidadeVO extends LogErroVO
{
    private $id;
    private $nome;
    private $estado;

    // SET e GET id_cidade
    public function setIdCidade(int $id): void
    {
        $this->id = $id;
    }
    public function getIdCidade(): int
    {
        return $this->id;
    }

    // SET e GET nome
    public function setNomeCidade(string $nome): void
    {
        $this->nome = Util::RemoverTags($nome);
    }
    public function getNomeCidade(): string
    {
        return $this->nome;
    }

    // SET e GET nome
    public function setEstado(string $estado): void
    {
        $this->estado = Util::RemoverTags($estado);
    }
    public function getEstado(): string
    {
        return $this->estado;
    }
}

?>
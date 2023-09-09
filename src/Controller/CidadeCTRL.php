<?php

namespace Src\Controller;

use Src\Model\CidadeMODEL;
use Src\VO\CidadeVO;
use Src\_Public\Util;

class CidadeCTRL
{
    private $modCidade;

    public function __construct()
    {
        $this->modCidade = new CidadeMODEL();
    }

    public function CadastrarCidadeCTRL(CidadeVO $voCidade): int
    {

        if (empty($voCidade->getNomeCidade()) || empty($voCidade->getEstado()))
            return 0;

        $voCidade->setCodLogado(Util::CodigoLogado());
        $voCidade->setFuncaoErro(CADASTRAR_CIDADE);

        return $this->modCidade->CadastrarCidadeMODEL($voCidade);
    }

    public function ConsultarCidadeCTRL(): int|array
    {
        return $this->modCidade->ConsultarCidadeMODEL();
    }

    public function FiltrarCidadeCTRL(CidadeVO $voCidade, string $checarCadastro): int|array
    {
        return $this->modCidade->FiltrarCidadeMODEL($voCidade, $checarCadastro);
    }

    public function AlterarCidadeCTRL(CidadeVO $voCidade): int
    {
        $voCidade->setCodLogado(Util::CodigoLogado());
        $voCidade->setFuncaoErro(ALTERAR_CIDADE);

        return $this->modCidade->AlterarCidadeMODEL($voCidade);
    }

    public function ExcluirCidadeCTRL(CidadeVO $voCidade): int
    {
        $voCidade->setCodLogado(Util::CodigoLogado());
        $voCidade->setFuncaoErro(EXCLUIR_CIDADE);
        
        return $this->modCidade->ExcluiCidadeMODEL($voCidade);
    }
}
?>
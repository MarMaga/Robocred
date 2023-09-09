<?php

namespace Src\Model\SQL;

class CIDADE_SQL
{
    public static function INSERIR_CIDADE(): string
    {
        $sql = 'INSERT INTO tb_cidade (nome, estado) VALUES (?,?)';

        return $sql;
    }

    public static function SELECIONAR_CIDADE(string $comFiltro): string
    {
        if ($comFiltro == "N") {

            $sql = 'SELECT id, 
                           nome, 
                           estado 
                      FROM tb_cidade 
                  ORDER BY nome';

        } else {

            $sql = 'SELECT id, 
                           nome, 
                           estado, 
                      FROM tb_cidade 
                     WHERE nome LIKE ?
                  ORDER BY nome';
        }

        return $sql;
    }

    public static function ALTERAR_CIDADE(): string
    {
        $sql = 'UPDATE tb_cidade 
                   SET nome = ?, 
                       estado = ?, 
                 WHERE id = ?';

        return $sql;
    }

    public static function EXCLUIR_CIDADE(): string
    {
        $sql = 'DELETE FROM tb_cidade WHERE id = ?';

        return $sql;
    }
}
?>
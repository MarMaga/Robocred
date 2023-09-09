<?php

namespace Src\Model\SQL;

class TIPO_DOCUMENTO_SQL
{
    public static function INSERIR_TIPO_DOCUMENTO(): string
    {
        $sql = 'INSERT INTO tb_tipoDocumento (nome) VALUES (?)';

        return $sql;
    }

    public static function SELECIONAR_TIPO_DOCUMENTO(string $comFiltro): string
    {
        if ($comFiltro == "N") {

            $sql = 'SELECT id, 
                           nome 
                      FROM tb_tipoDocumento
                  ORDER BY nome';

        } else {

            $sql = 'SELECT id, 
                           nome 
                      FROM tb_tipoDocumento 
                     WHERE nome LIKE ?
                  ORDER BY nome';
        }

        return $sql;
    }

    public static function ALTERAR_TIPO_DOCUMENTO(): string
    {
        $sql = 'UPDATE tb_tipoDocumento
                   SET nome = ?
                 WHERE id = ?';

        return $sql;
    }

    public static function EXCLUIR_TIPO_DOCUMENTO(): string
    {
        $sql = 'DELETE FROM tb_tipoDocumento WHERE id = ?';

        return $sql;
    }
}
?>
<thead>
    <tr>
        <th>Ação</th>
        <th>Cidade</th>
        <th>UF</th>
    </tr>
</thead>
<tbody>
    <?php for ($i = 0; $i < count($cidades); $i++) { ?>
        <tr>
            <td>
                <a href="#"
                    onclick="return ModalAlterarCidade('<?= $cidades[$i]['id'] ?>', '<?= $cidades[$i]['cidade'] ?>')"
                    class="btn btn-warning btn-xs" data-toggle="modal" data-target="#alterarCidade">Alterar</a>
                <a href="#"
                    onclick="return CarregarExcluir('<?= $cidades[$i]['id'] ?>', '<?= $cidades[$i]['cidade'] . ' - ' . $cidades[$i]['estado']?>')"
                    class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalExcluir">Excluir</a>
            </td>
            <td>
                <input type="hidden" name="id" id="id" value="<?= $cidades[$i]['id'] ?>" />
                <?= $cidades[$i]['cidade'] ?>
            </td>
            <td>
                <?= $cidades[$i]['estado'] ?>
            </td>
        </tr>
    <?php } ?>
</tbody>
<div class="container">
    <a class="nav-btn" href="<?= ROOT ?>/novo">Cadastrar Cliente</a>
    <table>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th colspan="2"></th>
        </tr>

        <?php if(!empty($data)) { ?>
        <?php }else{ ?>
            <tr>
                <td colspan="6">Nenhum cliente cadastrado...</td>
            </tr>
        <?php } ?>

            <?php foreach($data as $cliente) { ?>
                <tr>
                    <td><?= $cliente->NOME; ?></td>
                    <td><?= $cliente->CPF ?></td>
                    <td><?= $cliente->EMAIL ?></td>
                    <td><?= $cliente->TELEFONE ?></td>
                    <td><a href="<?= ROOT ?>/edit?id=<?= $cliente->ID ?>" class="btn blue">Editar</a></td>
                    <td><a href="<?= ROOT ?>/excluir?id=<?= $cliente->ID ?>" class="btn red excluirBtn">Excluir</a></td>
                </tr>
            <?php } ?>

    </table>

</div>
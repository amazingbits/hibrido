<div class="container">
    <a class="nav-btn" href="<?= ROOT ?>" style="background: #e57373;">Voltar</a>
    <?php if(isset($data["retorno"])) { ?>
        <div class="message-box" style="background-color: <?= $data["color"] ?>">
            <p><?= $data["msg"] ?></p>
        </div>
    <?php } ?>
    <form action="<?= ROOT ?>/novo" method="post" id="formulario">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">
        <button type="submit" name="acao">Cadastrar</button>
    </form>
</div>
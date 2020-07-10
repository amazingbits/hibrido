<?php if(isset($data["retorno"])) { ?>
    <script>
        alert("<?= $data["msg"] ?>");
        window.location.href = "<?= ROOT ?>";
    </script>
<?php } ?>
<div class="container">
    <a class="nav-btn" href="<?= ROOT ?>" style="background: #e57373;">Voltar</a>
    <form action="<?= ROOT ?>/edit" method="post" id="formulario">
        <input type="hidden" name="id" id="id" value="<?= isset($data["user_id"]) ? $data["user_id"] : "" ?>">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?= isset($data["user_nome"]) ? $data["user_nome"] : "" ?>">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="<?= isset($data["user_cpf"]) ? $data["user_cpf"] : "" ?>">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="<?= isset($data["user_email"]) ? $data["user_email"] : "" ?>">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="<?= isset($data["user_telefone"]) ? $data["user_telefone"] : "" ?>">
        <button type="submit" name="acao">Salvar</button>
    </form>
</div>

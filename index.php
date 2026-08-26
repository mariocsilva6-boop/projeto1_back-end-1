<?php
if (isset($_GET['msg'])) {
    $mensagem = htmlspecialchars($_GET['msg']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($mensagem)): ?>
        <p style="color: red;">
            <?= $mensagem ?>
        </p>
    <?php endif; ?>
    <form action="login.php" method="POST">

        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usuario" name="usuario" required>
        <br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required>
        <br><br>

        <button type="submit">Entrar</button>

    </form>

</body>
</html>
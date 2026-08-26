<?php

function conectar($usuario, $senha)
{
    $usuarioCorreto = "admin";
    $senhaCorreta = "1234";

    if ($usuario == $usuarioCorreto && $senha == $senhaCorreta) {
        echo "Login realizado com sucesso!";
    } else {
        header("Location: index.php?msg=Usuário ou senha incorretos");
        exit;
    }
}
?>
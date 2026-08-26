<?php
require_once "funcoes.php";
$usuario = $_POST["usuario"] ?? "";
$senha = $_POST["senha"] ?? "";
if ($usuario == "" || $senha == "") {
    header("Location: index.php?msg=Preencha todos os campos");
    exit;
}
conectar($usuario, $senha);

?>
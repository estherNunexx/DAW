<?php

$matricula = trim($_POST["matricula"]);
$nome = trim($_POST["nome"]);
$email = trim($_POST["email"]);

$arquivo = __DIR__ . "/alunos.txt";

$linha = $matricula . ";" . $nome . ";" . $email . "\n";

file_put_contents($arquivo, $linha, FILE_APPEND);

header("Location: sucesso.php");

?>
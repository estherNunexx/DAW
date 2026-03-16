<?php

$matricula = $_POST["matricula"];
$nome = $_POST["nome"];
$email = $_POST["email"];

$linha = $matricula.";".$nome.";".$email."\n";

file_put_contents("alunos.txt", $linha, FILE_APPEND);

header("Location: sucesso.php");

?>
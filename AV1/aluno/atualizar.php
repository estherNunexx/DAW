<?php

$matricula = $_POST["matricula"];
$nome = $_POST["nome"];
$email = $_POST["email"];

$linhas = file("alunos.txt");

$novoArquivo = "";

foreach($linhas as $linha){

    $dados = explode(";", trim($linha));

    if($dados[0] == $matricula){
        $novoArquivo .= $matricula.";".$nome.";".$email."\n";
    } else{
        $novoArquivo .= $linha;
    }
}

file_put_contents("alunos.txt", $novoArquivo);

header("Location: index.php");

?>
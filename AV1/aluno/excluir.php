<?php

$matricula = $_GET["matricula"];

$linhas = file("alunos.txt");

$novoArquivo = "";

foreach($linhas as $linha){

    $dados = explode(";", trim($linha));

    if($dados[0] != $matricula){
        $novoArquivo .= $linha;
    }
}

file_put_contents("alunos.txt", $novoArquivo);

header("Location: index.php?msg=excluido");

?>

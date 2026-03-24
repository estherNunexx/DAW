<?php

$matricula = trim($_GET["matricula"]);
$arquivo = __DIR__ . "/alunos.txt";

$linhas = file($arquivo);

$novoArquivo = "";

foreach($linhas as $linha){

    $dados = explode(";", trim($linha));

    if($dados[0] != $matricula){
        $novoArquivo .= $linha;
    }
}

file_put_contents($arquivo, $novoArquivo);

header("Location: index.php?msg=excluido");

?>
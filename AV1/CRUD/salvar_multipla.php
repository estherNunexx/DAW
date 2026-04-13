<?php

$pergunta = $_POST['pergunta'];
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$correta = $_POST['correta'];

$id = time();

$arquivo = fopen("dados.txt", "a");

fwrite($arquivo, $id . ";M;" . $pergunta . ";" . $a . ";" . $b . ";" . $c . ";" . $d . ";" . $correta . "\n");

fclose($arquivo);

echo "Sua pergunta foi salva!<br>";
echo "<a href='index.php'>Voltar</a>";

?>

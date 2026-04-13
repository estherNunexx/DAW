<?php

$pergunta = $_POST['pergunta'];
$resposta = $_POST['resposta'];

$id = time();

$arquivo = fopen("dados.txt", "a");

fwrite($arquivo, $id . ";D;" . $pergunta . ";" . $resposta . "\n");

fclose($arquivo);

echo "Sua pergunta discursiva foi salva!<br>";
echo "<a href='index.php'>Voltar</a>";

?>

<?php

$pergunta = $_POST['pergunta'];
$resposta = $_POST['resposta'];

$id = time();

$nova_pergunta = [
    "id" => $id,
    "tipo" => "D",
    "pergunta" => $pergunta,
    "resposta" => $resposta
];

$conteudo = file_get_contents("dados.json");
$dados_array = json_decode($conteudo, true);

$dados_array[] = $nova_pergunta;

file_put_contents("dados.json", json_encode($dados_array, JSON_PRETTY_PRINT));

echo "Sua pergunta discursiva foi salva!<br>";
echo "<a href='index.php'>Voltar</a>";

?>

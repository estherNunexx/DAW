<?php

$pergunta = $_POST['pergunta'];
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$correta = $_POST['correta'];

$id = time();

$nova_pergunta = [
    "id" => $id,
    "tipo" => "M",
    "pergunta" => $pergunta,
    "a" => $a,
    "b" => $b,
    "c" => $c,
    "d" => $d,
    "correta" => $correta
];

$conteudo = file_get_contents("dados.json");
$dados_array = json_decode($conteudo, true);

$dados_array[] = $nova_pergunta;

file_put_contents("dados.json", json_encode($dados_array, JSON_PRETTY_PRINT));

echo "Sua pergunta foi salva!<br>";
echo "<a href='index.php'>Voltar</a>";

?>

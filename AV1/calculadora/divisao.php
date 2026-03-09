<?php

$a = $_POST["a"];
$b = $_POST["b"];

if ($b == 0) {
    echo "<h1>Erro: divisão por zero!</h1>";
} else {
    $resultado = $a / $b;
    echo "<h1>Resultado da divisão: $resultado</h1>";
}

echo "<br><a href='index.php'>Voltar</a>";

?>
<?php

$a = $_POST["a"]; 
$b = $_POST["b"]; 

if ($a == 0) {

    echo "<h1>Erro: o índice da raiz não pode ser zero.</h1>";

} elseif ($b < 0 && $a % 2 == 0) {

    echo "<h1>Não é possível calcular raiz de número negativo com índice par.</h1>";

} else {

    $resultado = pow($b, 1/$a);

    echo "<h1>Resultado da raiz: $resultado</h1>";
}

echo "<br><a href='index.php'>Voltar</a>";

?>
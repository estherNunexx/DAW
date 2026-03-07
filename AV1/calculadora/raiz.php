<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST["a"];

    if ($a < 0) {
        echo "<h1>Não é possível calcular raiz de número negativo.</h1>";
    } else {
        $resultado = sqrt($a);
        echo "<h1>Resultado da raiz quadrada: $resultado</h1>";
    }

    echo "<br><a href='index.php'>Voltar</a>";
}

?>
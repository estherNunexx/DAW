<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST["a"];
    $b = $_POST["b"];

    $resultado = pow($a, $b);

    echo "<h1>Resultado da potência: $resultado</h1>";
    echo "<br><a href='index.php'>Voltar</a>";
}

?>
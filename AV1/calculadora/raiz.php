<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST["a"];

    $resultado = sqrt($a);

    echo "<h1>Resultado da raiz quadrada: $resultado</h1>";
    echo "<br><a href='index.php'>Voltar</a>";
}

?>
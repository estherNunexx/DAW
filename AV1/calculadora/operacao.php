<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $operacao = $_POST["operacao"];

    if ($operacao == "soma") {
        include "soma.php";
    }

    elseif ($operacao == "subtracao") {
        include "subtracao.php";
    }

    elseif ($operacao == "multiplicacao") {
        include "multiplicacao.php";
    }

    elseif ($operacao == "divisao") {
        include "divisao.php";
    }

    elseif ($operacao == "potencia") {
        include "potencia.php";
    }

    elseif ($operacao == "raiz") {
        include "raiz.php";
    }

}

?>
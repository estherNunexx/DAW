<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $a = $_POST["a"];
    $b = $_POST["b"];
    $operacao = $_POST["operacao"];


    if ($operacao == "soma") {
        $resultado = $a + $b;
    } elseif ($operacao == "subtracao") {
        $resultado = $a - $b;
    } elseif ($operacao == "multiplicacao") {
        $resultado = $a * $b;
    } elseif ($operacao == "divisao") {
        if ($b != 0) {
            $resultado = $a / $b;
        } else {
            $resultado = "Erro: divisão por zero!";
         }

} elseif ($operacao == "potencia") {
    $resultado = pow($a, $b);


    echo "<h1>Resultado: $resultado</h1>";
    echo "<br><a href='index.php'>Voltar</a>";
}
}

?>

<?php

$arquivo = fopen("dados.txt", "r");

echo "<h2>Lista de Perguntas</h2>";

while(!feof($arquivo)) {

    $linha = fgets($arquivo);

    if($linha != "") {

        $dados = explode(";", $linha);

        if(count($dados) >= 3) {

            echo "<b>ID:</b> " . $dados[0] . "<br>";
            echo "<b>Pergunta:</b> " . $dados[2] . "<br>";

            if($dados[1] == "M") {

                echo "A) " . $dados[3] . "<br>";
                echo "B) " . $dados[4] . "<br>";
                echo "C) " . $dados[5] . "<br>";
                echo "D) " . $dados[6] . "<br>";

                echo "<b>Correta:</b> " . $dados[7] . "<br>";
            }

            if($dados[1] == "D") {

                echo "<b>Resposta:</b> " . $dados[3] . "<br>";
            }

            echo "<a href='editar.php?id=".$dados[0]."'>Editar</a> ";
            echo "<a href='excluir.php?id=".$dados[0]."'>Excluir</a>";

            echo "<hr>";
        }
    }
}

fclose($arquivo);

echo "<a href='index.php'>Voltar</a>";

?>

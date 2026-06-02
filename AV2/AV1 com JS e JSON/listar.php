<?php
$conteudo = file_get_contents("dados.json");
$perguntas = json_decode($conteudo, true);

echo "<h2>Lista de Perguntas</h2>";

if ($perguntas) {
    foreach ($perguntas as $dados) {
        
        echo "<b>ID:</b> " . $dados['id'] . "<br>";
        echo "<b>Pergunta:</b> " . $dados['pergunta'] . "<br>";

        if($dados['tipo'] == "M") {
            echo "A) " . $dados['a'] . "<br>";
            echo "B) " . $dados['b'] . "<br>";
            echo "C) " . $dados['c'] . "<br>";
            echo "D) " . $dados['d'] . "<br>";

            echo "<b>Correta:</b> " . $dados['correta'] . "<br>";
        }

        if($dados['tipo'] == "D") {
        echo "<b>Resposta:</b> " . $dados['resposta'] . "<br>";
        }


    echo "<a href='editar.php?id=".$dados['id']."'>Editar</a> ";
    echo "<a href='excluir.php?id=".$dados['id']."'>Excluir</a>";

    echo "<hr>";
    }
}

echo "<a href='index.php'>Voltar</a>";

?>

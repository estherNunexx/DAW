<?php

if ($_POST) {

    $id_busca = $_POST['id'];

    $arquivo = fopen("dados.txt", "r");

    $achou = false;

    while(!feof($arquivo)) {

        $linha = fgets($arquivo);

        if($linha != "") {

            $dados = explode(";", $linha);

            if($dados[0] == $id_busca) {

                echo "<h2>Pergunta encontrada</h2>";

                echo "<b>ID:</b> " . $dados[0] . "<br>";
                echo "<b>Pergunta:</b> " . $dados[2] . "<br>";

                if($dados[1] == "M") {

                    echo "A) " . $dados[3] . "<br>";
                    echo "B) " . $dados[4] . "<br>";
                    echo "C) " . $dados[5] . "<br>";
                    echo "D) " . $dados[6] . "<br>";

                    echo "<b>Correta:</b> " . $dados[7] . "<br>";

                } else {

                    echo "<b>Resposta:</b> " . $dados[3] . "<br>";
                }

                $achou = true;
            }
        }
    }

    fclose($arquivo);

    if(!$achou) {
        echo "Pergunta não encontrada!";
    }

    echo "<br><a href='index.php'>Voltar</a>";

} else {
?>

<h2>Buscar Pergunta por ID</h2>

<form method="POST">

Digite o ID:
<input type="text" name="id"><br><br>

<input type="submit" value="Buscar">

</form>

<a href="index.php">Voltar</a>

<?php
}
?>

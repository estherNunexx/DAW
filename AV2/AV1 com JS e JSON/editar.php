<?php

$id = $_GET['id'];

$arquivo = fopen("dados.txt", "r");

$dados_editar = [];

while(!feof($arquivo)) {

    $linha = fgets($arquivo);

    if($linha != "") {

        $dados = explode(";", $linha);

        if($dados[0] == $id) {
            $dados_editar = $dados;
        }
    }
}

fclose($arquivo);

// SE ENVIOU FORM
if($_POST) {

    $arquivo = fopen("dados.txt", "r");
    $temp = fopen("temp.txt", "w");

    while(!feof($arquivo)) {

        $linha = fgets($arquivo);

        if($linha != "") {

            $dados = explode(";", $linha);

            if($dados[0] == $id) {

                if($dados[1] == "M") {

                    fwrite($temp, "$id;M;".$_POST['pergunta'].";".$_POST['a'].";".$_POST['b'].";".$_POST['c'].";".$_POST['d'].";".$_POST['correta']."\n");

                } else {

                    fwrite($temp, "$id;D;".$_POST['pergunta'].";".$_POST['resposta']."\n");
                }

            } else {
                fwrite($temp, $linha);
            }
        }
    }

    fclose($arquivo);
    fclose($temp);

    unlink("dados.txt");
    rename("temp.txt", "dados.txt");

    echo "Atualizado!<br>";
    echo "<a href='listar.php'>Voltar</a>";

    return;
}

?>

<h2>Editar Pergunta</h2>

<form method="POST">

Pergunta: <input type="text" name="pergunta" value="<?php echo $dados_editar[2]; ?>"><br><br>

<?php if($dados_editar[1] == "M") { ?>

A: <input type="text" name="a" value="<?php echo $dados_editar[3]; ?>"><br>
B: <input type="text" name="b" value="<?php echo $dados_editar[4]; ?>"><br>
C: <input type="text" name="c" value="<?php echo $dados_editar[5]; ?>"><br>
D: <input type="text" name="d" value="<?php echo $dados_editar[6]; ?>"><br>
Correta: <input type="text" name="correta" value="<?php echo $dados_editar[7]; ?>"><br>

<?php } else { ?>

Resposta: <input type="text" name="resposta" value="<?php echo $dados_editar[3]; ?>"><br>

<?php } ?>

<br><input type="submit" value="Atualizar">

</form>

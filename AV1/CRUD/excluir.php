<?php

$id = $_GET['id'];

$arquivo = fopen("dados.txt", "r");
$temp = fopen("temp.txt", "w");

while(!feof($arquivo)) {

    $linha = fgets($arquivo);

    if($linha != "") {

        $dados = explode(";", $linha);

        if($dados[0] != $id) {
            fwrite($temp, $linha);
        }
    }
}

fclose($arquivo);
fclose($temp);

unlink("dados.txt");
rename("temp.txt", "dados.txt");

echo "Excluído!<br>";
echo "<a href='listar.php'>Voltar</a>";

?>

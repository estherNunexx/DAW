<?php

$matricula = $_GET["matricula"];

$arquivo = file("alunos.txt");

$nome = "";
$email = "";

foreach($arquivo as $linha){

    $dados = explode(";", trim($linha));

    if($dados[0] == $matricula){
        $nome = $dados[1];
        $email = $dados[2];
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Editar Aluno</title>
</head>

<body>

<h1>Editar Aluno</h1>

<form action="atualizar.php" method="POST">

Matrícula:<br>
<input type="text" name="matricula" value="<?php echo $matricula ?>" readonly>

<br><br>

Nome:<br>
<input type="text" name="nome" value="<?php echo $nome ?>" required>

<br><br>

Email:<br>
<input type="email" name="email" value="<?php echo $email ?>" required>

<br><br>

<button type="submit">Atualizar</button>

</form>

</body>
</html>

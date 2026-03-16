<?php

$arquivo = "alunos.txt";
$alunos = [];

if(file_exists($arquivo)){
    $linhas = file($arquivo);

    foreach($linhas as $linha){
        $dados = explode(";", trim($linha));
        $alunos[] = $dados;
    }
}

$filtro = "";

if(isset($_GET["matricula"])){
    $filtro = $_GET["matricula"];
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Listar Alunos</title>
</head>

<body>

<h1>Listar Alunos</h1>

<a href="cadastrar.php">Cadastrar Aluno</a>

<br><br>

<form method="GET">

Filtrar por Matrícula:
<input type="text" name="matricula">

<button type="submit">Filtrar</button>

<a href="index.php">Limpar Filtro</a>

</form>

<br>

<table border="1" cellpadding="8">

<tr>
<th>Matrícula</th>
<th>Nome</th>
<th>Email</th>
<th>Ação</th>
</tr>

<?php

foreach($alunos as $aluno){

    if($filtro != "" && $aluno[0] != $filtro){
        continue;
    }

    echo "<tr>";
    echo "<td>".$aluno[0]."</td>";
    echo "<td>".$aluno[1]."</td>";
    echo "<td>".$aluno[2]."</td>";
    echo "<td><a href='editar.php?matricula=".$aluno[0]."'>Editar</a></td>";
    echo "</tr>";
}

?>

</table>

</body>
</html>
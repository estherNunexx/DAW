<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastrar Aluno</title>
</head>

<body>

<h1>Cadastrar Aluno</h1>

<form action="salvar.php" method="POST">

Matrícula:<br>
<input type="text" name="matricula" required>
<br><br>

Nome:<br>
<input type="text" name="nome" required>
<br><br>

Email:<br>
<input type="email" name="email" required>
<br><br>

<button type="submit">Salvar</button>

</form>

<br>

<a href="index.php">Voltar</a>

</body>
</html>
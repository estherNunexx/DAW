<!DOCTYPE html>
<html>
<body>

<h2>Criar Pergunta - Múltipla Escolha</h2>

<form action="salvar_multipla.php" method="POST">

Pergunta:<br>
<input type="text" name="pergunta" required><br><br>

Opção A: <input type="text" name="a"><br>
Opção B: <input type="text" name="b"><br>
Opção C: <input type="text" name="c"><br>
Opção D: <input type="text" name="d"><br><br>

Resposta correta (A/B/C/D):<br>
<input type="text" name="correta"><br><br>

<input type="submit" value="Salvar">

</form>

<br><a href="index.php">Voltar</a>

</body>
</html>

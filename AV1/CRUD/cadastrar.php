<?php

if ($_POST) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $id = time();

    $arquivo = fopen("usuario.txt", "a");

    fwrite($arquivo, $id . ";" . $email . ";" . $senha . "\n");
    fclose($arquivo);

    echo "<h3>Usuário cadastrado com sucesso!</h3>";
    echo "<a href='index.php'>Ir para o sistema</a>";

} else {
?>

<!DOCTYPE html>
<html>
<body>

<h2>Cadastrar Usuário</h2>

<form method="POST">
Email: <input type="text" name="email"><br><br>
Senha: <input type="password" name="senha"><br><br>
<input type="submit" value="Cadastrar">
</form>

</body>
</html>

<?php
}
?>

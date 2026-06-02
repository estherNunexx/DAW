<?php

if ($_POST) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $id = time();

    $novo_usuario = [
        "id" => $id,
        "email" => $email,
        "senha" => $senha
    ];
    $conteudo = file_get_contents("usuario.json");
    $usuarios_array = json_decode($conteudo, true);

    if (!$usuarios_array) {
        $usuarios_array = [];
    }
    $usuarios_array[] = $novo_usuario;

    file_put_contents("usuario.json", json_encode($usuarios_array, JSON_PRETTY_PRINT));

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

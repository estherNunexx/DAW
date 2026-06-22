<?php
include("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data = $_POST['data'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cliente
(nome, cpf, data_nascimento, email, senha)
VALUES
('$nome','$cpf','$data','$email','$senha')";

if($conn->query($sql)){

    echo json_encode([
    "status" => "ok"
    ]);

}else{

    echo json_encode([
    "status" => "erro"
    ]);
}
?>

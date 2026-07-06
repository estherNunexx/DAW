<?php

include("conexao.php");

$sql = "SELECT
agendamento.id,
servico.nome AS servico,
profissional.nome AS profissional,
agendamento.data,
agendamento.hora,
agendamento.status

FROM agendamento

INNER JOIN servico
ON agendamento.servico_id = servico.id

INNER JOIN profissional
ON agendamento.profissional_id = profissional.id

ORDER BY agendamento.data, agendamento.hora";

$result = $conn->query($sql);

$agendamentos = array();

while($linha = $result->fetch_assoc()){

    $agendamentos[] = $linha;

}

echo json_encode($agendamentos);

?>

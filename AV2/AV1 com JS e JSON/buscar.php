<h2>Buscar Pergunta por ID</h2>

<form id="formBuscar">
Digite o ID:
<input type="text" id="id_busca"><br><br>
<input type="submit" value="Buscar">
</form>

<div id="resultado_busca"></div>
<br><a href="index.php">Voltar</a>

<script>
document.getElementById('formBuscar').addEventListener('submit', function(event) {
    event.preventDefault();

    let idBusca = document.getElementById('id_busca').value;
    let divResultado = document.getElementById('resultado_busca');

    fetch('dados.json')
        .then(response => response.json())
        .then(perguntas => {
        
            let achou = perguntas.find(p => p.id == idBusca);

            if (achou) {
            
                let html = "<h2>Pergunta encontrada</h2>";
                html += "<b>ID:</b> " + achou.id + "<br>";
                html += "<b>Pergunta:</b> " + achou.pergunta + "<br>";

                if (achou.tipo == "M") {
                    html += "A) " + achou.a + "<br>";
                    html += "B) " + achou.b + "<br>";
                    html += "C) " + achou.c + "<br>";
                    html += "D) " + achou.d + "<br>";
                    html += "<b>Correta:</b> " + achou.correta + "<br>";
                } else {
                    html += "<b>Resposta:</b> " + achou.resposta + "<br>";
                }

                divResultado.innerHTML = html;
            } else {
                divResultado.innerHTML = "Pergunta não encontrada!";
            }
        })
        .catch(erro => {
            divResultado.innerHTML = "Erro ao ler o arquivo JSON.";
        });
});
</script>

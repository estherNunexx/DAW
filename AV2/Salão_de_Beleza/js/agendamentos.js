let xhr = new XMLHttpRequest();

xhr.open("GET","php/listar_agendamentos.php",true);

xhr.onreadystatechange = function(){

if(xhr.readyState == 4 && xhr.status == 200){

let agendamentos = JSON.parse(xhr.responseText);

let lista = document.getElementById("listaAgendamentos");

let html = "";

for(let i=0;i<agendamentos.length;i++){

html +=

'<div class="card">'+

'<h3>'+agendamentos[i].servico+'</h3>'+

'<p><b>Profissional:</b> '+agendamentos[i].profissional+'</p>'+

'<p><b>Data:</b> '+agendamentos[i].data+'</p>'+

'<p><b>Hora:</b> '+agendamentos[i].hora+'</p>'+

'<p><b>Status:</b> '+agendamentos[i].status+'</p>'+

'</div>';

}

lista.innerHTML = html;

}

}

xhr.send();

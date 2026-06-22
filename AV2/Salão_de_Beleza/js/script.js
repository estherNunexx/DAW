function mostrarCadastro(){

document.getElementById("login").style.display = "none";
document.getElementById("cadastro").style.display = "block";

}

function mostrarLogin(){

document.getElementById("cadastro").style.display = "none";
document.getElementById("login").style.display = "block";

}

function cadastrar(){

let nome = document.getElementById("nome").value;
let cpf = document.getElementById("cpf").value;
let data = document.getElementById("data").value;
let email = document.getElementById("email").value;
let senha = document.getElementById("senha").value;
let senha2 = document.getElementById("senha2").value;

if(nome == ""){
  alert("Digite o seu nome");
    return;
    }

    if(senha != senha2){
        alert("As senhas precisam ser iguais!");
        return;
    }

    let xhr = new XMLHttpRequest();

    xhr.open("POST","php/cadastrar.php",true);

    xhr.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
    );

xhr.onreadystatechange = function(){

if(xhr.readyState == 4 && xhr.status == 200){
    let resposta = JSON.parse(xhr.responseText);

    if(resposta.status == "ok"){

    alert("Cadastro realizado com sucesso!");

mostrarLogin();

}else{

alert("Erro ao tentar se cadastrar");

        }
    }
}

xhr.send(
"nome="+nome+
"&cpf="+cpf+
"&data="+data+
"&email="+email+
"&senha="+senha
);

}


function entrar(){

let email = document.getElementById("emailLogin").value;
let senha = document.getElementById("senhaLogin").value;

let xhr = new XMLHttpRequest();

xhr.open("POST","php/login.php",true);

xhr.setRequestHeader(
"Content-Type",
"application/x-www-form-urlencoded"
);

xhr.onreadystatechange = function(){

if(xhr.readyState == 4 && xhr.status == 200){
let resposta = JSON.parse(xhr.responseText);

if(resposta.status == "ok"){

    alert("Login realizado com sucesso!");

}else{

alert("Email ou senha inválidos!");

        }
    }
}

xhr.send(
"email="+email+
"&senha="+senha
);

}

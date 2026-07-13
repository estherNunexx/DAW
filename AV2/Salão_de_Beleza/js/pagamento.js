function mostrarPagamento(){

    let forma = document.getElementById("formaPagamento").value;

    document.getElementById("pix").style.display = "none";
    document.getElementById("cartao").style.display = "none";
    document.getElementById("dinheiro").style.display = "none";

    if(forma == "pix"){
        document.getElementById("pix").style.display = "block";
    }

    if(forma == "cartao"){
        document.getElementById("cartao").style.display = "block";
    }

    if(forma == "dinheiro"){
        document.getElementById("dinheiro").style.display = "block";
    }

}

function pagarCartao(){

    let numero = document.getElementById("numeroCartao").value;
    let titular = document.getElementById("titular").value;
    let validade = document.getElementById("validade").value;
    let cvv = document.getElementById("cvv").value;

    if(numero == "" || titular == "" || validade == "" || cvv == ""){

        alert("Preencha todos os dados do cartão.");
        return;

    }

    alert("Processando pagamento...");

    setTimeout(function(){

        alert("Pagamento realizado com sucesso!");

        window.location.href = "home.html";

    },2000);

}

function confirmarPagamento(){

    alert("Pagamento realizado com sucesso!");

    window.location.href = "home.html";

}

let numeroAtual = '0';
let numeroSalvo = '';
let operacao = null;
let limparTela = false;

function mostrarNoVisor() {
    document.getElementById('visor').value = numeroAtual;
    }

    function digitar(valor) {
        if (limparTela == true) {
                numeroAtual = valor;
                        limparTela = false;
                            } else {
                                    if (numeroAtual === '0') {
                                                numeroAtual = valor;
                                                        } else {
                                                                    numeroAtual = numeroAtual + valor;
                                                                            }
                                                                                }
                                                                                    mostrarNoVisor();
                                                                                    }

                                                                                    function pegarOperador(op) {
                                                                                        operacao = op;
                                                                                            numeroSalvo = numeroAtual;
                                                                                                limparTela = true;
                                                                                                }

                                                                                                function resultadoFinal() {
                                                                                                    let resultado = 0;
                                                                                                        let n1 = parseFloat(numeroSalvo);
                                                                                                            let n2 = parseFloat(numeroAtual);

                                                                                                                if (operacao == '+') {
                                                                                                                        resultado = n1 + n2;
                                                                                                                            } else if (operacao == '-') {
                                                                                                                                    resultado = n1 - n2;
                                                                                                                                        } else if (operacao == '*') {
                                                                                                                                                resultado = n1 * n2;
                                                                                                                                                    } else if (operacao == '/') {
                                                                                                                                                            resultado = n1 / n2;
                                                                                                                                                                }

                                                                                                                                                                    numeroAtual = resultado.toString();
                                                                                                                                                                        operacao = null;
                                                                                                                                                                            limparTela = true;
                                                                                                                                                                                mostrarNoVisor();
                                                                                                                                                                                }

                                                                                                                                                                                function limparTudo() {
                                                                                                                                                                                    numeroAtual = '0';
                                                                                                                                                                                        numeroSalvo = '';
                                                                                                                                                                                            operacao = null;
                                                                                                                                                                                                limparTela = false;
                                                                                                                                                                                                    mostrarNoVisor();
                                                                                                                                                                                                    }
                                                                                                                                                                                                    
const express = require('express');
const cors = require('cors');
const app = express();

app.use(express.json());
app.use(cors());

app.post('/validar', (req, res) => {
    const nome = req.body.nome;
    const matricula = req.body.matricula;
    const email = req.body.email;

    //matricula
    if (isNaN(matricula) || matricula === "") {
        return res.json({ texto: "A matrícula deve conter apenas números." });
    }

    //email
    const temArroba = email.includes("@");
    const temPontoCom = email.endsWith(".com");
    const ehMinusculo = (email === email.toLowerCase());

    if (!temArroba || !temPontoCom) {
        return res.json({ texto: "O Email deve conter @ e terminar em .com" });
    }

    if (!ehMinusculo) {
        return res.json({ texto: "O email deve conter apenas letras minúsculas" });
    }

    res.json({ texto: "Aluno cadastrado com sucesso!"});
});

app.listen(3000, () => {
});

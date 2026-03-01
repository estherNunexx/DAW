<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Minha Calculadora</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>


<h1>Minha Calculadora</h1>


<form method="POST" action="calculo.php">


1º Número: <input type="number" name="a" required><br><br>
2º Número: <input type="number" name="b" required><br><br>


    <select name="operacao">
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
    </select>


    <br><br>


    <input type="submit" value="Calcular">


</form>


</body>
</html>

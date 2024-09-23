<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora básica</title>
</head>
<body>
    <h1>Calculadora Básica</h1>
    <form action="resultado.php" method="post">
        <label for="num1">Primeiro Número: </label>
        <input type="number" name="num1" id="num1">
        <br>
        <label for="num2">Segundo Número: </label>
        <input type="number" name="num2" id="num2">
        <br>
        <select name="operador" id="operado">
            <option value="1">Soma</option>
            <option value="2">Subtração</option>
            <option value="3">Multiplicação</option>
            <option value="4">Divisão</option>
        </select>
        <input type="submit" name="calcular" value="Calcular">
    </form>
</body>
</html>
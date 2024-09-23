<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da nossa conta</title>
</head>
<body>
    <h1>Resultado da nossa conta</h1>

    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operador = $_POST['operador'];

        if($operador == 1){
            $soma = $num1 + $num2;
            echo "$num1 + $num2 = $soma";
        }
        if($operador == 2){
            $subtracao = $num1 - $num2;
            echo "$num1 - $num2 = $subtracao";
        }
        if($operador == 3){
            $multiplicacao = $num1 * $num2;
            echo "$num1 x $num2 = $multiplicacao";
        }
        if($operador == 4){
            $divisao = $num1 / $num2;
            echo "$num1 / $num2 = $divisao";
        }

     
    ?>

    <br>
    <a href="calc.php">Voltar</a>    
</body>
</html>
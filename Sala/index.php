<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro código PHP</title>
</head>
<body>
    <h1>Este é meu primeiro código php</h1>
    <?php 
        $num1 = 10;
        $num2 = 15;

        echo $num1 + $num2;
        echo "<br>";
        $soma = $num1 + $num2; 
        print("$num1 + $num2 = $soma");       
        
        //printf("%d + %d = %d" &num1, &num2, &soma);
    ?>
    
</body>
</html>
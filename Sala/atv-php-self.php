<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Auto carregável</title>
</head>
<body>
    <?php
    $nome  = $_POST["nome"] ?? "";
    $email  = $_POST["email"] ?? "";
    $idade  = $_POST["idade"] ?? 0;

    ?>
    
    <main>
        <fieldset>
            <legend>Formulário</legend>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>">
                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email" value="<?php echo $email; ?>">
                <label for="idade">Idade: </label>
                <input type="number" name="idade" id="idade" value="<?php echo $idade; ?>">
                <input type="submit" value="Enviar">
            </form>            
        </fieldset>
    </main>


    <section>
        <fieldset>
            <legend>Resultado</legend>
            <?php 
                echo "<p> Olá <strong>$nome</strong>, muito obrigado por forneceser seu e-mail: <strong>$email</strong> e sua idade: <strong>$idade</strong></p>";
            ?>
        </fieldset>
    </section>


</body>
</html>
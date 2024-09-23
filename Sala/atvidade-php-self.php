<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <?php
        $n = $_POST["nome"] ?? "";
        $e = $_POST["email"] ?? "";
        $i = $_POST["idade"] ?? 0;
    ?>
    <main>
        <fieldset>
            <legend>Formulário</legend>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $n; ?>">
                    <br><br>
                    <label for="email">E-mail:</label>
                    <input type="mail" name="email" id="email" value="<?php echo $e; ?>">
                    <br><br>
                    <label for="idade">Idade:</label>
                    <input type="number" name="idade" id="idade" value="<?php echo $i; ?>">
                    <br><br>
                    <input type="submit" value="Enviar">
                </form>
        </fieldset>
    </main>

    <?php
        if($n != "" && $e != ""){
    ?>
    <section>
        <fieldset>
            <legend>Resultado</legend>
            <?php
                echo "Olá <strong>$n</strong>, muito obrigado por compartilhar seu e-mail: <strong>$e</strong> e sua idade: <strong>$i</strong>.";
            ?>
        </fieldset>
    </section>
    <?php
        }
    ?>

</body>
</html>
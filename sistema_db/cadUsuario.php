        <?php
        /*Captura dos dados do formulário, se este existir*/
        $nome = $_POST["nome"] ?? "";
        $email = $_POST["email"] ?? "";
        $idade = $_POST["idade"] ?? 0;
        $fone = $_POST["fone"] ?? "";
        $cpf = $_POST["cpf"] ?? "";
        $rg = $_POST["rg"] ?? "";
        $login = $_POST["login"] ?? "";
        $msg = "";
        include_once('conexao.php');

        if (isset($_POST["salvar"])) {
            $sqlVerifica = "SELECT * FROM usuario WHERE login='$login' AND senha='$senha'";
            $resultadoVerificacao = mysqli_query($conn, $sqlVerifica);
            $numLinhas = mysqli_num_rows($resultadoVerificacao);

            if ($numLinhas == 0) {
                $sql = "INSERT INTO usuario (nome, email, idade, fone, cpf, rg, login, senha) VALUES ('$nome', '$email', '$idade','$fone','$cpf','$rg','$login','$senha')";

                if (mysqli_query($conn, $sql)) {
                    $msg = "sucesso";
                } else {
                    $msg = "falha";
                }
            } else {
                $msg = "duplicado";
            }
        }

        include_once('header.php');
        include_once('menu.php');
        include_once('sessao.php');
        ?>

        <main class="content">
            <h1>Cadastro de Usuários</h1>
            <div class="campo">
                <?php

                if($msg == "sucesso"){
                    echo "<div class='msg-verde'>Usuário cadastrado com sucesso!</div>";
                }elseif($msg == "falha"){
                    echo "<div class='msg-vermelho'>Erro ao cadastrar o usuário!</div>";
                }elseif($msg == "duplicado"){
                    echo "<div class='msg-vermelho'>Já existe um usuário com o mesmo login e senha cadastrado no sistema.</div>";
                }
                ?>
            </div>
            <form action="#" method="post">
                <div class="campos">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" required>
                </div>
                <div class="campos">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="campos">
                    <label for="idade">Idade:</label>
                    <input type="number" name="idade" id="idade" value="<?php echo $idade; ?>" required>
                </div>
                <div class="campos">
                    <label for="fone">Telefone:</label>
                    <input type="tel" name="fone" id="fone" value="<?php echo $fone; ?>" required>
                </div>
                <div class="campos">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" value="<?php echo $cpf; ?>" required>
                </div>
                <div class="campos">
                    <label for="rg">RG:</label>
                    <input type="text" name="rg" id="rg" value="<?php echo $rg; ?>" required>
                </div>
                <div class="campos">
                    <label for="login">Login:</label>
                    <input type="text" name="login" id="login" value="<?php echo $login; ?>" required>
                </div>
                <div class="campos">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" value="<?php echo $senha; ?>" required>
                </div>
                <div class="campos">
                    <input type="submit" name="salvar" value="Salvar">
                </div>
            </form>
        </main>
        </div>
        <?php
        include_once('footer.php');
        ?>
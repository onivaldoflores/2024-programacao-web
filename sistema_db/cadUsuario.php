        <?php
            include_once('header.php');
            include_once('menu.php');
        ?>

        <main class="content">
            <h1>Cadastro de Usuários</h1>
            <div class="campo">
                <?php
                    if(isset($_GET["msg"])){
                        $msg = $_GET["msg"];
                        if($msg == "sucesso"){
                            echo "<div class='msg-verde'>Usuário cadastrado com sucesso!</div>";
                        }else{
                            echo "<div class='msg-vermelho'>Erro ao cadastrar o usuário!</div>";
                        }
                    }
                    if(isset($_GET["usuarioErro"])){
                        $usuarioErro = $_GET["usuarioErro"];
                        if($usuarioErro == "duplicado"){
                            echo "<div class='msg-vermelho'>Já existe um usuário com o mesmo login e senha cadastrado no sistema.</div>";
                        }
                    }
                ?>
            </div>
            <form action="inserirUsuario.php" method="post">
                <div class="campos">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div class="campos">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="campos">
                    <label for="idade">Idade:</label>
                    <input type="number" name="idade" id="idade" required>
                </div>
                <div class="campos">
                    <label for="fone">Telefone:</label>
                    <input type="tel" name="fone" id="fone" required>
                </div>
                <div class="campos">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" required>
                </div>
                <div class="campos">
                    <label for="rg">RG:</label>
                    <input type="text" name="rg" id="rg" required>
                </div>
                <div class="campos">
                    <label for="login">Login:</label>
                    <input type="text" name="login" id="login" required>
                </div>
                <div class="campos">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required>
                </div>
                <div class="campos">
                    <input type="submit" value="Salvar">
                </div>
            </form>
        </main>
    </div>
<?php
    include_once('footer.php');
?>

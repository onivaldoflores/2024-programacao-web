<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="estilo/estilo.css">
    
</head>
<body>

<?php
    include_once('conexao.php');

    if(isset($_POST["login"])){
        $msg = "";
        $login = $_POST["username"];
        $senha = $_POST["password"];

        $sql = "SELECT * FROM usuario WHERE login='$login' AND senha='$senha'";
        $resultado = mysqli_query($conn, $sql);
        $linha = mysqli_num_rows($resultado);
        if($linha == 0){
            echo "<div class='msg-vermelho'>Usuário ou senha incorretos</div>";            
        }else{
            while($x = mysqli_fetch_assoc($resultado)){
                $_SESSION["usuario"] = $x["nome"];
            }
            header("Location: pagInicial.php");
        }
    }
?>
        <main class="content">
            <h1>Login</h1>
            <form action="" method="POST">
                <div class="campos">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="campos">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <input type="submit" name="login" value="Login">
            </form>
        </main>

</body>
</html>

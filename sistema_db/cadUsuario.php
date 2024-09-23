<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
</head>
<body>
    <main>
        <h1>CADASTRO DE USUÁRIOS</h1>
        <form action="inserirUsuario.php" method="post">
            <div class="campos">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="campos">
                <label for="email">E-mail: </label>
                <input type="mail" name="email" id="email">
            </div>
            <div class="campos">
                <label for="idade">Idade: </label>
                <input type="number" name="idade" id="idade">
            </div>
            <div class="campos">
                <label for="fone">Telefone: </label>
                <input type="tel" name="fone" id="fone">
            </div>
            <div class="campos">
                <label for="cpf">CPF: </label>
                <input type="text" name="cpf" id="cpf">
            </div>
            <div class="campos">
                <label for="rg">RG: </label>
                <input type="text" name="rg" id="rg">
            </div>
            <div class="campos">
                <label for="login">Login: </label>
                <input type="text" name="login" id="login">
            </div>
            <div class="campos">
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha">
            </div>
            <div class="campos">
                <input type="submit" value="Salvar">
            </div>
        </form>

    </main>
    
</body>
</html>
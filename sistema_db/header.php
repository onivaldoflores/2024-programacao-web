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
    <header>
        <div class="session-info">
            <span>Usuário logado: <?php echo $_SESSION["usuario"]; ?></span>
            <a href="logout.php">Logout</a>
        </div>
    </header>
    <div class="container">
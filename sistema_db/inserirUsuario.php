<?php
    include_once('conexao.php');

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $fone = $_POST["fone"];
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO usuario (nome, email, idade, fone, cpf, rg, login, senha) VALUES ('$nome', '$email', '$idade','$fone','$cpf','$rg','$login','$senha')";

    if(mysqli_query($conn, $sql)){
        header("Location: cadUsuario.php?msg=sucesso");
    }else{
        header("Location: cadUsuario.php?msg=falha");
    }

    
?>
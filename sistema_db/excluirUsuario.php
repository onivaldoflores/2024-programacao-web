<?php
    include_once('header.php');
    include_once('conexao.php');

    $id = $_GET["id"];

    $sql = "DELETE FROM usuario WHERE id = $id";

    if(mysqli_query($conn, $sql)){
        header("Location: buscaUsuario.php?msg=true");
    }else{
        header("Location: buscaUsuario.php?msg=false");
    }

    include_once('footer.php');
?>
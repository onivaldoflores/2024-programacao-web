<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "aula_php";

    $conn = mysqli_connect($servidor, $usuario, $senha, $bd);

/*
    if(!$conn){
        die("Falha na Conexão: " . mysqli_connect_error());
    }else{
        echo "Conexão foi um sucesso! ";
    }
*/
?>

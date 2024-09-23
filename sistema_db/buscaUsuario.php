<?php
    include_once('header.php');
    include_once('conexao.php');

    $sql = "SELECT * FROM usuario";

    $resultado = mysqli_query($conn, $sql);

    while($x = mysqli_fetch_assoc($resultado)){
        echo $x["nome"]; 
        echo "<br>";
    }
?>



<?php
    include_once('footer.php')
?>
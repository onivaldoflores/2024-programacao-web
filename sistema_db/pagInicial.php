<?php
/*Captura dos dados do formulário, se este existir*/
include_once('conexao.php');
include_once('header.php');
include_once('menu.php');
include_once('sessao.php');
?>

<main class="content">
    <h1>Página inicial do sistema</h1>

    <?php
        $sql = "select * from usuario";
        $resultado = mysqli_query($conn, $sql);
        $usuarios = mysqli_num_rows($resultado);

    ?>


    <div class="status_pagInicial">
        <p>Quantidade de usuários cadastrados: <strong><?php echo $usuarios; ?></strong></p>
    </div>


</main>

<?php
include_once('footer.php');
?>
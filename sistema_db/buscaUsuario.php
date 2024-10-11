<?php
include_once('header.php');
include_once('menu.php');
include_once('conexao.php');
?>

<main class="content">
    <h1>Lista de Usuários</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM usuario";
            $resultado = mysqli_query($conn, $sql);

            while ($x = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $x["id"] . "</td>";
                echo "<td>" . $x["nome"] . "</td>";
                echo "<td>
                                <a href='editarUsuario.php?id=" . $x['id'] . "' class='edit-btn'>Editar</a>
                                <a href='excluirUsuario.php?id=" . $x['id'] . "' class='delete-btn'>Excluir</a>
                              </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</main>
</div>



<?php
include_once('footer.php')
?>
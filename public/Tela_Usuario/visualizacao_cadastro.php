<?php 

function mostrar_usuarios($resultado) {

?>

<table class="tabela-usuarios">

<thead>
        <tr>
            <th>Usuário</th>
            <th>Email</th>
            <th>Tipo usuário</th>
            <th>Ação</th>
        </tr>
    </thead>

    <tbody>

<?php while ($usuario = $resultado->fetch_assoc()) { ?>

            <tr>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['email'] ?></td>

                 <td>
                    <?php
                    if ($usuario['tipo'] === 'admin') {
                        echo 'Administrador';
                    } else {
                        echo 'Funcionário';
                    }
                    ?>
                </td>

                <td>
                    <a href="excluir_u.php?id=<?= $usuario['id_usuario'] ?>"
                       class="btn-excluir">
                        <img src="https://img.icons8.com/ios-filled/20/000000/trash.png"
                       alt="Excluir">
                    </a>
                </td>
            </tr>

            <?php } ?>

             </tbody>

</table>

 <?php } ?>
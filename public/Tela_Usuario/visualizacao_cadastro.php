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

<?php while ($usuario = $resultado->fetch_assoc()): ?>

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
                    <a href="excluir_usuario.php?id=<?= $usuario['id_usuario'] ?>"
                       class="btn-excluir">
                        🗑
                    </a>
                </td>
            </tr>

            <?php } ?>
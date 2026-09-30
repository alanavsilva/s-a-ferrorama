<?php 

function mostrar_usuarios($resultado) : void
{
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
            <td><?= escapar($usuario['nome']) ?></td>
            <td><?= escapar($usuario['email']) ?></td>
            <td>
                <?= $usuario['tipo'] === 'administrador' ? 'Administrador' : 'Funcionário' ?>
            </td>
            <td class="acao_user">
                <a href="editar_u.php?id=<?= (int)$usuario['id_usuario'] ?>" class="icon_editar">
                    <img src="https://img.icons8.com/ios-filled/18/ffffff/edit.png" alt="Editar">
                </a>

                <form method="POST" action="excluir_u.php" style="display:inline;"
                      onsubmit="return confirm('Deseja realmente excluir este usuário?');">
                    <input type="hidden" name="csrf_token" value="<?= escapar(token_csrf()) ?>">
                    <input type="hidden" name="id" value="<?= (int)$usuario['id_usuario'] ?>">
                    <button type="submit" class="icon_excluir" aria-label="Excluir">
                        <img src="https://img.icons8.com/ios-filled/18/ffffff/trash.png" alt="Excluir">
                    </button>
                </form>
            </td>
        </tr>
<?php endwhile; ?>
    </tbody>
</table>
<?php
}
}
<?php include 'db.php'; ?>

<h2>Catálogo de Produtos</h2>
<a href="create.php">Cadastrar Novo Produto</a>

<form method="GET" style="margin-top: 10px;">
    <input type="text" name="busca" placeholder="Buscar por nome" value="<?= $_GET['busca'] ?? '' ?>">
    <select name="ordenar">
        <option value="">Ordenar por...</option>
        <option value="preco" <?= ($_GET['ordenar'] ?? '') == 'preco' ? 'selected' : '' ?>>Preço</option>
        <option value="estoque" <?= ($_GET['ordenar'] ?? '') == 'estoque' ? 'selected' : '' ?>>Estoque</option>
    </select>
    <button type="submit">Filtrar</button>
</form>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Ações</th>
    </tr>
    <?php
    $busca = $conn->real_escape_string($_GET['busca'] ?? '');
    $ordenar = in_array($_GET['ordenar'] ?? '', ['preco', 'estoque']) ? $_GET['ordenar'] : 'id';

    $sql = "SELECT * FROM produtos WHERE nome LIKE '%$busca%' ORDER BY $ordenar ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0):
        while ($row = $result->fetch_assoc()):
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['nome']) ?></td>
        <td>R$ <?= number_format($row['preco'], 2, ',', '.') ?></td>
        <td><?= $row['estoque'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Editar</a> |
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Excluir este produto?')">Excluir</a>
        </td>
    </tr>
    <?php endwhile;
    else: ?>
        <tr><td colspan="5">Nenhum produto encontrado.</td></tr>
    <?php endif; ?>
</table>

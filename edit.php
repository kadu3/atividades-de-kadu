<?php
include 'db.php';

$id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("SELECT * FROM produtos WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$produto = $stmt->get_result()->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $stmt = $conn->prepare("UPDATE produtos SET nome=?, preco=?, estoque=? WHERE id=?");
    $stmt->bind_param("sdii", $nome, $preco, $estoque, $id);
    $stmt->execute();

    header("Location: index.php");
}
?>

<h2>Editar Produto</h2>
<form method="POST">
    Nome: <input type="text" name="nome" value="<?= htmlspecialchars($produto['nome']) ?>" required><br>
    Preço: <input type="number" name="preco" step="0.01" value="<?= $produto['preco'] ?>" required><br>
    Estoque: <input type="number" name="estoque" value="<?= $produto['estoque'] ?>" required><br>
    <button type="submit">Atualizar</button>
</form>
<a href="index.php">Voltar</a>

<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $stmt = $conn->prepare("INSERT INTO produtos (nome, preco, estoque) VALUES (?, ?, ?)");
    $stmt->bind_param("sdi", $nome, $preco, $estoque);
    $stmt->execute();

    header("Location: index.php");
}
?>

<h2>Cadastrar Produto</h2>
<form method="POST">
    Nome: <input type="text" name="nome" required><br>
    Preço: <input type="number" name="preco" step="0.01" required><br>
    Estoque: <input type="number" name="estoque" required><br>
    <button type="submit">Salvar</button>
</form>
<a href="index.php">Voltar</a>

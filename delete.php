<?php
include 'db.php';

$id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("DELETE FROM produtos WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php");

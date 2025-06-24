<?php
$conn = new mysqli("localhost", "root", "", "tareas_db");
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

$id = intval($_GET['id']);
$conn->query("DELETE FROM tareas WHERE id = $id");
$conn->close();

header("Location: index.html");
exit();
?>

<?php
$conn = new mysqli("localhost", "root", "", "tareas_db");
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

$tarea = $conn->real_escape_string($_POST['tarea']);
$conn->query("INSERT INTO tareas (descripcion) VALUES ('$tarea')");
$conn->close();

header("Location: index.html");
exit();
?>

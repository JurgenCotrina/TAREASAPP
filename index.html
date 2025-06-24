<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Administrador</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Panel de Administrador</h1>
    <form action="agregar.php" method="POST">
      <input type="text" name="tarea" placeholder="Nueva tarea..." required>
      <button type="submit">Agregar tarea</button>
    </form>
    <ul>
      <?php
      $conn = new mysqli("localhost", "root", "", "tareas_db");
      if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
      }
      $result = $conn->query("SELECT * FROM tareas ORDER BY id DESC");
      while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['descripcion']) .
             " <a class='delete' href='eliminar.php?id={$row['id']}'>Eliminar</a></li>";
      }
      $conn->close();
      ?>
    </ul>
  </div>
</body>
</html>

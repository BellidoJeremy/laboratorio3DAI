<!DOCTYPE html>
<html>
  <head>
    <title>Registro exitoso</title>
  </head>
  <body>
    <h1>Registro exitoso</h1>
    <?php
      // Verificar si se han recibido los datos del formulario
      if (isset($_POST['nombre']) && isset($_POST['email'])) {
        // Asignar los valores recibidos a variables
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        // Mostrar los datos ingresados
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Email: $email</p>";
      } else {
        echo "<p>No se han recibido los datos del formulario</p>";
      }
    ?>
  </body>
</html>

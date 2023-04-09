<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Resultado de notas</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    h1 {
      text-align: center;
      margin-top: 50px;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px #ccc;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      margin-bottom: 10px;
    }

    button[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #3e8e41;
    }

    .resultado {
      max-width: 500px;
      margin: 0 auto;
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px #ccc;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <h1>Ingrese las notas del alumno</h1>

  <form action="" method="POST">
    <label for="nota1">Nota 1:</label>
    <input type="number" name="nota1" id="nota1" required>

    <label for="nota2">Nota 2:</label>
    <input type="number" name="nota2" id="nota2" required>

    <label for="nota3">Nota 3:</label>
    <input type="number" name="nota3" id="nota3" required>

    <button type="submit">Calcular</button>
  </form>

  <?php
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  $promedio = ($nota1 + $nota2 + $nota3) / 3;

  if ($promedio >= 13) {
    $mensaje = "Aprobado";
  } else {
    $mensaje = "Reprobado";
  }
  ?>

  <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
    <div class="resultado">
      <p>La nota promedio es: <?php echo $promedio ?></p>

      <p>El alumno está <?php echo $mensaje ?></p>
    </div>
  <?php } ?>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recuperar los valores enviados por el formulario
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $num3 = $_POST["num3"];
  $num4 = $_POST["num4"];

  // Realizar los cálculos
  $suma = $num1 + $num2;
  $producto = $num3 * $num4;

  // Mostrar los resultados
  echo "La suma de los dos primeros números es: " . $suma . "<br>";
  echo "El producto del tercer y cuarto número es: " . $producto;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Calculadora de números</title>
    <link rel="stylesheet" href="estilos2.css">
  </head>
  <body>
    <h1>Calculadora de números</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="num1">Primer número:</label>
      <input type="number" name="num1" required><br>

      <label for="num2">Segundo número:</label>
      <input type="number" name="num2" required><br>

      <label for="num3">Tercer número:</label>
      <input type="number" name="num3" required><br>

      <label for="num4">Cuarto número:</label>
      <input type="number" name="num4" required><br>

      <button type="submit">Calcular</button>
    </form>
  </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recuperar los valores enviados por el formulario
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];

  // Validar que el segundo número no sea cero
  if ($num2 == 0) {
    echo "El segundo número no puede ser cero";
  } else {
    // Realizar los cálculos
    if ($num1 > $num2) {
      $suma = $num1 + $num2;
      $resta = $num1 - $num2;
      echo "La suma de los dos números es: " . $suma . "<br>";
      echo "La diferencia entre los dos números es: " . $resta;
    } else {
      $producto = $num1 * $num2;
      $division = $num1 / $num2;
      echo "El producto de los dos números es: " . $producto . "<br>";
      echo "La división del primer número entre el segundo número es: " . $division;
    }
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Comparador de números</title>
    <link rel="stylesheet" href="estilos3.css">
  </head>
  <body>
    <h1>Comparador de números</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="num1">Primer número:</label>
      <input type="number" name="num1" required><br>

      <label for="num2">Segundo número:</label>
      <input type="number" name="num2" required><br>

      <button type="submit">Comparar</button>
    </form>
  </body>
</html>

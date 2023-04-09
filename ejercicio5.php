<!DOCTYPE html>
<html>
<head>
	<title>Mayor de tres números</title>
	<style>
		body {
			background-color: #F5F5F5;
			font-family: Arial, sans-serif;
			color: #333;
			text-align: center;
			padding-top: 50px;
		}

		h1 {
			font-size: 36px;
			margin-bottom: 20px;
		}

		form {
			display: inline-block;
			margin-bottom: 30px;
		}

		label {
			display: block;
			margin-bottom: 5px;
			font-size: 18px;
		}

		input[type="number"] {
			padding: 10px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
			margin-bottom: 10px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border-radius: 5px;
			border: none;
			font-size: 16px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}

		.resultado {
			font-size: 24px;
			margin-top: 30px;
		}
	</style>
</head>
<body>
	<h1>Mayor de tres números</h1>
	<form method="post" action="">
		<label>Ingrese el primer número:</label>
		<input type="number" name="num1" required>

		<label>Ingrese el segundo número:</label>
		<input type="number" name="num2" required>

		<label>Ingrese el tercer número:</label>
		<input type="number" name="num3" required>

		<input type="submit" value="Calcular">
	</form>

	<?php
		if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$num3 = $_POST['num3'];

			if ($num1 > $num2 && $num1 > $num3) {
				echo '<div class="resultado">El número mayor es: ' . $num1 . '</div>';
			} elseif ($num2 > $num1 && $num2 > $num3) {
				echo '<div class="resultado">El número mayor es: ' . $num2 . '</div>';
			} else {
				echo '<div class="resultado">El número mayor es: ' . $num3 . '</div>';
			}
		}
	?>

</body>
</html>

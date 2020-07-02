<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP11 homework</title>
	</head>

	<body>
		<h1>PHP 11 homework</h1>
		<?php
			$inputWidth = $_GET['input_width'];
			$inputLenght = $_GET['input_length'];
		?>
		<form>
			<input type="number" name="input_width" placeholder="Width" value="<?php echo $inputWidth; ?>">
			<input type="number" name="input_length" placeholder="Lenght" value="<?php echo $inputLenght; ?>">
			<input type="submit">
		</form>
		<?php
			$rectangular_area = $inputWidth * $inputLenght;
			echo 'Figure area: ' . $rectangular_area;
		?>
	</body>

</html>

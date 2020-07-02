<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP12 homework</title>
	</head>

	<body>
		<h1>PHP 12 homework</h1>
		<?php
			$inputName = $_POST['input_name'];
			$inputSurname = $_POST['input_surname'];
		?>
		<form method="POST">
			<input type="text" name="input_name" placeholder="Name" value="<?php echo $inputName; ?>">
			<input type="text" name="input_surname" placeholder="Surname" value="<?php echo $inputSurname; ?>">
			<input type="submit">
		</form>
		<?php
			echo 'Your name: ' . $inputName . '<br>' . 'Your surname: ' . $inputSurname;
		?>
	</body>

</html>

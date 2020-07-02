<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP 5 homework</title>
	</head>

	<body>
		<h1>PHP 05 HOMEWORK</h1>
		<?php
			$cities3 = [
				'Tokyo' => ['13.6', '1868', 'Japan'],
				'Vashington' => ['0.6', '1790', 'USA'],
				'Moscow' => ['11.5', '1147', 'Motherrussia']
			];
			print_r($cities3);
			$cities3 += [
				'London' => ['8.6', '43', 'England']
			];

		?>

		<ul>
			<li><?php echo 'Gyventojų skaičius: ' . $cities3['London'][0] . ' mln.'; ?></li>
			<li><?php echo 'Ikurtas: ' . $cities3['London'][1] . ' m.'; ?></li>
			<li><?php echo 'Salis: ' . $cities3['London'][2]; ?></li>
		</ul>
	</body>

</html>



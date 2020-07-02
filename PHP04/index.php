<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP4 homework</title>
	</head>

	<body>
		<h1>PHP 04 homework</h1>
		<?php
			$cities = ['Berlynas', 'Roma', 'Londonas'];
			$cities[] = 'Tokijas';
				print_r($cities);
		?>
		<ul>
			<li><?php echo $cities[1] ?></li>
		</ul>
		<?php
			$cities2 = [
				'Tokijas' => '13.6',
				'Vashingtonas' => '0.6',
				'Maskva' => '11.5'
			];
			print_r($cities2);
			$cities2 += ['Londonas' => '8.6'];
		?>
		<ul>

			<?php
				echo 'Gyventojų skaičius: ' . $cities2['Tokijas'] . ' mln.';
			?>
		</ul>
	</body>

</html>

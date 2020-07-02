<?php

	$temp = ['4', '3', '9', '19', '19', '9', '12', '20', '24', '20', '12', '14', '18', '21', '20', '23', '16', '16', '15', '19', '19', '17', '17', '15', '12', '13', '13', '15', '19', '21'];
	print_r($temp);
	echo '<ul>';
		$average_temp = 0;
		foreach($temp as $calc_temp) {
			$average_temp += $calc_temp;
		}
		echo '</br>' . 'Vidutine temperatura ' . round($average_temp / 30);

		rsort($temp);
		echo '<br>' . 'Silciausios temperaturos:';
		for ($i = 0; $i < 5; $i++) {
			echo ' ' . $temp[$i];
		}

		echo '<br>' . 'Salciausios temperaturos:';
		for ($i = 25; $i <= 29; $i++) {
			echo ' ' . $temp[$i];
		}
	echo '</ul>';

	echo '<br>' . 'Silciausios temperaturos naudojant arrayslice: ';
		print_r(array_slice($temp, 0, 5));
	echo '<br>' . 'Salciausios temperaturos naudojant arrayslice: ';
		print_r(array_slice($temp, -5, 5));

?>

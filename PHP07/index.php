<?php

	$cities4 = ['Tokijas', 'Vasingtonas', 'Maskva', 'Londonas'];
	print_r($cities4);
	echo '<ul>';
		for ($i = 0; $i < count($cities4); $i++) {
			echo '<li>';
				print_r($cities4[$i]);
			echo '</li>';
		}
	echo '</ul>';
	echo '<ul>';
		foreach($cities4 as $allcities) {
			echo $allcities . ' | ';
		}
	echo '</ul>';

?>

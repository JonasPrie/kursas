<?php

	$metai = 1790;
	$cities3 = [
		'Vashington' => ['0.6', '1790', 'USA']
	];

	if ($metai > $cities3['Vashington'][1]) {
		echo 'Vashingtonas yra JAV sostinė.';
	} elseif ($metai == $cities3['Vashington'][1]) {
		echo $cities3['Vashington'][2] . ' sostine vis dar Filadelfijoje';
	} else {
		echo 'Liko ' . ($cities3['Vashington'][1] - $metai) . ' metai iki Vashingtono ikurimo';
	}

?>

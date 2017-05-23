	<?php

	/*
	 * Efetue um algorítmo PHP que receba dois valores quaisquer e efetue sua multiplicação utilizando para isso apenas o operador “+”, visto que:
			(3 * 5) = 5 + 5 + 5
			(4 * 12) = 12 + 12 + 12 + 12
	 */

$fator1 = isset($_POST['fator1']) ? $_POST['fator1']: '';
$fator2 = isset($_POST['fator2']) ? $_POST['fator2']: '';

for ($i = 1; $i <= $fator1; $i++) {
	$arr[] = $fator2;
}

echo join(' + ', $arr);

echo ' = ' . array_sum($arr);
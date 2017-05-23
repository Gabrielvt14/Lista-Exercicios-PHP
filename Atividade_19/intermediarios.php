<?php

	/**
	 * Efetue um algorítmo PHP que receba dois valores quaisquer e  imprime todos os valores intermediários a ele, veja exemplo:
			Primeiro Valor = 5
			Segundo Valor = 15
			Imprime: 6 7 8 9 10 11 12 13 14
	 */

$n1 = isset($_POST['n1']) ? $_POST['n1']: '';
$n2 = isset($_POST['n2']) ? $_POST['n2']: '';

$array = array($n1, $n2);
arsort($array);

for ($i = $array[0] + 1; $i < $array[1]; $i++) {
	echo $i . '<br />';
}
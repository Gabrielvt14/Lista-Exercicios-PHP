<?php

	/**
	 * Efetue um algorítmo PHP que receba uma string, encontre o número total de caracteres desta e imprima todos os números que existem entre o e o número total, exemplo:
			string = “Gil Eduardo de Andrade”
			total_caracter =  22
			Imprime: 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21
	 */
	
$frase = isset($_POST['frase']) ? $_POST['frase']: '';

echo 'String: ' . $frase . '<br/>';
$total_caracter = strlen($frase);
echo 'Total de caracteres: ' . $total_caracter . '<br/><hr/>';

for ($i = 1; $i < $total_caracter; $i++) {
	echo $i . '<br/>';
}
<?php

	/**
	 * Efetue um algorítmo PHP que receba um valor qualquer e  calcule o seu fatorial (!), sabendo que faotrial de um número é:
			7! = 7*6*5*4*3*2*1
			4! = 4*3*2*1
	 */

$valor = isset($_POST['fatorial']) ? $_POST['fatorial']: '';

for ($i = $valor - 1; $i > 0; $i--) {
	$valor = $valor * $i;
}

echo $_POST['fatorial'] . '! = ' . $valor;
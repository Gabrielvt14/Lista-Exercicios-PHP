<?php

/**
 * Faça um programa que calcule a soma dos 50 primeiros números pares.
 */

for ($i = 0; $i <= 50; $i += 2) {
	$sum += $i;

	/**
	 * Outra forma de solução, utilizando array
	 *
	 *	$n[] = $i;
		$sum = array_sum($n);
	 * 
	 */
}

echo 'A soma dos 50 primeiros numeros e: ' . $sum;
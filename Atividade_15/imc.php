<?php

	/**
	 * Efetue um algorítmo PHP que receba a altura e o sexo de uma pessoa, calcule e imprima o seu peso ideal, utilizando as seguintes fórmulas:
			• para homens: (72.7 * H) - 58
			• para mulheres: (62.1 * H) – 44.7
	 */

$altura = isset($_POST['altura']) ? $_POST['altura']: '';
$sexo = isset($_POST['sexo']) ? $_POST['sexo']: '';
var_dump($sexo);

if ($_POST['sexo'] == 'masculino') {
	echo $pesoIdeal = (72.7 * $altura) - 58;
} else {
	echo $pesoIdeal = (62.1 * $altura) - 44.7;
}
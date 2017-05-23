<?php

	/**
	 * Efetue um algorítmo PHP que calcule e imprima o salário reajustado de um funcionário de acordo com a seguinte regra:
			• salários até 300, reajuste de 50%
			• salários maiores que 300, reajuste de 30%
	 */

	$salario = isset($_POST['salario']) ? $_POST['salario']: '';

	if ($salario <= 300) {
		echo 'Com o reajuste de 50% o salário ficou R$' . $salario = (0.5 * $salario) + $salario;
	} else {
		echo 'Com o reajuste de 30% o salário ficou R$' .  $salario = (0.3 * $salario) + $salario;
	}
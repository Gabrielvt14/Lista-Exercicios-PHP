<?php

	/**
	 * Efetue um algorítmo PHP que receba um valor digitado pelo usuário e imprima o texto "o valor é maior que 10" caso isso seja verdade, senão imprima "o valor é menor que 10".
	 */

	if($_POST['nr'] > 10) {
		header('Location: Atividade_01.php?return=1');
	} else {
		header('Location: Atividade_01.php?return=2');
	}
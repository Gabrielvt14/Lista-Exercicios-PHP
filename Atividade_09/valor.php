<?php

	/**
	 * 	Efetue um algorítmo PHP que receba um valor digitado pelo usuário e imprima o texto "o valor é maior ou igual a 10" caso isso seja verdade, senão imprima "o valor não é maior ou igual a 10"
	 */

$n = isset($_POST['valor']) ? $_POST['valor']: '';

if ($n >= 10) {
	header('Location: index.php?return=1');
} else {
	header('Location: index.php?return=2');
}
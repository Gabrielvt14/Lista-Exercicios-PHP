<?php

	/**
	 * Efetue um algorítmo PHP que receba um valor digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. Imprima na tela: "Valor Positivo", "Valor Negativo", "Igual a Zero"
	 */

$n = isset($_POST['valor']) ? $_POST['valor']: '';

if ($n < 0) {
	header('Location: index.php?return=1');
} elseif ($n > 0) {
	header('Location: index.php?return=2');
} else {
	header('Location: index.php?return=3');
}
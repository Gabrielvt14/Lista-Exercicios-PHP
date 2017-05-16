<?php

/**
 * Efetue um algorítmo PHP que receba os valores A, B, C e D. Efetue a soma entre A e C, a multiplicação entre B e D e verifique se o resultado da soma é maior, menor ou igual ao da multiplicação. Imprima: "A+C é maior que B+D", "A+C é menor que B+D", "A+C é igual a B+D".
 */

$n1 = isset($_POST['a']) ? $_POST['a']: '';
$n2 = isset($_POST['b']) ? $_POST['b']: '';
$n3 = isset($_POST['c']) ? $_POST['c']: '';
$n4 = isset($_POST['d']) ? $_POST['d']: '';

$ac = $n1 + $n3;
$bd = $n2 * $n4;

if ($ac > $bd) {
	header('Location: index.php?return=1');
} elseif($ac < $bd) {
	header('Location: index.php?return=2');
} else {
	header('Location: index.php?return=3');
}
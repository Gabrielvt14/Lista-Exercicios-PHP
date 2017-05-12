<?php

	//	Descubra se um número digitado é par ou ímpar. 

$n = isset($_POST['n']) ? $_POST['n']: null;

if ($n % 2) {
	echo 'O número digitado é ÍMPAR';
} else {
	echo 'O número digitado é PAR';
}
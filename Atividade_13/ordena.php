<?php

	//	Efetue um algorítmo PHP que receba os valores A, B e imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".

$n1 = isset($_POST['n1']) ? $_POST['n1']: null;
$n2 = isset($_POST['n2']) ? $_POST['n2']: null;

$n = array($n1, $n2);

asort($n);

foreach ($n as $key => $value) {
	echo $value . '<br/>';
}
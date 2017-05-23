<?php

	//	Efetue um algorítmo PHP que receba duas strings, e descubra se elas são iguais ou diferentes, imprimindo “IGUAL” ou “DIFERENTE” respectivamente.

$str1 = isset($_POST['str1']) ? $_POST['str1']: '';
$str2 = isset($_POST['str2']) ? $_POST['str2']: '';

$strcmp = strcmp($str1, $str2);

if ($strcmp === 0) {
	header('Location: index.php?str=igual');
} else {
	header('Location: index.php?str=diferente');
}
<?php

	//	Faça um programa que entre com cinco números e imprima o quadrado de cada número. 

$n = $_POST;

foreach ($n as $key => $value) {
	echo 'O quadrado de ' . $value . ' e: ' . $value * $value . '<br />';
}
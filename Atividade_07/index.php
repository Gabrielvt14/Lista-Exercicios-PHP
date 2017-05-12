<?php

/**
 * ======================================================================================================================
 * 											Enunciado
 * ======================================================================================================================
 * 
 * Um funcionário recebe aumento salarial anualmente. Sabe-se que:
		• Esse funcionário foi contratado em 2005, com salário inicial de R$1000,00;
		• Em 2006 recebeu aumento de 1,5% sobre seu salário inicial;
		• A partir de 2007 (inclusive), os aumentos salariais sempre corresponderam ao dobro do percentual do ano anterior

	Exiba o salário atual desse funcionário. 
 */

$salario = 1000;
$ano = 2005;
$anoAtual = date('Y');
$primeiroAumento = 0.015;

for ($i = $ano + 1; $i <= $anoAtual; $i++) {
	echo ' - '.$salario += $salario * $primeiroAumento . "\r\n";
	$primeiroAumento *= 2;
}
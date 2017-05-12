<?php

/**
 * Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números. 

 */

$val1 = isset($_POST['valor1']) ? $_POST['valor1']: null;
$val2 = isset($_POST['valor2']) ? $_POST['valor2']: null;

$operacao = isset($_POST['operacao']) ? $_POST['operacao']: null;
//var_dump($_POST);exit;


switch ($operacao) {
	case 'adicao':
		echo $val1 + $val2;
		break;

	case 'sub':
		echo $val1 - $val2;
		break;

	case 'div':
		echo $val1 / $val2;
		break;

	case 'mult':
		echo $val1 * $val2;
		break;
	
	default:
		echo 'ERRO!!! Escolha uma operação!';
		break;
}

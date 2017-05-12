<?php

	//	Faça um programa em que o usuário digite a sigla de um estado (ex.: RJ, SP). Se este estado for SP, escreva Paulista, se RJ, escreva Carioca, se MG, escreva Mineiro. Caso seja outro estado, escreva Outro Estado. 

$estado = isset($_POST['estado']) ? $_POST['estado']: null;

switch ($estado) {
	case 'sp':
		echo 'Paulista';
		break;

	case 'rj':
		echo 'Carioca';
		break;

	case 'mg':
		echo 'Mineiro';
		break;
	
	case 'outro':
		echo 'Outro estado';
		break;

	default:
		echo 'Selecione uma opção';
		break;
}
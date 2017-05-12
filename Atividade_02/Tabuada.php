<?php

/**
 * Faça um programa em que o usuário possa escolher qual tabuada ele deseja exibir. Exiba todos os resultados de 0 a 10.
	Ex.: Tabuada do 5. Resultado:
		5 x 0 = 0
		5 x 1 = 5
		5 x 2 = 10
			...
		5 x 10 = 50 
 */

$nr = isset($_POST['nr']) ? $_POST['nr']: '';

for ($i = 0; $i <= 10; $i++) {
	echo $nr . ' x ' . $i . ' = ' . $nr*$i . '<br />';
}
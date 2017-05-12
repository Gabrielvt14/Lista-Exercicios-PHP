<?php

	/**
	 * Efetue um algorítmo PHP que receba um valor digitado pelo usuário e imprima o texto "o valor é maior que 10" caso isso seja verdade, senão imprima "o valor é menor que 10".
	 */

	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="verifica.php">
	<input type="text" name="nr" placeholder="Digite um numero qualquer">
	<input type="submit" value="Valor">
	<?php if($_GET['return'] == 1) { ?>
	<p>O valor é MAIOR que 10.</p>
	<?php } elseif($_GET['return'] == 2){ ?>
	<p>O valor é MENOR que 10</p>
	<?php } ?>
</form>
</body>
</html>
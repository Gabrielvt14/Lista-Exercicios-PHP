<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<!--
	Efetue um algorítmo PHP que receba um valor digitado pelo usuário e imprima o texto "o valor é maior ou igual a 10" caso isso seja verdade, senão imprima "o valor não é maior ou igual a 10"
-->
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<form method="POST" action="valor.php">
		<input type="text" name="valor" placeholder="Digite um numero aqui"><br/>
		<input type="submit" value="Enviar">
	</form>

	<?php if ($_GET['return'] == 1) { ?>
	<p>O valor É maior ou igual a 10.</p>
	<?php } elseif ($_GET['return'] == 2) { ?>
	<p>O valor NÃO é maior ou igual a 10</p>
	<?php } ?>

</body>
</html>
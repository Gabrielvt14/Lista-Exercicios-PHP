<?php error_reporting(0); ?>
<!DOCTYPE html>
<!--
	Efetue um algorítmo PHP que receba um valor digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. Imprima na tela: "Valor Positivo", "Valor Negativo", "Igual a Zero"
-->
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<form method="POST" action="check.php">
		<input type="text" name="valor" placeholder="Digite um número aqui"><br />
		<input type="submit" value="Enviar">
	</form>

	<?php if ($_GET['return'] == 1) { ?>
	<p>O valor digitado é NEGATIVO</p>

	<?php } elseif ($_GET['return'] == 2) { ?>
	<p>O valor digitado é POSITIVO</p>

	<?php } elseif($_GET['return'] == 3) { ?>
	<p>O valor digitado é ZERO</p>
	<?php } ?>

</body>
</html>
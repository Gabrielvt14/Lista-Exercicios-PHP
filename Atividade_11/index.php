<?php error_reporting(0); ?>
<!DOCTYPE html>
<!--
	Efetue um algorítmo PHP que receba os valores A, B, C e D. Efetue a soma entre A e C, a multiplicação entre B e D e verifique se o resultado da soma é maior, menor ou igual ao da multiplicação. Imprima: "A+C é maior que B+D", "A+C é menor que B+D", "A+C é igual a B+D".
-->
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<form method="POST" action="soma.php">
		<input type="text" name="a" placeholder="Digite o número aqui | A |"><br/>
		<input type="text" name="b" placeholder="Digite o número aqui | B |"><br/>
		<input type="text" name="c" placeholder="Digite o número aqui | C |"><br/>
		<input type="text" name="d" placeholder="Digite o número aqui | D |"><br/>
		<input type="submit" value="Enviar">
	</form>

	<?php if ($_GET['return'] == 1) { ?>
		<p>A+C é <b>MAIOR</b> que B*D</p>

	<?php } elseif ($_GET['return'] == 2) { ?>
		<p>A+C é <b>MENOR</b> que B*D</p>

	<?php } elseif($_GET['return'] == 3) { ?>
		<p>A+C é <b>IGUAL</b> a B*D</p>
	<?php } ?>
</body>
</html>
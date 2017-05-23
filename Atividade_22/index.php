<!DOCTYPE html>
<!--
	Efetue um algorítmo PHP que receba duas strings, e descubra se elas são iguais ou diferentes, imprimindo “IGUAL” ou “DIFERENTE” respectivamente.
-->
<html>
<head>
	<meta charset="utf-8">
	<title>Comparação Strings</title>
</head>
<body>

<form method="POST" action="compara.php">
	<input type="text" name="str1" placeholder="Digite uma palavra"><br/><br/>
	<input type="text" name="str2" placeholder="Digite uma palavra"><br/><br/><br/>
	<input type="submit" value="Enviar">
</form>

<?php if (@$_GET['str'] == 'igual') { ?>
	<h3>Igual</h3>
<?php } elseif(@$_GET['str'] == 'diferente') { ?>
	<h3>Diferente</h3>
<?php } ?>
</body>
</html>
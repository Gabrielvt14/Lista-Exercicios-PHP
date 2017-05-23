<!DOCTYPE html>
<!--
	Efetue um algorítmo PHP que receba a altura e o sexo de uma pessoa, calcule e imprima o seu peso ideal, utilizando as seguintes fórmulas:
		• para homens: (72.7 * H) - 58
		• para mulheres: (62.1 * H) – 44.7
-->
<html>
<head>
	<title>Peso Ideal</title>
</head>
<body>

<form method="POST" action="imc.php">

<input type="text" name="altura" placeholder="Digite sua altura. ex: 1.75"><br /><br />

<input type="radio" name="sexo" value="masculino"/> Masculino<br />
<input type="radio" name="sexo" value="feminino"/> Feminino<br /><br />

<input type="submit" value="Enviar">

</form>

</body>
</html>
<!DOCTYPE html>

<!--

	Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números. 

-->

<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora</title>
</head>
<body>
<form method="POST" action="calculadora.php">
	<p>Digite dois números e escolha a operação:</p>
	<p>Primeiro número:</p>
	<input type="text" name="valor1">
	<p>Segundo número:</p>
	<input type="text" name="valor2">
	<p>
		<input type="radio" name="operacao" value="adicao"/>Adição<br/>
		<input type="radio" name="operacao" value="sub"/>Subtração<br/>
		<input type="radio" name="operacao" value="div"/>Divisão<br/>
		<input type="radio" name="operacao" value="mult"/>Multiplicação
	</p>
	<input type="submit" value="Calcular">
</form>
</body>
</html>
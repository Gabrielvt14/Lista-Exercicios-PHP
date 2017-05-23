<?php error_reporting(0); ?>
<!DOCTYPE html>
<!-- 
	Efetue um algorítmo PHP que receba quatro notas de um aluno, calcule e imprima a média aritmética das notas e a mensagem de aprovado para média superior ou igual a 7.0 ou a 
	mensagem de reprovado para média inferior a 7.0.
	-->
<html>
<head>
	<meta charset="utf-8">
	<title>Notas - Média</title>
</head>
<body>

<form method="POST" action="Media.php">
	<input type="text" name="n1" placeholder="Nota 1"><br/>
	<input type="text" name="n2" placeholder="Nota 2"><br/>
	<input type="text" name="n3" placeholder="Nota 3"><br/>
	<input type="text" name="n4" placeholder="Nota 4"><br/>
	<input type="submit" value="Enviar">
</form>

<?php if ($_GET['situacao'] == 'aprovado') { ?>
	<h3>APROVADO!</h3>
<?php } elseif ($_GET['situacao'] == 'reprovado') { ?>
	<h3>REPROVADO!</h3>
<?php } ?>

</body>
</html>
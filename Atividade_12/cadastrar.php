<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="static/css/style.css">

	<meta charset="utf-8">
	<title>Cadastro de alunos</title>
</head>
<body>

<!--
	=======================================================================
									NAVBAR
	=======================================================================
-->
<nav class="navbar navbar-inverse">
  <div id="inicio" class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#inicio"><b>Sistema de notas</b></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	<li><a href="index.php"><u>Home</u></a></li>
  	  </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perfil <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li role="separator" class="divider"></li>
            <li><a href="core/logout.php">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
	<div class="row">
		<form method="POST" action="core/Cadastrar.php">
		  <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
		    <input type="text" class="form-control" name="nomeAluno" id="exampleInputNome1" aria-describedby="emailHelp" placeholder="Nome completo do aluno">
		  </div>
		  <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
		    <input type="number" min="0" max="10" step="any" class="form-control" name="nota1" id="exampleInputNota1" placeholder="Nota 1">
		  </div>
		  <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
		    <input type="number" min="0" max="10" step="any" class="form-control" name="nota2" id="exampleInputNota1" placeholder="Nota 2">
		  </div>
		  <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
		    <input type="number" min="0" max="10" step="any" class="form-control" name="nota3" id="exampleInputNota1" placeholder="Nota 3">
		  </div>
		  <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
		    <input type="number" min="0" max="10" step="any" class="form-control" name="nota4" id="exampleInputNota1" placeholder="Nota 4">
		  </div>
		  	<button type="submit" min="0" max="10" class="btn btn-primary">Cadastrar</button>
		</form>
	</div>
</div>

<script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="static/js/bootstrap.min.js"></script>

</body>
</html>
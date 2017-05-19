<?php
  
  session_start();

  require_once 'core/MostraAluno.php';
  require_once 'core/Check.php';

  $id = isset($_GET['id']) ? $_GET['id']: null;

  $mostraAluno = new MostraAluno();

	$selectId = "SELECT * FROM aluno WHERE id=:id";

	$stmt = $mostraAluno->pdo->prepare($selectId);
	$stmt->bindValue('id', $id, PDO::PARAM_INT);
	$stmt->execute();
	$id = $stmt->fetch(PDO::FETCH_ASSOC);

	if (! is_array($id)) {
		echo "<script language='javascript' type='text/javascript'>alert('Não há nenhum usuário cadastrado com esse ID.');window.location.href='../index.php';</script>";
	}

?>
<!DOCTYPE html>
<html>
<head>

<link rel="apple-touch-icon" sizes="57x57" href="midia/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="midia/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="midia/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="midia/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="midia/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="midia/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="midia/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="midia/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="midia/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="midia/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="midia/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="midia/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="midia/img/favicon/favicon-16x16.png">
<link rel="manifest" href="midia/img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="midia/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="static/css/style.min.css">

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
      	<li><a href="home.php"><u>Home</u></a></li>
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
		<form method="POST" action="core/Editar.php">
		  <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
		    <input type="text" class="form-control" name="nomeAluno" id="exampleInputNome1" aria-describedby="emailHelp" value="<?php echo $id['nome'] ?>">
		  </div>
		  <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
		    <input type="number" min="0" max="10" step="any" class="form-control" name="nota1" id="exampleInputNota1" value="<?php echo $id['nota1'] ?>">
		  </div>
		  <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
		    <input type="number" min="0" max="10" step="any" class="form-control" name="nota2" id="exampleInputNota1" value="<?php echo $id['nota2'] ?>">
		  </div>
		  <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
		    <input type="number" min="0" max="10" step="any" class="form-control" name="nota3" id="exampleInputNota1" value="<?php echo $id['nota3'] ?>">
		  </div>
		  <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
		    <input type="number" min="0" max="10" step="any" class="form-control" name="nota4" id="exampleInputNota1" value="<?php echo $id['nota4'] ?>">
		  </div>
		  <div>
		    <input type="hidden" name="id" value="<?php echo $id['id'] ?>">
		  </div>
		  	<button type="submit" min="0" max="10" class="btn btn-primary">Atualizar</button>
		</form>
	</div>
</div>

<!--
	=======================================================================
									FOOTER
	=======================================================================
-->

<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 footerleft ">
        <div class="logofooter"> Notas</div>
        <p>Sistema para cálculo de notas de alunos. Desenvolvido para prática na linguagem PHP</p>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4 paddingtop-bottom">
      <h2 style="margin-left: 15%; margin-bottom: 5%; color: white;">Social</h2>
        <div class="gh-page" data-href="https://www.github.com/Gabrielvt14" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="gh-xfbml-parse-ignore">
            <blockquote cite="https://www.github.com/Gabrielvt14"><a href="https://www.github.com/Gabrielvt14" target="_blank"><img src="midia/img/github-logo.png" style="max-width: 15%; margin-right: 5%;"> Github</a></blockquote>
          </div>
        </div>
        <div class="gh-page" data-href="https://www.linkedin.com/in/gabriel-vieira-teodoro-b60932a7?trk=nav_responsive_tab_profile_pick" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="gh-xfbml-parse-ignore">
            <blockquote cite="https://www.linkedin.com/in/gabriel-vieira-teodoro-b60932a7?trk=nav_responsive_tab_profile_pic"><a href="https://www.linkedin.com/in/gabriel-vieira-teodoro-b60932a7?trk=nav_responsive_tab_profile_pic" target="_blank"><img src="midia/img/linkedin-social-logo.png" style="max-width: 15%; margin-right: 5%;">Linkedin</a></blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
      <p><?php echo date('Y'); ?> - Desenvolvido por: <a href="https://www.github.com/Gabrielvt14" target="_blank">Gabriel Vieira</a></p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
      <p>Código fonte deste projeto <a href="https://github.com/Gabrielvt14/Lista-Exercicios-PHP/tree/master/Atividade_12" target="_blank">aqui</a></p>
    </div>
  </div>
</div>

<script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="static/js/bootstrap.min.js"></script>

</body>
</html>
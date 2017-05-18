<?php
  
  require_once 'core/MostraAluno.php';

  $mostraAluno = new MostraAluno();

  $alunos = $mostraAluno->mostraAluno();
  $totAlunos = $mostraAluno->contaAluno();

?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="static/css/style.css">

	<meta charset="utf-8">
	<title>Sistema de alunos</title>
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
      	<li><a href="cadastrar.php"><u>Cadastrar novo aluno</u></a></li>
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

<!--
	=======================================================================
									CORPO
	=======================================================================
-->

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: ">
    <center><h4 class="bg-info"><b>Total de alunos: <?php echo $totAlunos; ?></b></h4></center>
  </div>
</div>

<div class="container">
	<div class="row">
		<table class="table table-hover">
		  <tr>
		  	<th>Nome</th>
		  	<th>Média</th>
		  	<th>Ações</th>
		  </tr>
		  <tr>
      <?php while ($registros = $alunos->fetch(PDO::FETCH_ASSOC)): ?>
		  	<td><?php echo $registros['nome']; ?></td>
		  	<td><?php echo $registros['media']; ?></td>
		  	<td>
          <a href="editar.php?id=<?php echo $registros['id'] ?>" class="btn btn-primary btn-sm">Editar</a>
          <a href="core/Delete.php?id=<?php echo $registros['id'] ?>" onclick="return confirm('Tem certeza de que deseja remover usuário? Se clicar em OK não sera possível desfazer esta ação');" class="btn btn-danger btn-sm">Remover</a>
        </td>
		  </tr>
    <?php endwhile; ?>
		</table>
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
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footerleft ">
        <div class="logofooter"> Notas</div>
        <p>Sistema para cálculo de notas de alunos. Desenvolvido para prática na linguagem PHP</p>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-2 paddingtop-bottom">
      <h2 style="margin-left: 15%; margin-bottom: 5%; color: white;">Social</h2>
        <div class="gh-page" data-href="https://www.github.com/Gabrielvt14" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="gh-xfbml-parse-ignore">
            <blockquote cite="https://www.github.com/Gabrielvt14"><a href="https://www.github.com/Gabrielvt14" target="_blank"><img src="midia/img/github-logo.png" style="max-width: 15%; margin-right: 5%;"> Github</a></blockquote>
          </div>
        </div>
        <div class="lk-page" data-href="https://www.linkedin.com/in/gabriel-vieira-teodoro-b60932a7?trk=nav_responsive_tab_profile_pick" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="lk-xfbml-parse-ignore">
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
      <p>Código fonte deste projeto <a href="###">aqui</a></p>
    </div>
  </div>
</div>

<script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="static/js/bootstrap.min.js"></script>

</body>
</html>
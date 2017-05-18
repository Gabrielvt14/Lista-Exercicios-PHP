<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"/>

    <title>Sistema de notas</title>

    <!-- Bootstrap Core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/home.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- ==================== CORPO INICIO - BOOTSTRAP ==================== -->
<h1>
  <p href="#" class="typewrite" data-period="2000" data-type='[ "O poder", "de aprender", "brincando :)"]'>
    <span class="wrap"></span>
  </p>
</h1>

<div class="container" id="txt">
    <div class="row">
        <p>Este site tem como objetivo demonstrar meus conhecimentos em relação a sistemas de login, sistemas de cadastro e orientação a objetos, a fins de aperfeiçoar e praticar meus conhecimentos na linguagem PHP.</p>
    </div>
</div>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center">Bem-vindo</h1>
        </div>
        <form method="POST" action="core/Login.php">
             <div class="modal-body">
                 <div class="form-group">
                     <input type="email" name="email" class="form-control input-lg" placeholder="E-mail"/>
                 </div>

                 <div class="form-group">
                     <input type="password" name="senha" class="form-control input-lg" placeholder="Senha"/>
                 </div>

                 <div class="form-group">
                     <input type="submit" class="btn btn-block btn-lg btn-primary" value="Login"/>
                     <span><a href="newUser.php">Cadastre-se</a></span>
                 </div>
             </div>
        </form>
    </div>
 </div>


<script type="text/javascript" src="static/js/home.js"></script>

</body>

</html>

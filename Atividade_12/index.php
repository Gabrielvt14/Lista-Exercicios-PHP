<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"/>

    <title>Sistema de notas</title>

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

    <!-- Bootstrap Core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/home.min.css" rel="stylesheet">

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
                     <p><b>Desenvolvido por: </b><a href="https://github.com/Gabrielvt14/" target="_blank">Gabriel Vieira</a></p>
                 </div>
             </div>
        </form>
    </div>
 </div>


<script type="text/javascript" src="static/js/home.js"></script>

</body>

</html>

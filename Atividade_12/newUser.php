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
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center">Realize seu cadastro abaixo</h1>
        </div>
        <form method="POST" action="core/NewUser.php">
             <div class="modal-body">
                <div class="form-group">
                     <input type="text" name="nome" class="form-control input-lg" placeholder="Nome"/>
                 </div>

                 <div class="form-group">
                     <input type="email" name="email" class="form-control input-lg" placeholder="E-mail"/>
                 </div>

                 <div class="form-group">
                     <input type="password" name="senha" class="form-control input-lg" placeholder="Senha"/>
                 </div>

                 <div class="form-group">
                     <input type="submit" class="btn btn-block btn-lg btn-primary" value="Cadastrar"/>
                     <span><a href="home.php">Voltar para página de login</a></span>
                 </div>
             </div>
        </form>
    </div>
 </div>


<script type="text/javascript" src="static/js/home.js"></script>

</body>

</html>

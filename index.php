<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
    <!-- menu -->
    
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand">Rede de fotos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?cadastro">Cadastro</a>
          </li>
        </ul>
        <form class="d-flex form-inline" method="POST">
        <form class="d-flex form-inline" method="POST">
            <input class="form-control mr-sm-2" name="txtLoginEmail" type="text" placeholder="E-mail">
            
            
       
        <form class="d-flex form-inline" method="POST">
            <input class="form-control mr-sm-2" name="txtLoginSenha" type="password" placeholder="Senha">
            <button class="btn btn-outline-success my-2 my-sm-0" name="btnLogin" type="submit">Login</button>
        </form> 
        
      </div>
    </div>
  </div>
</nav>

<br>
<br>
<br>


    <!-- menu -->

    <div class="container-fluid">

    <!-- rotas -->
    <?php
    if(isset($_GET['cadastro'])){
        require_once './view/cadastro.php';
    }
    elseif(isset($_GET['home'])){
        require_once './view/home.php';
    }
    else{
        require_once './view/home.php';
    }
    
    ?>
    <!-- rotas -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
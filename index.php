<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Inicio</title>
    <!-- Icone / logo -->
    <link rel="icon" href="/img/Tw.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Custom styles -->
    <link rel="stylesheet" href="cover.css">
  </head>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('/php/cadastro-login/img/codweb.gif'); /* adiciona gif no fundo */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-family: Arial, sans-serif;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Sombra para as frase*/
    }

    .cover-container {
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      background: rgba(0, 0, 0, 0.5); 
      padding: 20px;
    }

    .nav-masthead .nav-link {
      color: rgba(255, 255, 255, 0.75);
      border-bottom: 0.25rem solid transparent;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); 
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
      border-bottom-color: rgba(255, 255, 255, 0.25);
    }

    .nav-masthead .nav-link + .nav-link {
      margin-left: 1rem;
    }

    .nav-masthead .active {
      color: #fff;
      border-bottom-color: #fff;
    }

    h1, p.lead, footer p {
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); 
    }

    footer {
      color: rgba(255, 255, 255, 0.5);
    }
  </style>
  <body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <!-- menu -->
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0"><strong>TechWeb</strong></h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="login.php">Login</a>
            <a class="nav-link" href="cadastro.php">Cadastre-se</a>
          </nav>
        </div>
      </header>
      <!-- Conteudo da pagina -->
      <main class="px-3">
        <h1>Seja bem-vindo(a)</h1>
        <p class="lead">Esta página é uma aplicação web simples, utilizando <br> Bootstrap 5+ e futuramente o PHP. O objetivo é criar um sistema de cadastro e login</p>
        <p class="lead">
          <a href="https://github.com/larissassk/cadastro-login" class="btn btn-lg btn-light fw-bold border-white bg-white">Abrir</a>
        </p>
      </main>

      <footer class="mt-auto text-white-50">
        <p>Template obtido no <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, criado por <a href="http://" class="text-white">@mdo</a> <br>Projeto criado por <a href="https://www.linkedin.com/in/larissa-manrique/" class="text-white">@LarissaManrique</a>.</p>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

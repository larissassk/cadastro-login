<!doctype html>
<html lang="pt-BR" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Cadastre-se</title>
  <!-- Icone / logo -->
  <link rel="icon" href="/img/Tw.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!-- Bootstrap CSS -->
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
  <link rel="stylesheet" href="index.css">
  
</head>
<style>
  body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  background-color: #343a40;
}

.cover-container {
  width: 100%;
  max-width: 960px;
  padding: 15px;
  text-align: center;
}
h1, p{
  margin: 20px;
}

.form-control {
  background-color: #969696;
  border-color: #dee2e6;
  color: #fff;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}
footer{
  font-size: small;
}

@media (max-width: 768px) {
  .cover-container {
    padding: 10px;
  }

  .form-control {
    min-width: 100%;
  }

  .form-label, .form-text {
    text-align: center;
  }
}
.form-signin input[type="tipoUser"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
<body class="d-flex h-100 text-center text-white bg-dark">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <!-- Menu -->
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start mb-0"><strong>TechWeb</strong></h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
          <a class="nav-link" href="login.php">Login</a>
          <a class="nav-link active" href="cadastro.php">Cadastre-se</a>
        </nav>
      </div>
    </header>
      <!-- Conteudo da pagina -->
    <main class="px-3 my-auto">
      <h1>Cadastre-se</h1>
      <form action="" method="post" class="w-100 mx-auto" style="max-width: 400px; ">
      <div class="mb-3">
          <input type="text" class="form-control" id="nome" name="nome" required aria-describedby="nome" placeholder="Insira seu nome">
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" id="email" name="email" required aria-describedby="emailHelp" placeholder="Insira seu email">
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" id="password" name="password" required placeholder="Insira sua senha">
        </div>
        <div class="mb-3">
          <select class="form-select" id="tipoUser" name="tipoUser" required>
            <option value="" selected disabled>Tipo de Usuário</option>
            <option value="1">Administrador</option>
            <option value="2">Usuário Comum</option>
            <option value="3">Outro</option>
          </select>
        </div>
        <button id="butsalvar" type="submit" class="btn btn-primary w-100">Entrar</button>
        <p>Tens uma conta? <a style="color: white;" href="login.php">Inicia sessão</a><br></p>
      </form>
    </main>

    <!-- Footer por ultimo -->
    <footer class="mt-auto text-white-50">
      <p>Template obtido no <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, criado por <a href="https://" class="text-white">@mdo</a> <br>Projeto criado por <a href="https://www.linkedin.com/in/larissa-manrique/" class="text-white">@LarissaManrique</a>.</p>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

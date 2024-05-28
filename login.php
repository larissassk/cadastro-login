<!doctype html>
<html lang="pt-BR" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Login</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
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

.form-label {
  text-align: left;
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

@media (max-width: 768px) {
  .cover-container {
    padding: 10px;
  }

  .form-control {
    min-width: 100%;
    margin: 2px;
  }

  .form-label, .form-text {
    text-align: center;
  }
}

</style>
<body class="d-flex h-100 text-center text-white bg-dark">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
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

    <main class="px-3 my-auto">
      <h1>Login</h1>
      <form action="processa_login.php" method="post" class="w-100 mx-auto" style="max-width: 400px;" onsubmit="return validarFormulario()">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button id="butsalvar" type="submit" class="btn btn-primary w-100">Entrar</button>
      </form>
    </main>

    <footer class="mt-auto text-white-50">
      <p>Template obtido no <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, criado por <a href="https://" class="text-white">@mdo</a> <br>Projeto criado por <a href="https://www.linkedin.com/in/larissa-manrique/" class="text-white">@LarissaManrique</a>.</p>
    </footer>
  </div>

</body>
</html>

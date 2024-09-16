<?php
include_once 'css/view/topo.php';
include_once 'css/view/menu.php';
?>

<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Login · Biblioteca </title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="images/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="images/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="images/favicons/manifest.json">
  <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="images/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form class="form-signin" method="POST" action="backend/valida_login.php">
      <img class="mb-4" src="css/login.png" alt="Icone de Login" width="60">
      <h1 class="h3 mb-3 fw-normal">Login</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Digite o email cadastrado" name="email"
          required autofocus>
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Digite a senha" name="senha"
          required>
        <label for="floatingPassword">Senha</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar-me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit" name="acao">Enviar</button>
    </form>
  </main>



</body>

</html>

<?php
include_once 'css/view/rodape.php';
?>
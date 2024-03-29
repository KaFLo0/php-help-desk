<?php
  define('MAIN_PATH', 'http://localhost/app-help-desk');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Essential metadatas -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= MAIN_PATH ?>/assets/logo.png">
  <!-- Style -->
  <link rel="stylesheet" href="<?= MAIN_PATH ?>/style/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= MAIN_PATH ?>/style/style.css">

  <title>App Help Desk</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-dark bg-dark">
      <a href="#top" class="navbar-brand">
        <img src="<?= MAIN_PATH ?>/assets/logo.png" class="d-inline-block align-top" alt="Logo da página">
        App Help Desk
      </a>
    </nav>
  </header>

  <div class="container">

    <header class="row align-items-center justify-content-center flex-column">
      <h1 class="display-1">Help Desk</h1>
      <p class="lead">Faça o login para ter acesso aos recursos da página!</p>
    </header>

    <div class="row">
      <div class="card-login">

        <div class="card">
          <div class="card-header">Login</div>
          <div class="card-body">
            <form action="<?= MAIN_PATH ?>/valida_login.php" method="post">
              <div class="form-group">
                <input id="form_input_1" class="form-control" name="email" required autocomplete="email" type="email" placeholder="E-mail">
              </div>
              <div class="form-group mb-0">
                <input id="form_input_2" class="form-control mb-3" name="senha" required type="password" placeholder="Senha">
              </div>
              <!-- Bloco condicional para tratamento caso o login seja negado ou ocorra algum erro -->
              <?php
                if(isset($_GET['login']) && $_GET['login'] == 'erro') {
              ?>
              <script>
                // input1 e input2 vão mudar a classe dos dois inputs da página para ficar mais intuitivo ao usuário
                const input1 = document.getElementById('form_input_1');
                input1.className += ' is-invalid';
                const input2 = document.getElementById('form_input_2');
                input2.className = 'form-control is-invalid';

                // Uma <div> é criada abaixo do input de `senha` para exibir ao usuário uma mensagem de erro
                const input_feedback = document.createElement('div');
                input_feedback.className = 'invalid-feedback mb-1';
                input_feedback.innerHTML = 'Usuário ou senha inválido(s)';
                input2.insertAdjacentElement('afterend', input_feedback);
              </script>
              <!-- Bloco condicional para caso o usuário tente acessar outras páginas antes de ter feito login -->
              <?php
                }else if(isset($_GET['login']) && $_GET['login'] == 'erro2') {
              ?>
              <div class="text-danger text-center small mb-3">É necessário o login antes de acessar outras páginas.</div>
              <?php } ?>

              <button class="btn btn-lg btn-info btn-block mt-0" type="submit">Entrar</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

  <footer class="mt-auto">
    <hr>
    <nav class="navbar w-100 navbar-light bg-transparent">
      <ul class="navbar-nav mx-auto flex-row">
        <li class="nav-item mr-3">
          <a href="https://github.com/KaFLo0" target="_blank" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="black" class="bi bi-github" viewBox="0 0 16 16">
              <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
            </svg>
            GitHub
          </a>
        </li>
        <li class="nav-item">
          <a href="https://www.linkedin.com/in/kaio-davy-costa-200338293/" target="_blank" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="lightblue" class="bi bi-linkedin" viewBox="0 0 16 16">
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg>
            LinkedIn
          </a>
        </li>
      </ul>
    </nav>
  </footer>

</body>

</html>
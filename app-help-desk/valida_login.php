<?php

  session_start();

  // Variável de controle
  $autenticacao = false;
  $usuario_ID = null;
  $usuario_perfil_ID = null;

  $perfis = [1 => "Administrativo", 2 => "Usuário"];

  // "Banco de dados"
  $usuarios_app = array(
    ['ID' => 1, 'email'=>'adm@teste.com.br', 'senha' => '12345', 'perfil_ID' => 1],
    ['ID' => 2, 'email'=>'user@teste.com.br', 'senha' => '12345', 'perfil_ID' => 1],
    ['ID' => 3, 'email'=>'joao@teste.com.br', 'senha' => '12345', 'perfil_ID' => 2],
    ['ID' => 4, 'email'=>'maria@teste.com.br', 'senha' => '12345', 'perfil_ID' => 2]
  );

  // Verificar se o usuário existe, caso sim, mudar as variáveis de controle para permitir o acesso do usuário
  foreach($usuarios_app as $user) {
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
      $autenticacao = true;
      $usuario_ID = $user['ID'];
      $usuario_perfil_ID = $user['perfil_ID'];
    }
  }

  // Se for autenticado, redireciona para a home.php, caso não, redireciona para `index.php` e informa ao usuário que o login falhou
  if($autenticacao) {
    $_SESSION['autenticado'] = 'SIM'; // Parâmetro para autenticação da sessão atual
    $_SESSION['ID'] = $usuario_ID; // Parâmetro para identificação de qual usuário está na sessão atual(usado para verificar se o usuário tem privilégios de administrador)
    $_SESSION['perfil_ID'] = $usuario_perfil_ID;
    header('Location: home.php');
  } else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
  }

?>
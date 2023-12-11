<?php

  // Variável de controle
  $autenticacao = false;

  // "Banco de dados"
  $usuarios_app = array(
    ['email'=>'adm@teste.com.br', 'senha' => '12345'],
    ['email'=>'user@teste.com.br', 'senha' => 'abcd']
  );

  foreach($usuarios_app as $user) {
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
      $autenticacao = true;
    }
  }

  if($autenticacao) {
    echo 'Usuário autenticado com sucesso';
  } else {
    header('Location: index.php?login=erro');
  }

?>
<?php
  // Iniciando as variáveis de sessão para este script
  session_start();
  // Destruir as variáveis de sessão globais e forçar o redirecionamento para a página inicial(index.php)
  session_destroy();
  header('Location: index.php');
?>
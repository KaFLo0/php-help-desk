<?php

  session_start();

  // Verificando se a chave que o script irá usar como critério de separação está presente em algum dos valores da superglobal $_POST
  foreach($_POST as $i) {
    $texto[] = str_replace('#', '', $i); // Aproveitando da dinamicidade do php, $texto[] já é criado como um array dos valores tratados de $_POST
  }
  // transformando o array $texto[] numa variável de string $texto,
  // para escrever sem erros no registro de chamados
  $texto = $_SESSION['ID'] . '#' . implode('#', $texto) . PHP_EOL;

  // criando o arquivo de registro, escrevendo os dados e após isso, o fechando
  $arquivo = fopen('arquivo.hd', 'a');
  fwrite($arquivo, $texto);
  fclose($arquivo);

  // redirecionar o usuário para a página `abrir_chamado.php`
  header('Location: abrir_chamado.php?redirect=sucesso');

?>
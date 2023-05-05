<?php
  if (isset($_GET['password'])) {
    $length = intval($_GET['password']);
    if ($length < 1) {
      $length = 20;
    }
  } else {
    $length = 20;
  }

  $password = generateRandomPassword($length);

  function generateRandomPassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?~@#-_+<>[]{}!$%^&*()';

    // Genera una stringa casuale con la lunghezza specificata
    $password = '';
    for ($i = 0; $i < $length; $i++) {
      $password .= $chars[rand(0, strlen($chars) - 1)];
    }

    return $password;
  }
?>
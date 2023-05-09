<?php

session_start();

  $_SESSION['password'] = $password;

  if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
    // Cancella la variabile di sessione
    unset($_SESSION['password']);
  } 
 
$_SESSION

?>
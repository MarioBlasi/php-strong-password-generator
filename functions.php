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

<form method="GET">
    <label for="password-length"><h5 class="pt-5">Inserisci la lunghezza della password: </h5> </label>
    <input class="btn btn-primary btn-lg "  type="number" type="password" name="password" id="password-length" required min="1" max="99">
    <div class="w-50 rounded" >
        <button class="btn btn-secondary mt-2" type="submit">Genera password</button>
    </div>
</form>
<p><h5> La tua password casuale è: </h5><b> <h4> <?php echo $password; ?></h4></b></p>
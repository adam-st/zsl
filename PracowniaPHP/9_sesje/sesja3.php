<?php
  session_start();//na każdej stronie
  unset($_SESSION['name']);
  session_destroy();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja 3</title>
  </head>
  <body>
    Trzecia strona<hr>
    Witaj
    <?php

      echo $_SESSION['name'];

     ?>
     na stronie!<br>
     <?php
     echo "Identyfikator sesji: ", session_id();
      ?>
      <a href="./sesja1.php">Pierwsza strona</a>
  </body>
</html>

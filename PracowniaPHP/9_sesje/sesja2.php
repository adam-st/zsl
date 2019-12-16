<?php
  session_start();//na każdej stronie
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja 2</title>
  </head>
  <body>
    Druga strona<hr>
    Witaj
    <?php

      echo $_SESSION['name'];

     ?>
     na stronie!<br>
     <?php
     echo "Identyfikator sesji: ", session_id();
      ?>
      <a href="./sesja3.php">Trzecia strona</a>
  </body>
</html>

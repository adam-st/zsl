<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Poczatek pliku
    <?php
      include './3_dolaczanie_pliku/plik.php';
      include_once './3_dolaczanie_pliku/plik.php';

      require './3_dolaczanie_pliku/plik.php';
      require_once './3_dolaczanie_pliku/plik.php';
     ?>
    Koniec pliku
  </body>
</html>

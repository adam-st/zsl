<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php</title>
    <style>
    body{background-color:#303035;color:#F0F0F0;}
    </style>
  </head>
  <body>
    <?php

    $name = 'Janusz';
    echo "Twoje imię: $name<br>";

    //systemy liczbowe

      $x = 10;
      $hex = 0xA;
      $oct = 21;
      $bin = 0b111;

      echo $hex;
      echo $oct;
      echo $bin, '<hr>';

      //heredoc

      $name = 'Anna';
      $surname = 'Kowal';

      echo <<< ETYKIETA
        imię: $name<br>
        Nazwisko: $surname<hr>
ETYKIETA;

$x= <<< ETYKIETA
  imię: $name<br>
  Nazwisko: $surname<hr>
ETYKIETA;

  echo $x;

  echo <<< 'E'
    NowDoc<br>
    imie: $name<br>
    nazwisko: $surname<br>
E;

  $x = 20;
  echo "Nazwa zmiennej: \$x na wartosc $x";
    ?>
  </body>
</html>

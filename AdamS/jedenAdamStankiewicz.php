<?php

  echo <<< FORM
  <form method="post">

    <input type="text" name="imie" placeholder="Wpisz imię (max 10)"><br><br>
    <input type="integer" name="wiek" placeholder="Podaj wiek"><br><br>
    <input type="submit" name="button" value="Zatwierdź"><br><br>

  </from>
FORM;

if (isset($_POST['imie'])) {
  $imie = $_POST['imie'];
  }

if (isset($_POST['wiek'])) {
  $wiek = $_POST['wiek'];
  }



  echo "I. Dane przed poprawą: $imie",'<br>';
  $imie = trim(ucfirst(strtolower($imie)));
  echo "II. Dane po poprawie: $imie",'<br>','<br>';



  echo "I. Dane przed poprawą: $wiek",'<br>';
  $wiek = trim(ucfirst(strtolower($wiek)));
  echo "II. Dane po poprawie: $wiek",'<br>','<br>';



if ($wiek%2 ==0) {
  echo "$wiek jest liczbą parzystą.";
}
else {
  echo "$wiek nie jest liczbą parzystą.";
}



?>

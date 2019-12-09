<?php
session_start();

if (isset($_SESSION['name']))
  if (isset($_SESSION['surname']))
    if (isset($_SESSION['age']))
      if (isset($_SESSION['nation']))
      {
        echo "Prawidłowo przesłany formularz";
        echo "<br><br>Imię i nazwisko: ";
        echo $_SESSION['name'];
        echo "  ";
        echo $_SESSION['surname'];
        echo "<br>Wiek: ";
        echo $_SESSION['age'];
        echo "<br>Narodowość: ";
        echo $_SESSION['nation'];
      }



?>

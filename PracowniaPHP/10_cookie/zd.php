<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ZadanieDomowe</title>
  </head>
  <body>
    <form method="post">
      <br>Imie: <input type="text" name="name"><br><br>
      Nazwisko: <input type="text" name="surname"><br><br>
      Wiek: <input type="text" name="age"><br><br>
      Narodowość: <input type="text" name="nation"><br><br>
      <input type="submit" value="Wyślij">

      <?php
        if(strlen($_POST['name'])>10 ||
           strlen($_POST['surname'])>10 ||
           strlen($_POST['age'])>10 ||
           strlen($_POST['nation'])>10)
           {
             echo "Źle wprowadzone dane!";
           }
        else{
        $_SESSION['name']=$_POST['name'];
        $_SESSION['surname']=$_POST['surname'];
        $_SESSION['age']=$_POST['age'];
        $_SESSION['nation']=$_POST['nation'];
        setcookie('age',$_SESSION['age']);
        setcookie('nation',$_SESSION['nation']);
      }
       ?>
    </form>
  </body>
</html>

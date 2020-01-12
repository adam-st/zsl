<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dane.php</title>
  </head>
  <body>
    <form action="sprawdz.php" method="post">
      <input type="text" name="login" placeholder="Login:">
      <input type="text" name="pass" placeholder="Hasło:">
      <input type="submit" name="button" value="Wyślij">
    </form>
<?php
  $city = $_POST['city'];
  $name = $_POST['name'];
  $color = $_POST['color'];

  session_start();
  $_SESSION['color'] =  $color;
  $_SESSION['city'] =  $city;

  $data = array(
    "city" => "$city",
    "name" => "$name",
    "color" => "$color"
  );

  foreach ($data as $key => $value) {
echo <<< "E"
  <table>
    <tr>
      <td>$key</td>
      <td>$value</td>
    </tr>
  </table>
E;
  }

  setcookie("name1", "2",time()+(2*24*60*60));
 ?>
  </body>
</html>

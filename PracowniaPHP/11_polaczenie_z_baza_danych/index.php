<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sklep papierniczy</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    //skrpyt 1
    $sql = "SELECT `nazwa` FROM `towary` WHERE `promocje`=1";

    $connect=mysqli_connect("localhost","root","","sklep");

    $result = mysqli_query($connect,$sql);

    echo "<ul>";

    while ($row = mysqli_fetch_assoc($result)) {
      "SELECT `nazwa` FROM `towary` WHERE `promocje`=1";
      echo "<li>";
      echo $row["nazwa"],"<br>";
      echo "</li>";
    }
    echo "</ul>";

    mysqli_close($connect);
    ?>
 <form method="post">
   <select name="towar">
     <?php
        $sql= "SELECT `nazwa` FROM `towary`";

        $connect=mysqli_connect("localhost","root","","sklep");

        $result = mysqli_query($connect,$sql);

        while ($row = mysqli_fetch_assoc($result)) {
          echo "<option value=\"$row[nazwa]\">$row[nazwa]</option>";
        }
        mysqli_close($connect);
      ?>
   </select>
   <input type="submit" name="button" value="przycisk">
 </form>

  <?php
   echo"<br>";
  if(isset($_POST['towar']))
    $towar= $_POST['towar'];
  echo $towar;
  $connect = mysqli_connect("localhost","root","","sklep");
  $sql = "SELECT `cena` FROM `towary` WHERE nazwa = \"$towar\"";
  $result = mysqli_query($connect,$sql);
  $row = mysqli_fetch_assoc($result);
  echo " ",$row['cena'],"<br>","<br>";
  $promotion=$row['cena']*0.85;
  echo round($promotion,2);
  echo"<br>";
  echo"<br>";
  mysqli_close($connect);

      //wyświetlenie tabeli z produktem
      $connect=mysqli_connect("localhost","root","","sklep");
      $sql = "SELECT * FROM `towary` WHERE nazwa=\"$towar\"";
      $result = mysqli_query($connect,$sql);

      $row = mysqli_fetch_assoc($result);
   ?>
  <table>
    <tr>
      <th>Nazwa</th>
      <th>Cena</th>
      <th>Promocja</th>
      <th>Dostawca</th>
    </tr>

    <tr>
      <?php
      $cena=$row['cena'];
      $promocja=round($cena*0.85);

      echo <<<ROW
      Towary
      <td>$row[nazwa]</td>
      <td>$row[cena]</td>
      <td>$promocja</td>
      <td>$row[idDostawcy]</td>
ROW;
       ?>
    </tr>
  </table>

   <?php
    mysqli_close($connect);
    ?>

<?php

      $connect=mysqli_connect("localhost","root","","sklep");
      $sql = "SELECT * FROM `dostawcy`";
      $result = mysqli_query($connect,$sql);


   ?>
  <table>
    <tr>
      <th>Nazwa</th>
      <th>Adres</th>
    </tr>

    <tr>

      <?php
    while ($row = mysqli_fetch_assoc($result)) {

        echo<<<ROW
        <tr>
        <br>
        <td>$row[nazwa]</td>
        <td>$row[adres]</td>
        </tr>
ROW;
      }

       ?>
    </tr>
  </table>

   <?php
    mysqli_close($connect);
    ?>



  </body>
</html>

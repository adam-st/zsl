<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
  </head>
  <body>
    <?php
      //skrypt1
      $sql = "SELECT `nazwa` from `towary` where `promocja`=1";

      $connect = mysqli_connect("localhost", "root", "", "sklep");

      $result = mysqli_query($connect, $sql);

      echo "<ul>";
      while ($row = mysqli_fetch_assoc($result))  {
        echo "<li>",$row["nazwa"],"</li>";
      }
      echo "</ul>";

      mysqli_close($connect);

     ?>

     <form method="post">
       <select name="towar">
         <option value="Gumka do mazania">Gumka do mazania</option>
         <option value="Cienkopis">Cienkopis</option>
         <option value="Pisaki 60 szt">Pisaki 60 szt</option>
         <option value="Markery 4 szt">Markery 4 szt</option>
       </select>
       <input type="submit" name="button" value="Wyślij">
     </form>

     <?php
        //skrypt2

        if(isset($_POST['towar']))
        {
          $towar= $_POST['towar'];
          //echo $towar;

          $sql = "SELECT `cena` from `towary` where nazwa=\"$towar\"";
          $connect = mysqli_connect("localhost", "root", "", "sklep");
          $result = mysqli_query($connect, $sql);

          $row = mysqli_fetch_assoc($result);

          $promotion = $row['cena'] * 0.85;

          echo round($promotion, 2);

          mysqli_close($connect);
        }
      ?>
  </body>
</html>

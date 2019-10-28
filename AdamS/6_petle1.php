<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabelka</title>
    <link rel="stylesheet" href="6_petle.css">
  </head>
  <body>
    <form  method="post">
      <input type="text" name="max" placeholder="Max">
      <input type="submit" value="Prześlij"><br><br><hr><br>
    </form>

    <table>
    <?php
      $max = $_POST['max'];
      $row=1;
      $sum=0;
      $sum1 =0;
      $sum2 =0;
      do {
        $col = 1;
        echo '<tr>';
        do {
          $colrow=$col*$row;

          if($row+$col==$max+1)
          {
            echo "<td class='red'>$colrow</td>";
            $sum1=$sum1+$colrow;
          }
          else {
            if($col==$row)
            {
            echo "<td class='white'>*$colrow</td>";

            $sum2=$sum2+$colrow;
            }
          else {
              echo "<td>$colrow</td>";
          }
          }
          $col++;
        } while ($col <= $max);

        $row++;
        echo '</tr>';
      } while ($row <= $max);

     ?>
   </table>
   <?php $sum=$sum1+$sum2;echo"Suma $sum"; ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabelka</title>
    <link rel="stylesheet" href="6_petle.css">
  </head>
  <body>
    <table>
    <?php

      $row=1;

      do {
        $col = 1;
        echo '<tr>';
        do {
          $colrow=$col*$row;
          $max=15;
          if($row+$col==$max+1)
            echo "<td class='red'>$colrow</td>";
          else {
            if($col==$row)
            echo "<td class='white'>*$colrow</td>";
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
  </body>
</html>

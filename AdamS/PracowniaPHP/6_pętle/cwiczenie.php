<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabliczka mnożenia</title>
    <style>
      body {
        background-color: #333;
        color: #FFF;
      }
      table, th, td {
      border: 2px solid black;
      border-collapse: collapse;
      font-size: 25px;
      text-align: center;
      margin: 0 auto;
      margin-top: 100px;
      }
      td {
      padding:10px;
      }
    </style>
  </head>
  <body>
    <table>
      <?php
        for ($i=1; $i <= 10; $i++) {
          echo "<tr>";
            for ($j=1; $j <= 10; $j++) {
              $il=$i*$j;
              if($i==1 ||$j==1)
              echo "<td style='background-color:white;color:black'>$il</td>";
              else
              echo "<td>$il</td>";
            }
          echo"</tr>";
        }

      ?>
    </table>
  </body>
</html>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <link rel="stylesheet" href="5_form.css">
    </style>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>

    <?php

      require_once '5_1_form.php';

      if( !empty($_POST['city']) && !empty($_POST['name']) && !empty($_POST['name']))
      {
          $city = $_POST['city'];
          $name = $_POST['name'];
          $address = nl2br($_POST['address']);
          $school = $_POST['school'];

      require_once '5_2_form.php';
    ?>

    <hr><br>
    <table>
      <tr>
        <th>Imie</th>
        <th>Miasto</th>
        <th>Adres</th>
        <th>Szkoła</th>
      </tr>
      <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $city; ?></td>
        <td><?php echo $address; ?></td>
        <td><?php echo $school; ?></td>
      </tr>
    </table>

    <?php
        //echo "Miasto: $city";//Miasto: Poznań
      }
     ?>
  </body>
</html>

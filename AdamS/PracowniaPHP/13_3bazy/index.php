<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Połączenie z bazą</title>
  </head>
  <body>
    <h3>Tabela user</h3>
    <?php
      if (isset($_SESSION['message'])) {
        echo $_SESSION['message'],'<br><br>';
      }
      require_once('./connect.php');

      //$sql = "select * from user where name =\"Adan\"";
      $sql = "select * from user";

      //$sql = "SELECT user.`id`,user.`name`, user.`surname`, user.`birthday`, user.`color`, color.id, color.color FROM `user` INNER JOIN color ON user.color=color.id";


      if ($result = mysqli_query($connect, $sql)) {
        //echo "Prawidłowe zapytanie do bazy";
        $_SESSION['num'] = mysqli_num_rows($result);

        echo 'Ilość rekordów w tabeli user: ', $_SESSION['num'],'<br><br>';

        if(isset($_SESSION['oldNum'])) {
          if ($_SESSION['num'] > $_SESSION['oldNum']) {
            echo "Dodano nowy rekord<br>";
          }
        }
        echo <<< TAB
        <table>
          <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Ulubiony kolor</th>
         </tr>
TAB;
        while($row = mysqli_fetch_assoc($result)) {
          echo <<< ROW
          <tr>
            <td>$row[name]</td>
            <td>$row[surname]</td>
            <td>$row[birthday]</td>
            <td>$row[color]</td>
            <td><a href="./scripts/del_user.php?id=$row[id]">Usuń</a></td>
            <td><a href="index.php?update_user=$row[id]">Zaktualizuj</a></td>
          </tr>
ROW;
        }

      }else {
        echo "Błędne zapytanie do bazy";
      }
        ?>
     </table>
     <br><hr>
     <h3>Dodaj nowego użytkownika</h3>

     <form action="./scripts/add_user.php" method="post">
       <input type="text" name="name" value="Janusz">
       <input type="text" name="surname" value="Nowak">
       <input type="date" name="birthday">

       <select name="color">
         <?php
          $sql = "SELECT color FROM color";
          $result = mysqli_query($connect, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            $color=$row["color"];
            $id=$row["id"];


            echo "<option value=\"$id\">$color</option>";

          }

          ?>

       </select><br><br>
       <input type="submit" name="button" value="Dodaj użytkownika">
     </form>

     <?php
      if(isset($_GET['update_user'])){
        $id= $_GET['update_user'];
        $sql = "select * from user where id='$id'";
        $result = mysqli_query($connect, $sql);
        $user = mysqli_fetch_assoc($result);

        $name = $user['name'];
        $surname = $user['surname'];
        $date = $user['birthday'];

        echo <<< form
        <hr><h3>Aktualizacja użytkownika</h3>
        <form action="scripts/update_user.php" method="post"><br><br>
          <input type="text" name="name" value="$name"><br><br>
          <input type="text" name="surname" value="$surname"><br><br>
          <input type="date" name="birthday" value="$date"><br><br>
          <input type="submit" name="button" value="Aktualizuj użytkownika">
          <input type="hidden" name="id" value="$id">
        </form>
form;
      }
      ?>
     <br><hr>
     <h3>Colors</h3>
     <?php

     $sql = "select * from color";

     $resultcolor = mysqli_query($connect, $sql);

     while($rowcolor = mysqli_fetch_assoc($resultcolor)) {
       echo <<< ROWCOLOR
       <tr><td>
         $rowcolor[color]
       </td></tr>
ROWCOLOR;
}
     ?>
     <form action="./scripts/add_color.php" method="post">
       <input type="text" name="color" value="red">
       <input type="submit" name="button" value="Dodaj color">
     </form>

  </body>
</html>

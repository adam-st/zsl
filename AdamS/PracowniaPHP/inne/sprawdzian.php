<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ćwiczenie</title>
  </head>
  <body>
    <form method="post">
      <input type="intiger" name="fields" placeholder="Podaj ilość pól: ">
      <input type="submit" name="button" value="Wyślij"><br><br>
      <?php
        if(isset($_POST['fields'])) {
          $pola = $_POST['fields'];

          $dane = array(
          array("imie","nazwisko","adres")
          );

          for ($i=0; $i < $pola; $i++) {
              echo <<< FORM
              <form method="post">
                <input type="text" name="name" placeholder="Wpisz imię">
                <input type="text" name="surname" placeholder="Wpisz nazwisko">
                <input type="text" name="address" placeholder="Podaj adres">
              </form>
              FORM;

              if(isset($_POST['name']) && isset($_POST['suname']) && isset($_POST['address'])) {

                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $address = $_POST['address'];

                $dane = array(
                array("$name","$surname","$address")
                );

                foreach ($dane as $key => $value) {
                  foreach ($dane[$key] as $key => $value) {
                    echo "$value ";
                  }
                  echo "<br>";
                  }
                }
              }
            echo '<input type="button" name="submit" value="Wyślij">';

          }
       ?>
    </form>
  </body>
</html>

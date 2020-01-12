<?php

  $login  = $_POST['login'];
  $pass  = $_POST['pass'];


  if($login == 'jan' && $pass == 'tajne@')  {
    header('location: admin.php');
    }
    else {
      if($login == 'Janusz' && $pass == 'tajne')  {
        header('location: user.php');
      }
      else {
        header('location: index.php');
      }
    }


 ?>

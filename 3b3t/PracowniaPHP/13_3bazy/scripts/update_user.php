<?php
  session_start();

  if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthday = $_POST['birthday'];
    $id = $_POST['id'];

    require_once('../connect.php');

    $sql = "UPDATE `user` SET `name`='$name',`surname`='$surname',`birthday`='$birthday' WHERE `id`='$id'";

    mysqli_query($connect, $sql);

    $_SESSION['message']= "Prawidłowo zaktualizowano użytkownika o id=$id<br>";

  }
  header('location:../');

 ?>

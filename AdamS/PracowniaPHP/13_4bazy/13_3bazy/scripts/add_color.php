<?php

if(!empty($_POST['color'])) {
  $color = $_POST['color'];

  require_once('../connect.php');

  $sql = "INSERT INTO `color`(`color`) VALUES ('$color')";

  if($result = mysqli_query($connect, $sql)){
    header('location:../');
  }else {
    echo "error";
  }

}else{
header('location:../');
}
 ?>

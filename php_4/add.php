<?php
  include_once("config.php");

  if( isset($_POST['Submit'])){
    $name = mysqli_real_escape_string($mysqli,$_POST['uname']);
    $age = mysqli_real_escape_string($mysqli,$_POST['age']);
    $email = mysqli_real_escape_string($mysqli,$_POST['email']);

    mysqli_query($mysqli, "INSERT INTO user values('$name', '$age', '$email')");

    echo "<font color='red' >Data Added Successfully";
    echo "</br><a href='index.php'>View Result</a>";
  }



 ?>

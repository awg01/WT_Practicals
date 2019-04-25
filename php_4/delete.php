<?php
  include_once("config.php");

  $name = $_GET['name'];

  mysqli_query($mysqli, "DELETE FROM user WHERE name='$name'");

  header("Location:index.php");
 ?>

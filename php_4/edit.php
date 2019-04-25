<?php
   include_once("config.php");
   $name = $_GET['name'];

   $result = mysqli_query($mysqli, "SELECT * FROM user WHERE name='$name'");

   while ($row = mysqli_fetch_array($result)) {
     $name = $row['name'];
     $age = $row['age'];
     $email = $row['email'];
   }


   if(isset($_POST['Update'])){
     $name = mysqli_real_escape_string($mysqli, $_POST['name']);
     $age = mysqli_real_escape_string($mysqli, $_POST['age']);
     $email = mysqli_real_escape_string($mysqli, $_POST['email']);

     mysqli_query($mysqli, "UPDATE user SET name='$name', age='$age', email='$email' ");
   }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP CRUD Operations</title>
  </head>
  <body>
    <a href="index.php">HOME</a></br></br>
    <form class="mainForm" action="edit.php" method="post">

      <div class="row">
         <span class="left">
           <label for="name">Name</label>
         </span>
         <span class="right">
            <input type="text" name="name" value=" <?php echo $name; ?>">
         </span>
      </div>

      <div class="row">
         <span class="left">
           <label for="age">Age</label>
         </span>
         <span class="right">
            <input type="text" name="age" value=" <?php echo $age; ?>">
         </span>
      </div>

      <div class="row">
         <span class="left">
           <label for="email">Email</label>
         </span>
         <span class="right">
            <input type="text" name="email" value=" <?php echo $email; ?>">
         </span>
      </div>

      <input type="submit" name="Update" value="Update">
    </form>
  </body>
</html>

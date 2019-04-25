<?php
   $mysqli = mysqli_connect("localhost", "root", "your_password", "wt");
   $uname = $_GET['uname'];
   $result = mysqli_query($mysqli, "SELECT * FROM user WHERE name='$uname'");
   $row = mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
     <table>
        <tr>
           <td>Name : <?php echo $row['name']; ?></td>
           <td>Age : <?php echo $row['age']; ?></td>
           <td>Email : <?php echo $row['email']; ?></td>
        </tr>
     </table>
  </body>
</html>
<?php
    mysqli_close($mysqli);
 ?>

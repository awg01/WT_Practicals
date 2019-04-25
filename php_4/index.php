<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display Records</title>
  </head>
  <body>
    <a href="add.html">Add Data</a></br></br>
    <table width="80%" border="1">
      <tr>
        <td>Name</td>
        <td>Age</td>
        <td>Email</td>
        <td>Update</td>
      </tr>

      <?php
         include_once("config.php");
         $result = mysqli_query($mysqli, "SELECT * FROM user");

         while ($row=mysqli_fetch_array($result)) {
           echo "<tr>";
           echo "<td>".$row['name']."</td>";
           echo "<td>".$row['age']."</td>";
           echo "<td>".$row['email']."</td>";
           echo "<td><a href=\"edit.php?name=$row[name]\">Edit</a> | <a href=\"delete.php?name=$row[name]\" onClick=\"return confirm('Are you sure to Delete ?')\">Delete</a>  </td></tr>";
         }
       ?>


    </table>
  </body>
</html>

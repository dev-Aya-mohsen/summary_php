  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>show users</title>
  </head>
  <body>


  <div id="users" style="width:70%;margin:auto;padding: top 30px;">
  <h2 class="text-center">Users Lists</h2><br/>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">email</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
   <?php
   session_start();
   $user = $_SESSION['username'];
   echo $user;
       require 'connect.php';
       $sql = "SELECT * FROM `signup`";
       $result=mysqli_query($conn,$sql);
       if (mysqli_num_rows($result)>0) {
        while ($row = mysqli_fetch_assoc($result)) { 
            echo "<tr>";
            echo '<td>' .$row['id'].'</td>';
            echo '<td>' .$row['username'].'</td>';
            echo '<td>' .$row['password'].'</td>';
            echo '<td>' .$row['email'].'</td>';
            echo '<td><a href="edit.php?pid='.$row["id"].'" class="btn btn-outline-success" role="button" aria-pressed="true">edit</a></td>';
            echo '<td><a href="delete.php?pid='.$row["id"].'" class="btn btn-outline-danger" role="button" aria-pressed="true">delete</a></td>';
            echo "</tr>";

        }
       


















       }


















   ?>
  </tbody>
</table>
</div>
  </body>
  </html>
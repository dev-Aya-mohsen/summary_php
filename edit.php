<!DOCTYPE html>
<?php
    if(isset($_GET["pid"])){

        $pid = $_GET["pid"];
        //connect to database
        include("connect.php");
        //query the data from table
        $select=mysqli_query($conn,"SELECT * FROM `signup`WHERE id='$pid'");
        $row=mysqli_fetch_array($select);
     
   
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" value="<?php echo $row['id'];?>" name="id"/>
        Name:<input type="text"  name="username" value="<?php echo $row['username'];?>" /><br/>
        Password:<input type="password"  name="password" value="<?php echo $row['password'];?>" /><br>
        Email:<input type="text"  name="email" value="<?php echo $row['email'];?>" /><br>
       <input type="submit">


    </form>
</body>
</html>
<?php
    }else{
        header('location:update.php');
        }
?>
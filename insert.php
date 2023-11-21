<?php

    $username=$_POST["username"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    include 'connect.php' ;
   
    if (isset($_POST['SignUp'])) {
      $insert = "INSERT INTO `signup` (`username`,`password`,`email`) VALUES('$username','$password','$email')" ;
    }
    if ($conn->query($insert)===TRUE) {
    echo "New Record Created successfully";
    }
    else {
        echo "Error:". $insert."<br>".$conn->error;
    }
    $conn->close();
  



















?>
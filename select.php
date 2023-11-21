<?php

    if(isset($_POST["login"])){
     $username=$_POST["username"];
     $password=$_POST["password"];
     include 'connect.php';
   
     $select="SELECT * FROM `signup` where `username`='$username'";
     $result = mysqli_query($conn,$select);
         if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_array($result);
            if($row['password']==$password) {
                session_start();
                $_SESSION['username']= $username;
                header("location:show_user.php");
                }    
                else {
                echo "wrong password";
                }
        }
   
    }else{
        echo"Username is not register with the system";
    }




















?>
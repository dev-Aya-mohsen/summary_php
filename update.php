<?php
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $id=$_POST['id'];
    require 'connect.php';
 

   $update=mysqli_query($conn,"UPDATE `signup` set `username`='$username',`password`='$password',`email`='$email' WHERE id='$id'");
    if($update){
    echo'<script>alert("New record created successfully");window.location.assign("show_user.php");</script>';
 }






















?>